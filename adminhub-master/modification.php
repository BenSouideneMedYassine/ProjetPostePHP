<?php

require_once "connexiondb.php";
$id=$_POST['id'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$email=$_POST['email'];
$mdp=$_POST['mdp'];
$tel=$_POST['tel'];


$req="UPDATE user SET  nom='$nom',prenom='$prenom',email='$email',mdp='$mdp',tel='$tel' WHERE id='$id' ";
$res=$pdo->query($req);
header("location:index.php");

?>