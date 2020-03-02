# Site e-commerce en PHP procédural : version avec BDD

Il s'agit d'un exercice PHP développé dans le cadre de mon poste de formateur en développement web. L'objectif est que les étudiants pratiquent le PHP procédural et se familiarisent ainsi avec les fonctionnalités de base du langage appliquées au web.

Ce projet connaît plusieurs versions qui évoluent en difficulté avec la montée en compétence des étudiants pendant leur formation. A ce stade les étudiants ont déjà développé les fonctionnalités du site en PHP, leur objectif est maintenant d'assurer la persistance et la gestion des données via le SGBD MySQL. Les étudiants reprennent le projet produit précédemment et y intègrent une base de données qu'ils ont conçue. Ce faisant ils apprennent à intégrer une BDD au sein d'une application PHP.

Au travers de cet exercice, ils apprennent à :
- Créer une base de données
- Créer une table
- Connaître les types de données
- Lire des données
- Supprimer des données
- Enregistrer des données
- Modifier des données
- Se connecter à une base données en PHP
- Requêter une base de données en PHP
- Exploiter des données d'une BDD via une application PHP
- Traiter les données d’un formulaire en PHP
- Afficher des données
- Utiliser des fonctions pour le traitement des données
- Organiser le code d'une application

## Consignes

Vous continuez de perfectionner votre site de la semaine précédente. Vous allez maintenant intégrer une vraie base de données à votre projet, fini les données écrites à la main dans des fonctions !

Pour cela, vous devrez créer dans votre base les tables suivantes :
- User
- Product

Je vous laisse établir vous même la conception de ces tables, **vous produirez donc obligatoirement un schéma de base de données.**

Attention les mots de passe stockés en base de données le sont de manière cryptée. Il ne doivent pas être lisibles en clair dans vos tables.

De même un utilisateur qui souhaite s’inscrire ne peut pas choisir un nom déjà utilisé dans la base de données. A vous donc de vérifier que ce n’est pas le cas.

Pour l’instant nous laissons le panier tel quel c’est à dire avec un stockage en session simplement.

## Pour aller plus loin

Vous pouvez si vous le souhaitez réaliser un espace d’administration qui permet la réalisation des opérations du CRUD sur les produits. Votre espace est composé de :
- Une page admin qui sert d’accueil et liste les produits sous forme de tableau
- Une page ajout qui via un formulaire permet l’ajout d’un produit en BDD
- Une page de mise à jour qui permet la modification des informations d’un produit déjà existant via un formulaire
- Un bouton placé quelque part permettant la suppression d’un produits
- Ces page ne sont accessible qu’aux utilisateurs qui ont le statut ADMIN

Bien évidement vous affichez des messages d’erreur ou de succès selon les cas de figure
