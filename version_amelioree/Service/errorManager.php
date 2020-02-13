<?php
//Fonction qui sur la base d'une chaine de codes erreur renvoi les messages correspondants
function getErrorMessages($codes) {
  //Tableau associant codes et messages
  $references = [
    "0" => "Il faut remplir le formulaire",
    "1" => "Certains champs sont vides",
    "2" => "Le nom utilisateur est trop court",
    "3" => "Le mot de passe ne correspond pas à sa confirmation",
    "4" => "Le mot de passe ne respecte pas les conditions indiquées"
  ];
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

 ?>
