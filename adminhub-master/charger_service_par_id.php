<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Poste";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $servicesId = $_GET['id'];

    $sql = "SELECT * FROM `services` WHERE id = :servicesId";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':servicesId', $servicesId);
    $stmt->execute();

    $service = $stmt->fetch(PDO::FETCH_ASSOC);

    header('Content-Type: application/json');
    echo json_encode($service);
} catch (PDOException $e) {
    echo json_encode('Erreur de la base de données : ' . $e->getMessage());
}

$conn = null;
?>
