<?php
require_once "Model/function.php";
// Fonction qui parcours les produits du panier et calcule le montant total
function updateCartAmount($price, $action="add") {
  if($action === "remove") {
    $_SESSION["cartAmount"] -= $price;
  }
  if($action === "add") {
    $_SESSION["cartAmount"] += $price;
  }
}

function addToCart($product) {
  // On ajoute le produit dans l'entrée "basket" du tableau session
  array_push($_SESSION["cart"], $product);
  // On calcule le nouveau montant du panier
  updateCartAmount($product["price"]);
}

function removeFromCart($product) {
  // On calcule le nouveau montant du panier
  updateCartAmount($product["price"], "remove");
  $key = array_search($product, $_SESSION["cart"]);
  // On retire ce produit du tableau
  unset($_SESSION["cart"][$key]);
}

 ?>
