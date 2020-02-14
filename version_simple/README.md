# Site e-commerce en PHP procédural : version simple sans BDD

Il s'agit d'un exercice PHP développé dans le cadre de mon poste de formateur en développement web. L'objectif est que les étudiants pratiquent le PHP procédural et se familiarisent ainsi avec les fonctionnalités de base du langage appliquées au web.

Ce projet connaît plusieurs versions qui évoluent en difficulté avec la montée en compétence des étudiants pendant leur formation. A ce stade les notions de base de données et de modèle MVC ne sont pas intégrées. Un fichier est fourni pour simuler la BDD afin que les étudiants puissent se concentrer sur l'organisation du projet et le code PHP.

Mis à part l'apprentissage du PHP ce projet introduit également la notion de framework front avec Bootstrap qui leur permet de maquetter rapidement une application en utilisant du code produit par quelqu'un d'autre.

Au travers de cet exercice, ils apprennent à :
- Comprendre la notion de framework front
- Positionner ses éléments sur la grille Bootstrap
- Intégrer des composants Bootstrap à son projet
- Utiliser les styles Bootstrap
- Traiter les données d’un formulaire en PHP
- Transmettre des données via l’url
- Gérer une session utilisateur simple
- Rediriger un utilisateur en PHP
- Créer des messages d’erreur
- Créer un template simple en PHP
- Afficher des données
- Utiliser des fonctions de récupération de données

## Consignes

Pour ce premier projet vous allez créer un site e-commerce dont l’accès est restreint aux utilisateurs ayant un compte. Pour l’instant, nous n’avons pas encore vu l’usage des bases de données, vos données seront donc stockées et retournées par des fonctions qui vous sont déjà données.

Globalement le principe du site est très simple, la page d’accueil est composée d’un formulaire de connexion. L’utilisateur rentre ses identifiants :

Si ceux-ci correspondent à un des utilisateurs retournés par la fonction d’accès aux utilisateurs du site, alors il est redirigé vers une page produits qui affiche tous les produits retournés par la fonction d’accès aux produits et dans un aside les informations relatives à son profil utilisateur. Les informations de l’utilisateur sont stockées dans une session

Si les identifiants rentrés ne correspondent à rien ou que le formulaire n’est pas rempli, l’utilisateur est renvoyé sur la page d’accueil (celle du formulaire) avec un message d’erreur adéquat. Les messages d’erreur sont transmis par l’url

Attention la page des produits est inaccessible si l’utilisateur n’est pas authentifié !

N’oubliez pas de sécuriser les données transmises par le formulaire et l’url avec les fonctions adéquates.

Concrètement vous aurez  3 pages sur votre site :
- Une page index.php qui affiche le formulaire et qui envoie les données vers la page login.php
- Une page login.php qui récupère les données du formulaire et les traite
- Une page products.php qui affiche les produits à l’utilisateur et les informations personnelles de l'utilisateur.

Dans votre projet, il y aura un dossier Model, contenant un fichier function.php, dans ce fichiers vous trouverez les fonctions d’accès aux données.

Dans votre projet, il y aura un dossier Template, contenant les fichiers header, footer et aside.php en effet il faut maintenant commencer à gérer votre template grâce au includes. Il en va de la maintenabilité de votre projet.

Vous utilisez le dossier de travail qui vous est fourni !
