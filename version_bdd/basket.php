<?php
require "Service/sessionManager.php";
require "Service/errorManager.php";

//On restreint l'accès de la page aux utilisateurs enregistrés
restrictToUser();

include "Template/header.php";

//Si une confirmation de succès pour un retrait de produit
displayMessages();
 ?>

 <div class="row mt-5">
    <section class="col-lg-9">
      <h2>Votre panier</h2>
      <div class="container-fluide">
        <div class="row">
          <?php
            //On boucle pour afficher tous les produits contenus dans le panier en session
            foreach ($_SESSION["basket"] as $key => $product) {
          ?>
          <article class="col-lg-6 my-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title"><?php echo $product["name"] ?></h5>
                <p class="card-text"><?php echo $product["description"] ?></p>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Prix : <?php echo $product["price"] ?></li>
                <li class="list-group-item">Lieu de production: <?php echo $product["made_in"] ?></li>
                <li class="list-group-item">Catégorie : <?php echo $product["category"] ?></li>
              </ul>
              <div class="card-body">
                <!-- Lien pour retirer un produit du panier -->
                <a href="<?php echo 'baskettreatment.php?key=' . $key . '&action=remove'; ?>" class="btn lightBg">Retirer du panier</a>
              </div>
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
