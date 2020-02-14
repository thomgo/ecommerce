<?php
// Fonction qui nettoie automatiquement toutes les entrées d'un formulaire
function cleanForm($form) {
  foreach ($form as $key => $value) {
    $form[$key] = htmlspecialchars($value);
  }
  return $form;
}

?>
