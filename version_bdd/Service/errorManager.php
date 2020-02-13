<?php
//Function qui renvoi le tableau contenant les messages d'erreur avec leurs indexes
function getReferences() {
  return [
    "0" => "Il faut remplir le formulaire",
    "1" => "Certains champs sont vides",
    "2" => "Le nom utilisateur est trop court",
    "3" => "Le mot de passe ne correspond pas à sa confirmation",
    "4" => "Le mot de passe ne respecte pas les conditions indiquées",
    "5" => "Un utilisateur utilise déjà ce pseudo merci d'en choisir un autre",
    "6" => "Un problème est survenu lors de l'enregistrement de votre produit merci de réessayer",
    "7" => "Nous n'avons aucun utilisateur avec ce nom ou ce mot de passe",
    "8" => "Il faut vous identifier pour accéder au contenu",
    "9" => "Contenu reservé aux administrateurs du site"
  ];
}

//Fonction qui sur la base d'une chaine de codes erreur renvoi les messages correspondants
function getErrorMessages($codes) {
  //Tableau associant codes et messages
  $references = getReferences();
  //Démarrage standard du message
  $message = "Nous avons trouvé les erreurs suivantes : ";
  //Sécurisation de l'argument
  $codes  = htmlspecialchars($codes);
  //On boucle sur la string et on ajoute à $message les message associés au code erreur
  for ($i=0; $i < strlen($codes) ; $i++) {
    $message .= "<p>" . $references[$codes[$i]] . "</p>";
  }
  //On renvoi le message fini
  return $message;
}


//Function globale pour capter les messages qu'ils soient d'erreur ou de succes
function getMessages() {
  $result = [];
  //Si une confirmation de succès
  if(isset($_GET["success"])) {
    $success = htmlspecialchars($_GET["success"]);
    $result["success"] = $success;
  }
  //Si un on a une ou des erreurs
  if(isset($_GET["message"])) {
    $code = htmlspecialchars($_GET["message"]);
    $error = getErrorMessages($code);
    $result["error"] = $error;
  }
  return $result;
}

//Fonction qui affiche les message en rouge ou vert selon leur nature
function displayMessages() {
  $messages = getMessages();
  foreach ($messages as $key => $message) {
    if($key === "success") {
      echo "<div class='alert alert-success w-50 mx-auto'>" . $message . "</div>";
    }
    else {
      echo "<div class='alert alert-danger w-50 mx-auto'>" . $message . "</div>";
    }
  }
}

 ?>
