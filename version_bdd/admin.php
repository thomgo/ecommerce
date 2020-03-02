<?php
//On charge les fichiers necessaires
require "Model/db.php";
require "Model/productManager.php";
require "Service/errorManager.php";
require "Service/loginManager.php";

//On restreint l'accès aux seuls administrateurs
restrictToAdmin();

//On récupère nos produits via la fonction qui requête la BDD
$products = getProducts($db);

include "Template/header.php";
//Si une confirmation de succès ou une erreur on affiche le message
displayMessages();
 ?>

 <div class="row mt-5">
    <section class="col-lg-9">
      <h2>Gérer les produits du site <a href="addProduct.php" class="btn lightBg">Ajouter un produit <i class="fas fa-plus-circle"></i></a></h2>
      <div class="container-fluide">
        <div class="row">
          <table class="table my-4">
            <thead class="darkBg">
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Nom</th>
                <th scope="col">Prix</th>
                <th scope="col">Stock</th>
                <th scope="col">Catégorie</th>
                <th scope="col">Pays</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php
                //On boucle pour afficher tous les produits contenus dans la variable products
                foreach ($products as $key => $product) {
              ?>
              <tr>
                <td><?php echo $product["id"]; ?></td>
                <td><?php echo $product["name"]; ?></td>
                <td><?php echo $product["price"]; ?></td>
                <td>
                <?php
                  if($product["stock"]) {
                    echo "<span class='badge badge-success'>Disponible</span>";
                  }
                  else {
                    echo "<span class='badge badge-danger'>Indisponible</span>";
                  }
                ?>
                </td>
                <td><?php echo $product["category"]; ?></td>
                <td><?php echo $product["made_in"]; ?></td>
                <td>
                  <a href="<?php echo 'updateProduct.php?id=' . $product['id']; ?>" class="btn lightBg">Modifier</a>
                  <a href="<?php echo 'deleteProductTreatment.php?id=' . $product['id']; ?>" class="btn btn-danger">Supprimer</a>
                </td>
              </tr>
              <?php
              //On ferme la boucle
                }
               ?>
            </tbody>
          </table>
        </div>
      </div>
    </section>
    <!-- Aside avec les informations utilisateur -->
    <?php include "Template/aside.php"; ?>
  </div>

 <?php
 include "Template/footer.php"
  ?>
