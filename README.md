# Theme portfolio by Stéphane Busiere

## Comment utiliser ce projet
Nécessite :
- Composer
- NPM

Mise en oeuvre : 
- Cloner le repos
- Ouvrir le projet dans un éditeur de code et télécharger WordPress avec la commande `composer install`
- Créer une base de donnée en local et remplir les infos de connexion à la bdd dans `wp-config.php`
- Créer un virtual host en local pointant vers le dossier du projet par exemple c:/wamp64/www/dixeed-2023/wordpress
- Aller sur l'adresse du v host et terminer l'installation de wordpress
- Activer le thème Ignition
- Pour builder le thème et utiliser le serveur Browsersync se placer dans le fichier du thème et taper `npm run start`
- Créer une branche de développement pour commencer à modifier le thème `git branch nom-de-la-branche`
- Se placer sur la branche et commencer à coder `git checkout nom-de-la-branche`