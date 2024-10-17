## Créer les bons dossiers pour mettre les fichiers :
Créer le dossier etape1_alter, qui contiendra les dossier 'config' et 'src'.

Dans le dossier 'config', il faudra y déposer le fichier 'nginx.conf'.
Dans le dossier 'src', il faudra y déposer le fichier 'index.php'.

## Créer ensuite le network qui va lier les deux futurs containers :
```
docker network create my_network
```

## Créer le container pour php :
```
docker run -d --name php --network my_network -v '"C:\Users\bonni\Documents\Ecole\Efrei\Dev_Ops\Cours 2\TP 2\docker-tp2\etape1\src":/app' php:fpm
```

## Créer le container pour NGINX :
```
docker run -d --name nginx --network my_network -p 8080:8080 -v '"C:\Users\bonni\Documents\Ecole\Efrei\Dev_Ops\Cours 2\TP 2\docker-tp2\etape1\config\nginx.conf":/etc/nginx/conf.d/default.conf' -v '"C:\Users\bonni\Documents\Ecole\Efrei\Dev_Ops\Cours 2\TP 2\docker-tp2\etape1\src":/app' nginx
```

## Aller voir que la page s'affiche bien sur http://localhost:8080/index.php