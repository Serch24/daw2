# Dockerfile

* Create the Dockerfile
* add **FROM, WORKDIR, COPY**
* e.g **FROM php:7.4-apache WORKDIR /var/www/html COPY . .**
* then build the image with **docker build -t name path**
* then login w the account, e.g __docker login__
* then push da image bro! e.g **docker push name** ;-)
```Dockerfile
FROM php:7.4-apache

WORKDIR /var/www/html

COPY . .

```

![miballena UwU](ballena.png) 
