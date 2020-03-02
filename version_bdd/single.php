<?php
//On charge les fonctions pour accéder aux données
require "Model/db.php";
require "Model/productManager.php";
require "Service/loginManager.php";

//Si aucun utilisateur n'est enregistré en session on renvoi à l'acceuil
restrictToUser();
// On récupère notre produits via la fonction du manager qui attend l'id transmis par l'url
$id = intval(htmlspecialchars($_GET["id"]));
$product = getProduct($id, $db);

include "Template/header.php";
 ?>

 <div class="row mt-5">
   <section class="col-lg-9">
     <h2><?php echo $product["name"]; ?></h2>
     <!-- Si une image est associée au produit on l'affiche -->
     <?php if(!empty($product["path"])) :?>
       <img class="img-fluid" src="<?php echo $product["path"];?>" alt="">
     <?php endif; ?>
     <div class="container-fluide">
       <?php echo $product["description"]; ?>
     </div>
     <div class="my-3">
       <span class="badge badge-secondary p-2">Prix : <?php echo $product["price"] ?>€</span>
       <?php
       if($product["stock"]) {
         echo "<span class='badge badge-success p-2'>Disponible</span>";
       }
       else {
         echo "<span class='badge badge-danger p-2'>Indisponible</span>";
       }
        ?>
       <span class="badge badge-secondary p-2">Catégorie : <?php echo $product["category"] ?></span>
       <span class="badge badge-secondary p-2">Lieu de production : <?php echo $product["made_in"] ?></span>
     </div>
     <?php
       //Si le produit est disponible on met un boutton d'ajout au panier
       if($product["stock"]) {
         echo "<a href='cartTreatment.php?key=". $id . "&action=add' class='btn lightBg my-3'>Ajouter au panier</a>";
       }
      ?>
   </section>
    <!-- Aside avec les informations utilisateur -->
    <?php include "Template/aside.php"; ?>
  </div>

 <?php
 include "Template/footer.php"
  ?>
