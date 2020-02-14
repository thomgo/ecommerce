<?php
//On redémarre immédiatement la section pour avoir accès aux informations
session_start();
//Si aucun utilisateur est enregistré en session on renvoi à l'acceuil
if(!isset($_SESSION["user"])) {
  header("Location: index.php");
  exit;
}
//On charge les fonctions pour accéder aux données
require "Model/function.php";
include "Template/header.php";
//On récupère nos produits via la fonction, plus tard celle-ci effectuera une requête en base de données
$products = getProducts();
//Si une confirmation de succès
if(isset($_GET["success"])) {
  $message = htmlspecialchars($_GET["success"]);
  echo "<div class='alert alert-success w-50'>" . $message . "</div>";
}
 ?>

 <div class="row mt-5">
    <section class="col-lg-9">
      <h2>Nos derniers produits</h2>
      <div class="container-fluide">
        <div class="row">
          <?php
            //On boucle pour afficher tous les produits contenus dans la variable products
            foreach ($products as $key => $product) {
          ?>
          <article class="col-lg-6 my-4">
            <div class="card">
              <header class="card-header text-center darkBg">
                <h5 class="card-title"><?php echo $product["name"] ?></h5>
              </header>
              <div class="card-body">
                <!-- Permet de ne pas afficher tout le texte de description mais seulement les 150 premiers caractères -->
                <p class="card-text"><?php echo substr($product["description"],0,150) . "..." ?></p>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item bg-light">Prix : <?php echo $product["price"] ?> €</li>
                <li class="list-group-item bg-light">Lieu de production: <?php echo $product["made_in"] ?></li>
                <li class="list-group-item bg-light">Catégorie : <?php echo $product["category"] ?></li>
                <li class="list-group-item bg-light text-center">
                  <a href="<?php echo 'single.php?id=' . $product['id']; ?>" class="btn lightBg">Voir</a>
                </li>
              </ul>
            </div>
          </article>
          <?php
          //On ferme la boucle
            }
           ?>
        </div>
      </div>
    </section>
    <!-- Aside avec les informations utilisateur -->
    <?php include "Template/aside.php"; ?>
  </div>

 <?php
 include "Template/footer.php"
  ?>
