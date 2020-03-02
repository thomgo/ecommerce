<?php

//Fonction de démarrage d'une session anonyme en cas d'erreur d'enregistrement
function initializeAnonymousSession($answers) {
  session_start();
  $_SESSION["answers"] = $answers;
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

//Fonction de déconnexion
function logout() {
  session_start();
  session_unset();
  session_destroy();
  header("Location: index.php?success=Vous avez été déconnecté, à bientôt :)");
}

//Fonction pour restreindre l'accès d'une page à un utilisateur authentifié
function restrictToUser() {
  session_start();
  if(!isset($_SESSION["user"]) || empty($_SESSION["user"])) {
    header("Location: index.php?message=8");
    exit;
  }
}

//Fonction pour restreindre l'accès d'une page à un administrateur authentifié
function restrictToAdmin() {
  session_start();
  if(!isset($_SESSION["user"]) || $_SESSION["user"]["status"] !== "ADMIN") {
    header("Location: products.php?message=9");
    exit;
  }
}

 ?>
