FROM mariadb:latest
ENV MYSQL_ROOT_PASSWORD=root123
ENV MYSQL_USER=prestashopuser
ENV MYSQL_PASSWORD=biznesbaza
ENV MYSQL_DATABASE=prestashop
COPY prestashop.sql /docker-entrypoint-initdb.d/dump.sql
