<?php
$servername="localhost";
$username="root";
$password="";
$dbname="user";


$conn= new mysqli($servername, $username ,$password,$dbname)


// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

include("inserer.php");

?>