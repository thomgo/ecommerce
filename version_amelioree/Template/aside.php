<aside class="col-lg-3">
  <i class="fas fa-user-ninja fa-4x mb-3"></i>
  <ul class="list-group">
    <?php
    //On boucle sur l'utilisateur stocké en session pour afficher toutes ses informations
    foreach ($_SESSION["user"] as $key => $value) {
      echo "<li class='list-group-item'>$key : $value</li>";
    }
    ?>
  </ul>
  <a href="basket.php" class="my-3">Votre panier</a>
  <ul class="list-group">
    <?php
      //On boucle sur le panier stocké en session pour afficher tous ses produits
      foreach ($_SESSION["basket"] as $key => $product) {
        echo "<li class='list-group-item w-100'>". $product['name'] . "</li>";
      }
     ?>
     <li class='list-group-item'>Total : <?php echo $_SESSION["basketAmount"]; ?></li>
  </ul>
  <a href="logout.php" class="btn lightBg  my-3">Deconnexion</a>
</aside>
