<?php
//Fonction qui récupère un seul utilisateur en DB
function getUser($user, $db) {
  $query = $db->prepare("SELECT * FROM user WHERE nameUser =  ?");
  $query->execute([$user["user_name"]]);
  $user = $query->fetch(PDO::FETCH_ASSOC);
  return $user;
}

//Fonction qui ajoute un utilisateur en DB
function addUser($user, $db) {
  $query = $db->prepare("INSERT INTO user (nameUser, password, sexe, status) VALUES(:nameUser, :password, :sexe, :status)");
  $query->execute([
    "nameUser" => $user["user_name"] ,
    "password" => $user["user_password"],
    "sexe" => $user["user_sexe"],
    "status" => "USER"
  ]);
}

 ?>
