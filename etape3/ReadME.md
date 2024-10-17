## Tout d'abord, il faut créer un nouveau network :
```
docker network create my_network_3
```

## Créer mariaDB :
```
docker run -d --name data --network my_network_3 -e MYSQL_ROOT_PASSWORD=root -e MYSQL_DATABASE=wordpress -e MYSQL_USER=wordpress_user -e MYSQL_PASSWORD=wordpress_password mariadb
```

## Créer PHP :
```
docker run -d --name php --network my_network_3 -v '"C:\Users\bonni\Documents\Ecole\Efrei\Dev_Ops\Cours 2\TP 2\docker-tp2\etape3\wordpress":/app' php:7.4-fpm
```

Ajouter les extensions MYSQL :
```
docker exec -it php /bin/sh

apt-get update

docker-php-ext-install mysqli

docker restart php
```

## Télécharger wordpress :
```
Invoke-WebRequest -Uri "https://wordpress.org/latest.tar.gz" -OutFile "C:\Users\bonni\Documents\Ecole\Efrei\Dev_Ops\Cours 2\TP 2\docker-tp2\etape3\wordpress.tar.gz"
```

## Décompresser le tarball :
```
tar -xvf "C:\Users\bonni\Documents\Ecole\Efrei\Dev_Ops\Cours 2\TP 2\docker-tp2\etape3\wordpress.tar.gz" -C "C:\Users\bonni\Documents\Ecole\Efrei\Dev_Ops\Cours 2\TP 2\docker-tp2\etape3"
```

## Lancer le container nginx :
```
docker run -d --name nginx --network my_network_3 -p 8080:8080 -v 'C:\Users\bonni\Documents\Ecole\Efrei\Dev_Ops\Cours 2\TP 2\docker-tp2\etape3\config\nginx.conf:/etc/nginx/conf.d/default.conf' -v 'C:\Users\bonni\Documents\Ecole\Efrei\Dev_Ops\Cours 2\TP 2\docker-tp2\etape3\wordpress:/app' nginx
```

## Lancer la page http://localhost:8080/

Normalement, la page wordpress devrait s'afficher.

Database Name : wordpress
Username : wordpress_user
Password : wordpress_password
Database Host : data
Table Prefix : wp_