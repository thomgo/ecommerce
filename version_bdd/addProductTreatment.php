<?php
//On charge les fonctions de gestion des données
require "Model/db.php";
require "Model/productManager.php";
require "Model/imageManager.php";
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


  if(addProduct($_POST, $db)) {
    $lastId = getLastProjectId($db);
    if(!empty($lastId)) {
      $path = "img/" . $_FILES["image"]["name"];
      if(addImage($db, $_FILES["image"], $path, $lastId["id"])) {
        if(move_uploaded_file($_FILES["image"]["tmp_name"], $path)) {
          header("Location: admin.php?success=Votre produit a bien été ajouté au catalogue");
          exit;
        }
      }
    }
  }
  else {
    header("Location: addProduct.php?message=6");
    exit;
  }
}
else {
  header("Location: addProduct.php?message=0");
  exit;
}

 ?>
