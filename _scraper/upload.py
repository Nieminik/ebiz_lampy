import json
import re
from pprint import pprint
from typing import Any, OrderedDict

from prestashop_api import PrestashopApi

import settings

OUTPUT_DIR = "output"
IMAGES_DIR = "images"

presta_api = PrestashopApi(settings.PRESTASHOP_API_URL, settings.WEBSERVICE_KEY)


def load_json(filename: str):
    with open(f"{OUTPUT_DIR}/{filename}", "r", encoding="utf-8") as file:
        data = json.load(file)
    return data


def ensure_response_structure(object_, object_name: str):
    if not object_:
        # no objects found
        return []
    object_ = object_[object_name]
    if hasattr(object_, "items"):
        # single object found
        return [object_]
    # multiple objects found
    return object_


def get_objects_from_presta(endpoint: str, object_name: str):
    objects_name = {"category": "categories"}.get(object_name, f"{object_name}s")
    response = presta_api.get(endpoint)[objects_name]
    return ensure_response_structure(response, object_name)


def get_object_from_presta(endpoint: str, object_name: str):
    response = presta_api.get(endpoint)
    return response[object_name]


def add_object_to_presta(endpoint: str, data: dict, object_name: str):
    data = {object_name: data}
    # pprint(data)
    response = presta_api.add(endpoint, data)
    return response[object_name]


def edit_presta_object(endpoint: str, obj_id: str, data: dict, object_name: str):
    data = {object_name: data}
    # pprint(data)
    data[object_name]["id"] = obj_id
    response = presta_api.edit(endpoint, data)
    return response[object_name]


def dump_to_file(obj: Any, filename: str):
    filepath = f"{OUTPUT_DIR}/{filename}"
    with open(filepath, "w", encoding="utf-8") as file:
        json.dump(obj, file, indent="    ", ensure_ascii=False)


def parse_categories(categories):
    results = []
    subcategories = categories.get("subcategories", [])
    for subcat in subcategories:
        results.append(subcat)

    for subcat in subcategories:
        results += parse_categories(subcat)

    for category in results:
        if category.get("subcategories"):
            category.pop("subcategories")

    return results


def main():
    name_to_source_id = {"manufacturers": {}, "categories": {}, "products": {}}
    name_to_presta_id = {"manufacturers": {}, "categories": {}, "products": {}}
    source_id_to_presta_id = {"manufacturers": {}, "categories": {}, "products": {}}

    # manufacturers
    manufacturers = load_json("manufacturers.json")
    name_to_source_id["manufacturers"] = {
        value: key for key, value in manufacturers.items()
    }
    for man in get_objects_from_presta("manufacturers", "manufacturer"):
        man = get_object_from_presta(f"manufacturers/{man['@id']}", "manufacturer")
        name_to_presta_id["manufacturers"][man["name"]] = man["id"]

    source_id_to_presta_id["manufacturers"] = {
        s_id: name_to_presta_id["manufacturers"].get(name)
        for name, s_id in name_to_source_id["manufacturers"].items()
    }

    for man_id, man_name in manufacturers.items():
        data = {"name": man_name, "active": 1}
        if man_name in name_to_presta_id["manufacturers"]:
            # edit
            presta_id = name_to_presta_id["manufacturers"][man_name]
            edit_presta_object("manufacturers", presta_id, data, "manufacturer")
        else:
            # add
            response = add_object_to_presta("manufacturers", data, "manufacturer")
            presta_id = response["id"]
        name_to_presta_id["manufacturers"][man_name] = presta_id
        source_id_to_presta_id["manufacturers"][man_id] = presta_id

    # categories
    categories = parse_categories(load_json("categories.json"))
    name_to_source_id["categories"] = {
        cat["title"]: cat["products_categories_id"] for cat in categories
    }
    for cat in get_objects_from_presta("categories", "category"):
        if cat["@id"] not in ("1", "2"):  # base categories: "Baza", "Strona główna"
            cat = get_object_from_presta(f"categories/{cat['@id']}", "category")
            name_to_presta_id["categories"][cat["name"]["language"]["#text"]] = cat[
                "id"
            ]

    source_id_to_presta_id["categories"] = {
        c_id: name_to_presta_id["categories"].get(name)
        for name, c_id in name_to_source_id["categories"].items()
    }

    for cat in categories:
        cat_id = cat["products_categories_id"]
        cat_name = cat["title"]
        cat_parent_id = cat.get("parent_category_id")
        if cat_parent_id and cat_parent_id != "149":
            presta_parent_id = source_id_to_presta_id["categories"][cat_parent_id]
        else:
            presta_parent_id = "2"
        cat_description = cat.get("text_long") or cat.get("meta_description")
        cat_description = re.sub(r"\r|\n", "", cat_description)
        cat_description = re.sub(r"<a.*?>|<\/a>", "", cat_description)
        cat_description = re.sub(r"Lux[mM]arket(\.pl)?", "LamPy", cat_description)
        data = {
            "active": 1,
            "name": {"language": {"@id": "1", "#text": cat_name}},
            "link_rewrite": {
                "language": {"@id": "1", "#text": cat["url"].split("/", 1)[-1]}
            },
            "description": {
                "language": {
                    "@id": "1",
                    "#text": cat_description,
                }
            },
            "id_parent": presta_parent_id,
        }
        if cat_name in name_to_presta_id["categories"]:
            # edit
            presta_id = name_to_presta_id["categories"][cat_name]
            edit_presta_object("categories", presta_id, data, "category")
        else:
            # add
            response = add_object_to_presta("categories", data, "category")
            presta_id = response["id"]
        name_to_presta_id["categories"][cat_name] = presta_id
        source_id_to_presta_id["categories"][cat_id] = presta_id

    # products
    products = load_json("products.json")
    name_to_source_id["products"] = {
        prod["name"]: prod_id for prod_id, prod in products.items()
    }
    for prod in get_objects_from_presta("products", "product"):
        prod = get_object_from_presta(f"products/{prod['@id']}", "product")
        prod_name = prod["name"]["language"].get("#text")
        if prod_name:
            name_to_presta_id["products"][prod_name] = prod["id"]

    source_id_to_presta_id["products"] = {
        p_id: name_to_presta_id["products"].get(name)
        for name, p_id in name_to_source_id["products"].items()
    }

    for prod_id, prod in products.items():
        prod_name = prod["name"].replace("=", "-")
        prod_link_rewrite = (
            prod["url"].split("/", 1)[-1].replace(".", "_").replace("/", "_")
        )
        prod_manufacturer_id = source_id_to_presta_id["manufacturers"][
            prod["producers_id"]
        ]
        prod_category_id = source_id_to_presta_id["categories"][prod["category_id"]]
        data = {
            "state": 1,
            "active": 1,
            "indexed": 1,
            "show_price": 1,
            "minimal_quantity": 1,
            "available_for_order": 1,
            "name": {
                "language": {"@id": "1", "#text": prod_name},
            },
            "link_rewrite": {"language": {"@id": "1", "#text": prod_link_rewrite}},
            "id_manufacturer": prod_manufacturer_id,
            "id_category_default": prod_category_id,
            "price": prod["price"]["regular_price"].replace(",", "."),
            "associations": {
                "categories": {"category": [{"id": "2"}, {"id": prod_category_id}]}
            },
        }
        if prod_name in name_to_presta_id["products"]:
            # edit
            presta_id = name_to_presta_id["products"][prod_name]
            edit_presta_object("products", presta_id, data, "product")
        else:
            # add
            response = add_object_to_presta("products", data, "product")
            presta_id = response["id"]
        name_to_presta_id["products"][prod_name] = presta_id
        source_id_to_presta_id["products"][prod_id] = presta_id

    dump_to_file(name_to_presta_id, "name2presta.json")
    dump_to_file(source_id_to_presta_id, "source2presta.json")


if __name__ == "__main__":
    main()
