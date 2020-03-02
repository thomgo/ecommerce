<?php
//On charge les fonctions d'accès aux produits
require "Model/db.php";
require "Model/productManager.php";
require "Service/errorManager.php";
require "Service/loginManager.php";

restrictToAdmin();

//On récupère le produit concerné en base de données
$id = htmlspecialchars($_GET["id"]);
$product = getProduct($id, $db);

include "Template/header.php";
//Si on a un message d'erreur ou de succès
displayMessages();
 ?>

 <div class="row mt-5">
    <section class="col-lg-9">
      <!-- Si on a trouvé un produit en BD on affiche le formulaire -->
      <?php if(!empty($product)) { ?>
      <h2>Modifier le produit</h2>
      <div class="container-fluide">
        <div class="row">
          <form class="w-75 mx-auto my-5" action="updateProductTreatment.php" method="post">
            <input type="hidden" name="id" <?php echo "value='" . $id . "'" ?>>
            <div class="form-group">
              <label for="name">Nom</label>
              <input type="text" class="form-control" id="name" name="name" <?php echo "value='" . $product["name"] . "'"; ?>>
            </div>
            <div class="form-group">
              <label for="price">Prix</label>
              <input type="number" class="form-control" id="price" name="price" <?php echo "value='" . $product["price"] . "'"; ?> >
            </div>
            <div class="form-group">
                <label for="stock">Disponibilité immédiate</label>
                <select id="stock" class="form-control" name="stock">
                  <option value="1" <?php if($product["stock"] === "1") { echo "selected" ;} ?>>Disponible</option>
                  <option value="0" <?php if($product["stock"] === "0") { echo "selected" ;} ?>>Indisponible</option>
                </select>
            </div>
            <div class="form-group">
              <label for="category">Catégorie</label>
              <input type="text" class="form-control" id="category" name="category" <?php echo "value='" . $product["category"] . "'"; ?>>
            </div>
            <div class="form-group">
              <label for="made_in">Lieu de production</label>
              <select id="made_in" class="form-control" name="made_in">
                <option <?php if($product["made_in"] === "USA") { echo "selected" ;} ?>>USA</option>
                <option <?php if($product["made_in"] === "CHINA") { echo "selected" ;} ?>>CHINA</option>
                <option <?php if($product["made_in"] === "JAPAN") { echo "selected" ;} ?>>JAPAN</option>
                <option <?php if($product["made_in"] === "FRANCE") { echo "selected" ;} ?>>FRANCE</option>
                <option <?php if($product["made_in"] === "GERMANY") { echo "selected" ;} ?>>GERMANY</option>
              </select>
            </div>
            <div class="form-group">
              <label for="description">Déscription</label>
              <textarea id="description" class="form-control" name="description"><?php echo $product["description"]; ?></textarea>
            </div>
            <button type="submit" class="btn lightBg">Enregistrer</button>
          </form>
        </div>
      </div>
    <?php }
    else {
      echo "<div class='alert alert-danger w-100 mx-auto'>Nous n'avons pas trouvé de prodduit dans notre base de données</div>";
    } ?>
    </section>
    <!-- Aside avec les informations utilisateur -->
    <?php include "Template/aside.php"; ?>
  </div>

 <?php
 include "Template/footer.php"
  ?>
