<?php

function cleanFormEntries($form) {
  //On nettoie les entrées du formulaire
  foreach ($form as $key => $value) {
    $form[$key] = htmlspecialchars($value);
  }

  return $form;
}

 ?>
