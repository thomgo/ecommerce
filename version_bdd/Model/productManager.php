<?php
//Fonction qui récupère tous les produits de la DB
function getProducts($db) {
  $query = $db->query("SELECT * FROM product");
  $products = $query->fetchall(PDO::FETCH_ASSOC);
  return $products;
}

//Fonction qui récupère un seul produit de la DB sur la base de son id
function getProduct($id, $db) {
  $query = $db->prepare("SELECT p.*, i.path FROM product AS p LEFT JOIN image AS i ON p.id = i.product_id WHERE p.id=?");
  $query->execute([$id]);
  $product = $query->fetch(PDO::FETCH_ASSOC);
  return $product;
}

//Fonction qui ajoute un produit en DB
function addProduct($product, $db) {
  $query = $db->prepare("INSERT INTO product (name, price, stock, category, made_in, description) VALUES(:name, :price, :stock, :category, :made_in, :description)");
  $result = $query->execute([
    "name" => $product["name"] ,
    "price" => $product["price"],
    "stock" => $product["stock"],
    "category" => $product["category"],
    "made_in" => $product["made_in"],
    "description" => $product["description"]
  ]);
  // if($result) {
  //   $lastInsertId = $db->lastInsertId();
  //   return $lastInsertId;
  // }
  return $result;
}

function getLastProjectId($db) {
  $query = $db->query("SELECT id FROM product ORDER BY id DESC LIMIT 1");
  $result = $query->fetch(PDO::FETCH_ASSOC);
  return $result;
}

//Fonction pour modifier les valeurs d'un produit en base de données
function updateProduct($product, $db) {
  $query = $db->prepare("UPDATE product SET name = :name, price = :price, stock = :stock, category = :category, made_in = :made_in, description = :description WHERE id = :id");
  $result = $query->execute([
    "id" => $product["id"],
    "name" => $product["name"] ,
    "price" => $product["price"],
    "stock" => $product["stock"],
    "category" => $product["category"],
    "made_in" => $product["made_in"],
    "description" => $product["description"]
  ]);
  return $result;
}

//Fonction pour supprimer un produit en base de données
function deleteProduct($id, $db) {
  $query = $db->prepare("DELETE FROM product WHERE id = ?");
  $result = $query->execute([$id]);
  return $result;
}

 ?>
