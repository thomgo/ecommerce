<aside class="col-lg-3 pt-4">
  <div class="card w-100 mt-5">
    <header class="card-header darkBg">
      <h4><i class="fas fa-user-ninja"></i> Profil</h3>
    </header>
    <ul class="list-group w-100">
      <?php
      //On boucle sur l'utilisateur stocké en session pour afficher toutes ses informations
      foreach ($_SESSION["user"] as $key => $value) {
        echo "<li class='list-group-item'>$key : $value</li>";
      }
      ?>
    </ul>
  </div>
</aside>
