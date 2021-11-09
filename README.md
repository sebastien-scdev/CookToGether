# CookToGether
Réalisation d'un thême from scratch pour un test

## Installation concernant Wordpress


```html

Pour l'installation de Wordpress en local, il y plusieurs manières de procéder :
l'installation pour ce projet c'est fait de la manière la plus simple.


## Installation de Wordpress
Dans un premier temps nous allons aller télécharger WordPress depuis le site officiel, wordpress.org. 
L’archive fait environ 10Mo donc elle devrait être très rapide à récupérer.

Je vous conseille pour chaque projet de récupérer l’archive depuis ce site pour être sûr de toujours avoir la dernière version en date du CMS.

On va maintenant placer les fichiers de WordPress au bon endroit, pour être vus par notre serveur local. Procédez comme suit :

En premier lieu, dézippez l’archive pour extraire le dossier wordpress ;
Si vous utilisez MAMP, allez placer le dans C:/Mamp/htdocs si vous êtes sur Windows ou /Applications/Mamp/htdocs si vous êtes sur Mac ;
Si vous utilisez WAMP il faudra le placer dans C:/Wamp/www ;
Renommez ensuite le dossier pour l’appeler par exemple [le nom choisi].

``` bash
## Gestion de la base de donnée
```
Nous allons maintenant créer une base de données vide depuis PHPMyAdmin qui permettra à WordPress d’y créer ses tables et insérer les premières données.

Que vous soyez sur MAMP ou WAMP,  allez à l’adresse : http://localhost/phpMyAdmin/(et sur http://localhost:8888/phpMyAdmin/ si vous êtes sur MAMP et sur Mac).

Créez une nouvelle base en cliquant à gauche sur Nouvelle base de données, et indiquez ensuite le nom de la base à créer. Je vous conseille de conserver 
le même nom que le dossier du site pour éviter toute confusion.

## Lancer l'installation de Wordpress
Tout est prêt pour l’installation de WordPress ! Ouvrez un nouvel onglet de votre navigateur et 
tapez http://localhost/[le nom choisi] (ou http://localhost:8888/[le nom choisi] sur MAMP Mac).

Si tout se passe bien vous devriez arriver sur la page d’installation du CMS. Si ce n’est pas le cas vérifiez-bien que votre dossier capitaine est au bon endroit et que vous avez scrupuleusement suivi toutes les précédentes étapes.


L'autre méthode qui pour moi est utile c'est dans le cadre d'une installation plus spécifique qui nécessitent l'installation de plusieurs plugin et de faire l'ensemble de l'installation via la console et ceux via WP-CLI :

Pour cela un lien bien utile qui constitue pour moi le meilleur tuto existant qu'il suffit de suivre point par point !
https://kinsta.com/fr/blog/wp-cli/


```





## Installation des plugins

```bash
Plugins utilisés
Advanced Custom Fields : Version 5.10.2 
Show Current Template : Version 0.4.6
```

```bash
librairies utilisées
Bootsrap : version 4.12 (petit bug sur la version 5 avec les spacer)
Font-awesome : version 6
```

