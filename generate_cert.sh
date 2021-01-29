#!/bin/bash
export $(grep -v '^#' .env | xargs -d '\n')
echo "Generating self-signed cert for domain: $PS_SHOP_DOMAIN"

openssl req -new -newkey rsa:2048 -days 365 -nodes -x509 -subj "/CN=$PS_SHOP_DOMAIN" -keyout docker/ssl/server.key -out docker/ssl/server.crt
