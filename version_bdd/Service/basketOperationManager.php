<?php
require "Model/productManager.php";

//Fonction qui parcours les produits du panier et calcule le montant total
function calculateBasket($add, $price) {
  if($add) {
    $_SESSION["basketAmount"] += $price;
  }
  else {
    $_SESSION["basketAmount"] -= $price;
  }
}

function addProductBasket($id, $db) {
  $product = getProduct($id, $db);
  //On ajoute le produit dans l'entrée "basket" du tableau session
  array_push($_SESSION["basket"], $product);
  //On calcule le nouveau montant du panier
  calculateBasket(true, $product["price"]);
  //On renvoie vers la page produit avec un message de succès pour confirmer l'ajout au panier
  header("Location: products.php?success=produits ajouté au panier");
}

function removeProductBasket($key) {
  //On calcule le nouveau montant du panier
  calculateBasket(false, $_SESSION["basket"][$key]["price"]);
  //On retire ce produit du tableau
  unset($_SESSION["basket"][$key]);
  //On renvoie vers la page panier avec un message de succès pour confirmer le retrait du panier
  header("Location: basket.php?success=produits retiré du panier");
}

 ?>
