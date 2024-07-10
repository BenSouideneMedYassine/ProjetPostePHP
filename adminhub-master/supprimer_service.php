<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Poste";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $id = $_POST['id'];

    $sql = "DELETE FROM `services` WHERE id = :id";
    
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    echo json_encode('Service supprimé avec succès.');
} catch (PDOException $e) {
    echo json_encode('Erreur de la base de données : ' . $e->getMessage());
}

$conn = null;
?>
