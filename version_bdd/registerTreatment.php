<?php
require "Model/db.php";
require "Model/userManager.php";
require "Service/sessionManager.php";
require "Service/formChecker.php";
//Si le formulaire n'est pas vide on le vérifie
if(!empty($_POST)) {
  $errors ="";
  //On sécurise les entrées du formulaire
  $_POST = clearForm($_POST);
  //Si un champ est vide
  $errors .= isFieldEmpty($_POST);
  //Si le nom utilisateur contient moins de 3 lettres
  $errors .= isTooShort($_POST["user_name"],3);
  //Si la confirmation du mot de passe n'est pas identique
  $errors .= areIdentical($_POST["user_password"], $_POST["user_password_confirm"]);
  //Si le mot de passe ne respect pas les critères demandés
  $errors .= respectPattern("#(?=.*[A-Z]{1,})(?=.*[0-9]{1,}).{6,}#", $_POST["user_password"]);

  //Si on a stocké des codes erreur on renvoi au formulaire
  if(!empty($errors)){
    initializeAnonymousSession($_POST);
    header("Location: register.php?message=$errors");
    exit;
  }
  //Sinon on envoi sur la page de login avec un message de succès
  else {
    //On vérifie si un utilsiateur enregistré en base de donnée porte déjà ce nom
    $checkUser = getUser($_POST, $db);
    if(empty($checkUser)) {
      //On sécurise le mot de passe pour ne pas le stocker en clair dans la DB
      $_POST["user_password"] = password_hash($_POST["user_password"], PASSWORD_DEFAULT);
      addUser($_POST, $db);
      header("Location: index.php?success=Compte créé avec succès, vous pouvez vous connecter");
      exit;
    }
    else {
      header("Location: register.php?message=5");
      exit;
    }
  }
}
//Si le formulaire est vide on renvoi vers la page register
else {
  header("Location: register.php?message=0");
  exit;
}

 ?>
