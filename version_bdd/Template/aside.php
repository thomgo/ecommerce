<aside class="col-lg-3 pt-4">
  <div class="card w-100 mt-5">
    <header class="card-header darkBg">
      <h4><i class="fas fa-user-ninja"></i> Profil</h3>
    </header>
    <!-- On affiche les données de l'utilisateur stockées en session -->
    <ul class="list-group w-100">
      <li class='list-group-item'>Nom : <?php echo $_SESSION["user"]["nameUser"] ?></li>
      <li class='list-group-item'>Sexe : <?php echo $_SESSION["user"]["sexe"] ?></li>
      <li class='list-group-item'>Status : <?php echo $_SESSION["user"]["status"] ?></li>
    </ul>
  </div>
  <a href="logout.php" class="btn btn-warning my-3">Deconnexion</a>

  <div class="card w-100 mt-5">
    <header class="card-header darkBg">
      <h4>Panier</h4>
    </header>
    <ul class="list-group w-100">
      <?php
        //On boucle sur le panier stocké en session pour afficher tous ses produits
        foreach ($_SESSION["cart"] as $key => $product) {
          echo "<li class='list-group-item w-100'>". $product['name'] . "</li>";
        }
       ?>
       <li class='list-group-item'>Total : <?php echo $_SESSION["cartAmount"]; ?></li>
    </ul>
  </div>
  <a class="btn btn-success my-3" href="cart.php" class="my-3">Voir le panier</a>
</aside>
