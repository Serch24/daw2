# Contenedor de mysql y phpmyadmin

```Dockerfile
docker pull mysql:8.0.1
docker run --name mi_nombre -e MYSQL_ROOT_PASSWORD=mypass123 -d mysql:8.0.1
docker pull phpmyadmin/phpmyadmin:latest
docker run --name cualquier_nombre -d --link nombredelsql:db -p 8081:80 phpmyadmin/phpmyadmin

```
