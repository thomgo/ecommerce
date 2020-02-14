<?php
// On charge les services nécessaires au traitement du login
require "Service/formManager.php";
require "Service/loginManager.php";

// On vérifie que le formulaire a été rempli
if(!empty($_POST)) {
  // On nettoie les entrées du formulaire
  $_POST = cleanForm($_POST);
  // On vérifie que les données rentrées correspondent à un utilisateur
  $user = checkUserExists($_POST["user_name"], $_POST["user_password"]);
  // Si la fonction a renvoyé un utilisateur alors on le connecte
  if ($user) {
    startUserSession($user);
    header("Location: products.php");
    exit;
  }
  // Sinon on renvoie sur la page de login avec un message d'erreur
  header("Location: index.php?message=Nous n'avons aucun utilisateur avec ce nom ou ce mot de passe");
  exit;
}
// Si le formulaire n'est pas rempli on renvoie l'utilisateur sur la page de login avec un message
else {
  header("Location: index.php?message=Vous devez remplir les champs du formulaire");
  exit;
}

 ?>
