# CookToGether
Réalisation d'un thême from scratch pour un test

```html
Pour l'installation de Wordpress en local, il y plusieurs manières de procéder :
l'installation pour ce projet c'est fait de la manière la plus simple.

```

## Installation usuel de Wordpress
```html
Dans un premier temps nous allons aller télécharger WordPress depuis le site officiel, wordpress.org. 
L’archive fait environ 10Mo donc elle devrait être très rapide à récupérer.

Je vous conseille pour chaque projet de récupérer l’archive depuis ce site pour être sûr de toujours avoir la dernière version en date du CMS.

On va maintenant placer les fichiers de WordPress au bon endroit, pour être vus par notre serveur local. Procédez comme suit :

En premier lieu, dézippez l’archive pour extraire le dossier wordpress ;
Si vous utilisez MAMP, allez placer le dans C:/Mamp/htdocs si vous êtes sur Windows ou /Applications/Mamp/htdocs si vous êtes sur Mac ;
Si vous utilisez WAMP il faudra le placer dans C:/Wamp/www ;
Renommez ensuite le dossier pour l’appeler par exemple [le nom choisi].

```
#### Gestion de la base de donnée
```html
Nous allons maintenant créer une base de données vide depuis PHPMyAdmin qui permettra à WordPress d’y créer ses tables et insérer les premières données.

Que vous soyez sur MAMP ou WAMP,  allez à l’adresse : http://localhost/phpMyAdmin/(et sur http://localhost:8888/phpMyAdmin/ si vous êtes sur MAMP et sur Mac).

Créez une nouvelle base en cliquant à gauche sur Nouvelle base de données, et indiquez ensuite le nom de la base à créer. Je vous conseille de conserver 
le même nom que le dossier du site pour éviter toute confusion.
```

#### Lancer l'installation de Wordpress
```html
Tout est prêt pour l’installation de WordPress ! Ouvrez un nouvel onglet de votre navigateur et 
tapez http://localhost/[le nom choisi] (ou http://localhost:8888/[le nom choisi] sur MAMP Mac).

Si tout se passe bien vous devriez arriver sur la page d’installation du CMS. Si ce n’est pas le cas vérifiez-bien que votre dossier capitaine est au bon endroit et que vous avez scrupuleusement suivi toutes les précédentes étapes.
```

## Installation via WP-CLI
```html
L'autre méthode qui pour moi est utile c'est dans le cadre d'une installation plus spécifique qui nécessitent l'installation de plusieurs plugins et de faire l'ensemble de l'installation via la console et ceux via WP-CLI :

Pour cela un lien bien utile qui constitue pour moi le meilleur tuto existant qu'il suffit de suivre point par point !
https://kinsta.com/fr/blog/wp-cli/
```


## Création du repo sur github
```html
Vous trouverez ci-joint un tutoriel plutôt bien fait qui vous expliquer step by step le processus.
Bonne lecture
https://github.com/sebastien-scdev/CookToGether

Lien de téléchargement du fichier .zip
https://github.com/sebastien-scdev/CookToGether/releases/tag/v1.0.0
```

```html
A savoir :
J'ai fait quelques petites personnalisation du back-office (on peut encore aller plus loin bien sur).
Le code se trouve dans le fichier function.php
```

## Plugins et librairies utilisées

#### Plugins utilisés
```html
Advanced Custom Fields : Version 5.10.2 
Show Current Template : Version 0.4.6
```
#### librairies utilisées
```html
Bootsrap : version 4.12 (petit bug sur la version 5 avec les spacer)
Font-awesome : version 6
```

## TODO

#### Amélioration de travail dans la conception et le référencement
```html
- Mettre en place des outils de SEO pour le référencement du site.
- Mettre en place une maintenance mensuelle des plugins et une bonne vison des Dumps(Maj) pour ne pas se retrouver avec des plugins obsolètes (faille de sécurité)
- Mettre en place de Wordfence Security pour renforcer la sécurité du site
- Exclure sur la partie admin les modules inutilisé via le fichier de function, et personnaliser au maximum le backoffice pour limiter les problêmes d'erreurs   générer par les utilisateurs (Gestion des autorisations et des Rôles)
- Mettre en place un google Analytics via lien externe ou directement avec un plugin prévu a cet effet
- Réflexion sur la partie inscription et pourquoi ne pas envisager des systêmes d'abonnements et/ou réduction sur des produits via des partenariats avec des entitées cullinaires
```