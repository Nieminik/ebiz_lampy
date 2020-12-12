import random

def ensure_response_structure(object_, object_name: str):  # object_name singular!!
    if not object_:
        # no objects found
        return []
    object_ = object_[object_name]
    if hasattr(object_, "items"):
        # single object found
        return [object_]
    # multiple objects found
    return object_


def fill_stocks(presta_api, source_id_to_presta_id, products_json):
    """ This one only fill the existing stock_available entities based on the scraped data."""
    SA = "stock_available"
    stocks = ensure_response_structure(presta_api.get(f"{SA}s")[f"{SA}s"], f"{SA}")

    stocks = [
        presta_api.get(f"{SA}s/{stock['@id']}")[f"{SA}"]
        for stock in stocks
    ]

    for stock in stocks:
        presta_prod_id = stock["id_product"]["#text"]
        if presta_prod_id not in source_id_to_presta_id["products"].values():
            continue

        prod_ids = source_id_to_presta_id["products"]
        source_id = {v: k for k, v in prod_ids.items()}[presta_prod_id]
        product = next((x for x in products_json if x["products_id"] == source_id), None)
        if product is None:
            continue

        first = product["quantity"].split(" ")[0]
        if first == ">100":
            quantity = random.randint(100, 200)
        else:
            try:
                quantity = int(first)
            except ValueError:
                quantity = 0

        data = {
            f"{SA}": {
                "id": stock["id"],
                "id_product": presta_prod_id,
                "id_product_attribute": stock["id_product_attribute"],
                "id_shop": stock["id_shop"],
                "id_shop_group": stock["id_shop_group"],
                "depends_on_stock": stock["depends_on_stock"],
                "out_of_stock": stock["out_of_stock"],
                "quantity": quantity,
                "location": stock["location"]
            }
        }
        presta_api.edit(f"{SA}s/{stock['id']}", data)
