<?php
//On charge les fonctions de gestion des données
require "Model/db.php";
require "Model/productManager.php";
require "Service/loginManager.php";

restrictToAdmin();

if(!empty($_POST)) {
  //On sécurise les entrées du formulaire et on transforme en integer ce qui doit l'être pour la DB
  foreach ($_POST as $key => $value) {
    $_POST[$key] = htmlspecialchars($value);
    if($key === "price" || $key === "stock") {
      $_POST[$key] = intval($value);
    }
  }

  //On appelle la fonction pour modifier les valeurs du produits
  if(updateProduct($_POST, $db)) {
    header("Location: admin.php?success=Votre produit a bien été modifié");
    exit;
  }
  else {
    header("Location: updateProduct.php?id=" . $_POST["id"] ."&message=6");
    exit;
  }
}
else {
  header("Location: updateProduct.php?id=" . $_POST["id"] ."message=0");
  exit;
}

 ?>
