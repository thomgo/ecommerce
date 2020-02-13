<?php
//On récupère la session courante
session_start();
//On la vide de ses variables
session_unset();
//on la détruit
session_destroy();
//On redirige l'utilisateur sur la page de login
header("Location: index.php?success=Vous avez été déconnecté, à bientôt :)");
 ?>
