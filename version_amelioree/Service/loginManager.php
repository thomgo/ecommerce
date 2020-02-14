<?php
// On charge le fichier faisaint office de base de données
require "Model/function.php";

// Fonction qui vérifie la validité d'un nom et d'un mot de passe utilisateur
function checkUserExists($name, $password) {
  // On récupère les utilisateurs stockés sur le site (ici pour l'exercice ils sont stockés dans une fonction)
  $users = getUsers();
  // On vérifie si on trouve une correspondance avec les informations données
  foreach ($users as $user) {
    if($user["name"] === $name && $user["password"] === $password) {
      return $user;
    }
  }
  // Si aucun utilisateur ne correspond on retourne false
  return false;
}

// Function qui démarre une session avec les informations de l'utilisateur
function startUserSession($user) {
  session_start();
  // Ici on stocke les infos utilisateur pour y accéder plus tard
  $_SESSION["user"] = $user;
  // On représente le panier utilisateur par un tableau stocké en session
  // On utilise un tableau car l'utilisateur peut avoir plusieurs produits dans son panier
  $_SESSION["cart"] = [];
  // Par defaut le montant du panier est à 0
  $_SESSION["cartAmount"] = 0;
}

?>
