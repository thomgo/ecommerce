<?php
//On essaie de se connecter à la base de données avec nos identifiants
//Si cela marche pon crée une variable db qui stocke la connexion
try {
  $db = new PDO("mysql:host=localhost;dbname=commerce", "root", "ThomAdmin12");
}
//Sinon on récupère une erreur
catch (Exception $e) {
  echo 'Exception reçue : ' .  $e->getMessage() . "\n";
}


 ?>
