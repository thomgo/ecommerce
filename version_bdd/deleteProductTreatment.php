<?php
//On charge les fonctions de gestion des données
require "Model/db.php";
require "Model/productManager.php";
require "Service/sessionManager.php";

restrictToAdmin();

if(isset($_GET["id"])) {
  //On récupère l'id du produit à supprimer
  $id = intval(htmlspecialchars($_GET["id"]));

  //On appelle la fonction de suppression de produit
  if(deleteProduct($id, $db)) {
    header("Location: admin.php?success=Votre produit a bien été supprimé");
    exit;
  }
  else {
    header("Location: admin.php?message=6");
    exit;
  }
}
else{
  header("Location: admin.php");
  exit;
}

 ?>
