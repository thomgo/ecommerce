<?php
require_once "Service/cartManager.php";
require_once "Model/productManager.php";
require_once "Model/db.php";
// Si une clé pour un produit et une action ont été passées dans l'url
if(isset($_GET["key"]) && isset($_GET["action"])) {
  // On démarre la session pour récupérer les informations stockées
  session_start();
  // On sécurise la clé transmisse par l'url
  $key = intval(htmlspecialchars($_GET["key"]));
  // On récupère le produit associé à la clé
  $product = getProduct($key, $db);
  // Si la clé ne correspond à aucun produit
  if(!$product) {
    header("Location: products.php");
    // Attention ici le exit est important autrement la redidrection n'est pas effectuée
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
