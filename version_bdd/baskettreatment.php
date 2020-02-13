<?php
require "Model/db.php";
require_once "Service/basketOperationManager.php";
//On démarre la session pour récupérer les informations stockées
session_start();

//On récupère la clef correspondant à la position du produit dans le panier de la session
if(isset($_GET["key"])) {
  $key = intval(htmlspecialchars($_GET["key"]));
}

//Si l'action concerne un ajout au panier
if($_GET["action"] === "add") {
  addProductBasket($key, $db);
}

//Si l'action concerne un retrait de produit
if($_GET["action"] === "remove") {
  removeProductBasket($key);
}
 ?>
