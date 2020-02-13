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
</aside>
