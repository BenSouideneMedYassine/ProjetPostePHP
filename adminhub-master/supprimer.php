<?php
require_once "connexiondb.php";
if(isset($_POST['delete'])){
$id=$_POST['id'];


$req="DELETE FROM user WHERE id='$id'";
$res=$pdo->query($req);
header("location:index.php");
}


?>