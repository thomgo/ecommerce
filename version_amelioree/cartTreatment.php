<?php
require_once "Service/cartManager.php";
require_once "Model/function.php";
// Si une clé pour un produit et une action ont été passées dans l'url
if(isset($_GET["key"]) && isset($_GET["action"])) {
  // On démarre la session pour récupérer les informations stockées
  session_start();
  // On sécurise la clé transmisse par l'url
  $key = intval(htmlspecialchars($_GET["key"]));
  $product = getProduct($key);

  if(!$product) {
    header("Location: products.php");
    exit();
  }
  // Si l'action concerne un ajout au panier
  if($_GET["action"] === "add") {
    addToCart($product);
    // On renvoie vers la page produit avec un message de succès pour confirmer l'ajout au panier
    header("Location: products.php?success=Produit ajouté au panier");
  }

  // Si l'action concerne un retrait de produit
  if($_GET["action"] === "remove") {
    removeFromCart($product);
    // On renvoie vers la page panier avec un message de succès pour confirmer le retrait du panier
    header("Location: cart.php?success=Produit retiré du panier");
  }
}
// Sinon on renvoie simplement vers les produits
else {
  header("Location: products.php");
}


 ?>
