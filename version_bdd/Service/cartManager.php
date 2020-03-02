<?php
// Fonction pour modifier le montant total du panier en session
function updateCartAmount($price, $action="add") {
  if($action === "remove") {
    $_SESSION["cartAmount"] -= $price;
  }
  if($action === "add") {
    $_SESSION["cartAmount"] += $price;
  }
}

// Function pour ajouter un produit au panier contenu en session
function addToCart($product) {
  // On ajoute le produit dans l'entrée "basket" du tableau session
  array_push($_SESSION["cart"], $product);
  // On calcule le nouveau montant du panier
  updateCartAmount($product["price"]);
}

// Function pour retirer un produit au panier contenu en session
function removeFromCart($product) {
  // On calcule le nouveau montant du panier
  updateCartAmount($product["price"], "remove");
  // On récupère la position du produit dans le panier
  $key = array_search($product, $_SESSION["cart"]);
  // On retire ce produit du tableau panier
  unset($_SESSION["cart"][$key]);
}

 ?>
