echo "Setting domain '$PS_SHOP_DOMAIN' for prestashop."
mariadb -u$MYSQL_USER -p$MYSQL_PASSWORD $MYSQL_DATABASE -e \
   "UPDATE ps_configuration SET value = '$PS_SHOP_DOMAIN' WHERE name = 'PS_SHOP_DOMAIN' OR name = 'PS_SHOP_DOMAIN_SSL';
   UPDATE ps_shop_url SET domain = '$PS_SHOP_DOMAIN', domain_ssl = '$PS_SHOP_DOMAIN';"
