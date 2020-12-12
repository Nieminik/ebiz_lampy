from os import getenv

from dotenv import load_dotenv

load_dotenv()

DEBUG = getenv("DEBUG", "").lower() in ("true", "1")

SOURCE_API_BASE_URL = getenv("SOURCE_API_BASE_URL", "https://api.ohi.com.pl/lm/")
SOURCE_STATIC_BASE_URL = getenv(
    "SOURCE_STATIC_BASE_URL",
    "https://www.static.luxmarket.pl/upload/galleries/products/",
)
PRESTASHOP_API_URL = getenv("PRESTASHOP_API_URL")
WEBSERVICE_KEY = getenv("WEBSERVICE_KEY")
