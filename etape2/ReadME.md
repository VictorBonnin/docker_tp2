## Tout d'abord, il faut créer un novueau network :
```
docker network create my_network_2
```

## Ensuite, il faut lancer le premier container avec les références de connexion a la BDD :
```
docker run -d --name data --network my_network_2 -e MYSQL_ROOT_PASSWORD=root -e MYSQL_DATABASE=mydb -e MYSQL_USER=user -e MYSQL_PASSWORD=password mariadb
```

## Ensuite, on lance le container PHP :
```
docker run -d --name php --network my_network_2 -v '"C:\Users\bonni\Documents\Ecole\Efrei\Dev_Ops\Cours 2\TP 2\docker-tp2\etape2\src":/app' php:7.4-fpm
```

## Ensuite, on lanceur le container NGINX
```
docker run -d --name nginx --network my_network_2 -p 8080:8080 -v '"C:\Users\bonni\Documents\Ecole\Efrei\Dev_Ops\Cours 2\TP 2\docker-tp2\etape2\config\nginx.conf":/etc/nginx/conf.d/default.conf' -v '"C:\Users\bonni\Documents\Ecole\Efrei\Dev_Ops\Cours 2\TP 2\docker-tp2\etape2\src":/app' nginx
```
## Aller sur l'adresse : http://localhost:8080/test_bdd.php

## Il ce peut que le localhost renvoie une erreur, car les extensions 'mysqli' n'ont pas été instalées dans le container php.

Ainsi, on peut executer les commandes suivantes pour résoudre cette erreur.

Rentrer dans le container :
```
docker exec -it php /bin/sh
```

Une fois dedans, installer mysqli :
```
docker-php-ext-install mysqli
```

## Restart tous les containers :
```
docker stop $(docker ps -aq)
```
```
docker start $(docker ps -aq)
```

## Aller sur http://localhost:8080/test_bdd.php et voir les différentes connexions