# ![Lampy](https://repository-images.githubusercontent.com/307062631/02d74d00-46c8-11eb-8dee-f651dde77b03)

Student project - a lighting-related web store created using [Prestashop](https://www.prestashop.com).
The aim of the assignment was to set up the application and dockerize it with the help of [Docker Compose](https://docs.docker.com/compose/).

The composition consists of:
* Nginx load balancer - a reverse proxy needed to scale the application
* Prestashop web application - located on a php-apache container
* MariaDB database

## Getting started

### Prerequisites
* [Docker](https://docs.docker.com/get-docker/)
* [Docker Compose](https://docs.docker.com/compose/install/)

### Installing

Just clone this repository, change the **PS_SHOP_DOMAIN** environment variable (modify .env file) to your domain, and run the **initialize.sh** script. It will create a self-signed ssl key, provide it for the containers to use, and invoke `docker-compose up`. The containers shall start then.

### Further actions
It may take some time (5 minutes tops) for the prestashop database dump to be imported by the db container. The page should display when that's finished.

In case the product images are not visible after running **initialize.sh** for the first time, you could try disabling and re-enabling the **Friendly URLs** option in the shop backoffice.

To log in there just go to **https://[your-domain]/admin832wub8sz/**.

The credentials are
  * Email: **jan.kowal@example.com**
  * Password: **asdfasdf**
  
## Authors
* **[Yamsha75](https://github.com/Yamsha75)** 
* **[Tamasa94](https://github.com/Tamasa94)** 
* **[Nieminik](https://github.com/Nieminik)**
