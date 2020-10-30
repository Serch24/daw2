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

![alt text](https://lh3.googleusercontent.com/proxy/1zB49MfkfZEw1jHC5U7JW68C1Io0wHgom81QATqvqmyiU6f1L-OnKh2cpN_k_7L2U4tueLpdSiRP95BdI9l9pBmptG3vle7R19yhrMuBg88qTVFz9RFHGb3Fp84s8C9TMMoH "texto random") 
