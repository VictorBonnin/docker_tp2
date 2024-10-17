## Tout d'abord, il faut rajouter le dossier 'config'

## Ensuite, il faut également télécharger wordpress dans le dossier :

```
Invoke-WebRequest -Uri "https://wordpress.org/latest.tar.gz" -OutFile "C:\Users\bonni\Documents\Ecole\Efrei\Dev_Ops\Cours 2\TP 2\docker-tp2\etape4\wordpress.tar.gz"
```

## Décompresser le tarball de wordpress:
```
tar -xvf "C:\Users\bonni\Documents\Ecole\Efrei\Dev_Ops\Cours 2\TP 2\docker-tp2\etape4\wordpress.tar.gz" -C "C:\Users\bonni\Documents\Ecole\Efrei\Dev_Ops\Cours 2\TP 2\docker-tp2\etape4"
```

## Ensuite, on peut lancer le docker-compose :

```
docker-compose up -d
```

## Cependant, on va rencontrer le même problème que pour l'étape3, il faudra encore installer dans le container php les extensions :
```
docker exec -it php /bin/sh

apt-get update

docker-php-ext-install mysqli

docker restart php
```