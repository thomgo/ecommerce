<?php
session_start();
//On charge le header
require "Service/errorManager.php";
include "Template/header.php";
//Si un code d'erreur lié à l'enregistrement de l'utilisateur nous a été renvoyé
if(isset($_GET["message"])) {
  $message = getErrorMessages($_GET["message"]);
  echo "<div class='alert alert-danger w-50 mx-auto'>" . $message . "</div>";
}
 ?>

<form class="w-50 mx-auto my-5" action="registerTreatment.php" method="post">
  <div class="form-group">
    <label for="userName">Votre nom</label>
    <input type="text" class="form-control" id="userName" name="user_name" <?php if(isset($_SESSION["answers"])){echo "value=" . $_SESSION['answers']['user_name'];} ?>>
  </div>
  <div class="form-group">
    <label for="userPassword">Votre mot de passe  (minimum 6 caractères, un chiffre et une majuscule)</label>
    <input type="password" class="form-control" id="userPassword" name="user_password" <?php if(isset($_SESSION["answers"])){echo "value=" . $_SESSION['answers']['user_password'];} ?>>
  </div>
  <div class="form-group">
    <label for="userPassword">Confirmez votre mot de passe</label>
    <input type="password" class="form-control" id="userPasswordConfirm" name="user_password_confirm" <?php if(isset($_SESSION["answers"])){echo "value=" . $_SESSION['answers']['user_password_confirm'];} ?>>
  </div>
  <div class="form-group col-md-4">
      <label for="inputState">Vous êtes...</label>
      <select id="inputState" class="form-control" name="user_sexe">
        <option <?php if(isset($_SESSION["answers"]) && $_SESSION["answers"]["user_sexe"] === "Homme"){echo "selected='selected'";} ?>>Homme</option>
        <option <?php if(isset($_SESSION["answers"]) && $_SESSION["answers"]["user_sexe"] === "Femme"){echo "selected='selected'";} ?>>Femme</option>
      </select>
    </div>
  <button type="submit" class="btn lightBg">Enregistrer</button>
</form>

 <?php
 //On charge le footer
 include "Template/footer.php"
  ?>
