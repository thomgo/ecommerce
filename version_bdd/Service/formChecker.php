<?php
//Function qui nettoie les entrées d'un formulaire
function clearForm($form) {
  foreach ($form as $key => $value) {
    $form[$key] = htmlspecialchars($value);
  }
  return $form;
}

//Function qui vérifie si un champ est vide
function isFieldEmpty($form) {
  foreach ($form as $key => $value) {
    if(empty($value)) {
      return "1";
    }
  }
}

//Function qui vérifie si un champ est trop court
function isTooShort($value, $length) {
  if(strlen($value) < $length) {
    return "2";
  }
}

//Function qui vérifie si deux champs sont identiques
function areIdentical($value1, $value2) {
  if($value1 !== $value2) {
    return "3";
  }
}

//Function qui vérifie le respect d'une regex
function respectPattern($pattern, $value) {
  if(!preg_match($pattern, $value)) {
    return "4";
  }
}


 ?>
