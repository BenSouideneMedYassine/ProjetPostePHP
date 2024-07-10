<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Poste";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT id, type_services, Nom_de_service, Date_début FROM `services`";
    $stmt = $conn->query($sql);

    $data = array();
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $data[] = $row;
    }

    header('Content-Type: application/json');
    echo json_encode($data);
} catch (PDOException $e) {
    echo json_encode(array('error' => 'Erreur de la base de données : ' . $e->getMessage()));
}

$conn = null;
?>
