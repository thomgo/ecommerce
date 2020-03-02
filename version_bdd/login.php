<?php
//On charge les fichiers dont on a besoin
require "Model/db.php";
require "Model/userManager.php";
require "Service/loginManager.php";
require "Service/formChecker.php";

//On vérifie si le formulaire a été rempli
if(!empty($_POST)) {
  //On nettoie les entrées du formulaire
  $_POST = clearForm($_POST);
  //On récupère l'utilisateur stocké sur le site
  $user = getUser($_POST, $db);
  //On vérifie si la db a trouvé un utilisateur
  if(!empty($user) && password_verify($_POST["user_password"], $user["password"])) {
    startUserSession($user);
    header("Location: products.php");
    //On met un exit pour arrêter l'execution du script, autrement la redirection n'aura pas le temps de se faire
    exit;
  }
  else {
    header("Location: index.php?message=7");
    exit;
  }
}
//Si le formulaire n'est pas rempli on renvoie l'utilisateur sur la page de login avce un message
else {
  header("Location: index.php?message=0");
  exit;
}

 ?>
