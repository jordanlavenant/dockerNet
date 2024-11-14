## Création d'un réseau

```bash
docker network create mon_reseau
```

## Lancer un container mysql

```bash
docker run --name mysql-db --network mon_reseau -v toto:/var/lib/mysql -e MYSQL_ROOT_PASSWORD=motdepasse -e MYSQL_DATABASE=ma_base_de_donnees -d mysql:latest
```

## Build l'application

```bash
docker build -t mon_app_web .
```

## Lancer le serice 

```bash
docker run --name mon-serveur-web --network mon_reseau -p 8080:80 -d mon-serveur-web
```
