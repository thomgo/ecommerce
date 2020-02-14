<?php

//Fonction de démarrage d'une session anonyme en cas d'erreur d'enregistrement
function initializeAnonymousSession($answers) {
  session_start();
  $_SESSION["answers"] = $answers;
}

//Fonction de démarrage standard d'une session utilisateur
function initializeUserSession($user) {
  session_start();
  $_SESSION["user"] = $user;
  $_SESSION["basket"] = [];
  $_SESSION["basketAmount"] = 0;
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
