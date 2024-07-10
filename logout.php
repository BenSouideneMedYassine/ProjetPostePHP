<?php
session_start();

// Supprimer le cookie en définissant sa date d'expiration dans le passé
setcookie("user_id", "", time() - 3600, "/");

// Détruire la session
session_destroy();

// Rediriger vers la page de connexion
header("Location: index.php");
exit();
?>
