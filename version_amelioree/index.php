<?php
//On charge le header
include "Template/header.php";
//Si un message nous a été transmis par l'url on le récupère et on l'affiche
if(isset($_GET["message"])) {
  $message = htmlspecialchars($_GET["message"]);
  echo "<div class='alert alert-danger w-50 mx-auto'>" . $message . "</div>";
}

//Si une confirmation de succès
if(isset($_GET["success"])) {
  $message = htmlspecialchars($_GET["success"]);
  echo "<div class='alert alert-success w-50 mx-auto'>" . $message . "</div>";
}
?>

<form class="w-50 mx-auto my-5" action="loginTreatment.php" method="post">
  <h2 class="my-5">Accéder aux ventes privées</h2>
  <div class="form-group">
    <label for="userName">Votre nom</label>
    <input type="text" class="form-control" id="userName" name="user_name" required>
  </div>
  <div class="form-group">
    <label for="userPassword">Votre mot de passe</label>
    <input type="password" class="form-control" id="userPassword" name="user_password" required>
  </div>
  <div class="text-center">
    <button type="submit" class="btn lightBg">Se connecter</button>
    <a href="register.php" class="btn btn-warning">Pas encore de compte</a>
  </div>
</form>

<?php
 //On charge le footer
 include "Template/footer.php"
 ?>
