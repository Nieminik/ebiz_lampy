echo "Setting slider urls."
mariadb -u$MYSQL_USER -p$MYSQL_PASSWORD $MYSQL_DATABASE -e \
   "UPDATE ps_homeslider_slides_lang SET url = 'https://$PS_SHOP_DOMAIN/led-gwint-e14/601-osram-led-star-classic-p45-5w-e14-barwa-ciepla.html' WHERE id_homeslider_slides = 1;
   UPDATE ps_homeslider_slides_lang SET url = 'https://$PS_SHOP_DOMAIN/led-gwint-e14/601-osram-led-star-classic-p45-5w-e14-barwa-ciepla.html' WHERE id_homeslider_slides = 2;"
