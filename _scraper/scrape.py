import json
import os
from typing import Any

import requests

import settings

OUTPUT_DIR = "output"
IMAGES_DIR = "images"
HTTP_HEADERS = {
    "accept": (
        "text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,"
        "image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9"
    ),
    "accept-encoding": "gzip, deflate, br",
    "accept-language": "pl-PL,pl;q=0.9,en-US;q=0.8,en;q=0.7",
    "cache-control": "max-age=0",
    "dnt": "1",
    "upgrade-insecure-requests": "1",
    "user-agent": (
        "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 "
        "(KHTML, like Gecko) Chrome/86.0.4240.198 Safari/537.36"
    ),
}
MAIN_CATEGORY_ID = "zrodla-swiatla-led"
CATEGORY_FIELDS = [
    "products_categories_id",
    "title",
    "text_short",
    "text_long",
    "url",
    "meta_description",
    "subcategories",
    "parent_category_id",
]
CATEGORY_DETAILS_FIELDS = ["products", "producers", "filters"]
PRODUCT_FIELDS = [
    "products_id",
    "producers_id",
    "quantity",
    "type",
    "products_code",
    "popularity",
    "rating",
    "name",
    "url",
    "image_url",
    "price",
    "category_id",
]


def get_from_api(endpoint_url: str):
    url = settings.SOURCE_API_BASE_URL + endpoint_url
    return requests.get(url, headers=HTTP_HEADERS).json()


def get_static_file(resource_name: str):
    url = settings.SOURCE_STATIC_BASE_URL + resource_name
    return requests.get(url, allow_redirects=True).content


def dump_to_file(obj: Any, filename: str):
    filepath = f"{OUTPUT_DIR}/{filename}"
    with open(filepath, "w", encoding="utf-8") as file:
        json.dump(obj, file, indent="    ", ensure_ascii=False)


def save_static_file(binary_content, filepath: str):
    with open(filepath, "wb") as file:
        file.write(binary_content)


def scrape_category(cat_url_name, depth: int = 0):
    response = get_from_api(f"category/{cat_url_name}?unlimited=1")
    data = response["data"]
    cat_id = data["products_categories_id"]
    details = get_from_api(f"category-product/{cat_id}?unlimited=1")
    if depth == 0:
        data["parent_category_id"] = False
    if data["has_children"]:
        # subcategories
        subcategories = []
        category_tree = data["category_tree"]
        for category in category_tree:
            if category["depth"] == depth + 1:
                # only include direct descendants
                subcategory = scrape_category(
                    category["url"].split("/", 1)[-1], depth + 1
                )
                subcategory["parent_category_id"] = cat_id
                subcategories.append(subcategory)
        data["subcategories"] = subcategories
        # drop products and producers from non-root and non-final-leaf category
        details["products"] = []
        details["producers"] = []
    else:
        # no subcategories -> final leaf
        data["subcategories"] = []
    # drop unused fields
    data = {key: value for key, value in data.items() if key in CATEGORY_FIELDS}
    details = {
        key: value for key, value in details.items() if key in CATEGORY_DETAILS_FIELDS
    }
    data["details"] = details
    return data


def get_manufacturers(category):
    details = category.get("details", [])
    results = details.get("producers", [])

    subcategories = category.get("subcategories", [])
    for subcategory in subcategories:
        results += get_manufacturers(subcategory)

    return results


def extract_manufacturers_data(manufacturers):
    results = {}
    for manufacturer in manufacturers:
        results[manufacturer["producers_id"]] = manufacturer["name"]

    return results


def get_products(category):
    details = category.get("details", [])
    results = details.get("products", [])
    results = [product for product in results if product["type"] == "simple"]

    for product in results:
        product["category_id"] = category["products_categories_id"]

    subcategories = category.get("subcategories", [])
    for subcategory in subcategories:
        results += get_products(subcategory)

    return results


def extract_products_data(products):
    results = {}
    for product in products:
        if product["type"] == "simple":
            product["price"] = product["prices"][0]
            results[product["products_id"]] = {
                key: value for key, value in product.items() if key in PRODUCT_FIELDS
            }

    return results


def download_product_image(product):
    resource_name = product["image_url"]
    filepath = f"{IMAGES_DIR}/{resource_name}"
    if not os.path.exists(filepath):
        file = get_static_file(resource_name)
        save_static_file(file, filepath)


def main():
    main_category = scrape_category(MAIN_CATEGORY_ID)
    dump_to_file(main_category, "categories.json")

    all_manufacturers = extract_manufacturers_data(get_manufacturers(main_category))
    dump_to_file(all_manufacturers, "manufacturers.json")

    all_products = extract_products_data(get_products(main_category))
    dump_to_file(all_products, "products.json")

    for product in all_products.values():
        download_product_image(product)


if __name__ == "__main__":
    main()
