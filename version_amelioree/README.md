# Site e-commerce en PHP procédural : version améliorée sans BDD

Il s'agit d'un exercice PHP développé dans le cadre de mon poste de formateur en développement web. L'objectif est que les étudiants pratiquent le PHP procédural et se familiarisent ainsi avec les fonctionnalités de base du langage appliquées au web.

Ce projet connaît plusieurs versions qui évoluent en difficulté avec la montée en compétence des étudiants pendant leur formation. A ce stade les notions de base de données et de modèle MVC ne sont pas intégrées. Les étudiants reprennent le projet produit précédemment et augmentent les fonctionnalités proposées par le site. Ce faisant ils améliorent leur maîtrise du PHP et de Bootstrap. Une attention particulière est portée à l'organisation et à la maintenabilité du code.

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

Vous continuez de perfectionner votre site de la semaine précédente. Vous allez y rajouter les blocs de fonctionnalités suivants :

*Gestion des utilisateurs :*
- Possibilité de se déconnecter via un bouton logout
- Permettre à l’utilisateur de s’inscrire sur la site via un formulaire d’inscription.

L’utilisateur doit rentrer son nom, son mot de passe, une confirmation du mot de passe et son sexe. Pour l’instant vous ne pouvez pas enregistrer cet utilisateur car vous n’avez pas de base de données, vous vérifiez simplement l’exactitude des informations rentrées.

Pour être valide le formulaire doit remplir les conditions suivantes :
- Le nom comporte au moins 3 caractères
- Le mot de passe et sa confirmation sont identiques
- Le mot de passe comporte au moins 6 caractères, une lettre majuscule et un chiffre
- Tous les champs sont remplis

Si le formulaire est valide vous renvoyez l’utilisateur sur la page index avec un message de succès. Si vous avez trouvé des erreurs vous le renvoyez sur la page d’inscription avec un message d’erreur listant toutes les erreurs trouvées

**Attention** les messages sont transmis par l’intermédiaire de codes erreur dans l'url et Le formulaire est pré-rempli avec les réponses que l’utilisateur a transmises précédemment.

*Affichage des produits :*
- Possibilité de visualiser la page affichant les détails d’un produit (page dite single)

*Gestion d'un panier utilisateur :*
- Afficher dans l’aside le contenu du panier
- Possibilité d’ajouter un produit au panier utilisateur avec un message de succès
- Possibilité de retirer un produit du panier utilisateur avec un message de succès
- Afficher le montant total du panier dans l’aside. Ce montant sera réactualisé à chaque ajout/retrait de produits
- Accès à une page spécifique qui liste tous les produits du panier sous forme de cartes, chaque produit a un bouton permettant de le retirer du panier

## Pour aller plus loin

- Mettez vos formulaires dans des fichiers séparés stockés dans le template.
- Modularisez votre code au maximum en privilégiant l’usage des fonctions plutôt que la programmation procédurale et posez vous la question "Est ce que je ne peux pas regrouper certaines fonctions ensemble dans un fichier ?"
