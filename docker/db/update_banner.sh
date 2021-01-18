echo "Setting banner url."
mariadb -u$MYSQL_USER -p$MYSQL_PASSWORD $MYSQL_DATABASE -e \
   "UPDATE ps_configuration_lang SET value = 'http://$PS_SHOP_DOMAIN/2-kategorie' WHERE id_configuration = 300;"

