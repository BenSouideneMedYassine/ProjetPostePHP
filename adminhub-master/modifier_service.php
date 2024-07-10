<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Poste";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $id = $_POST['id'];
    $type_services = $_POST['type_services'];
    $Nom_de_service = $_POST['Nom_de_service'];
    $Date_début = $_POST['Date_début'];

    $sql = "UPDATE `services` SET type_services = '$type_services', Nom_de_service = '$Nom_de_service', Date_début = '$Date_début' WHERE id = '$id'";
    
    $conn->exec($sql); 
    // $stmt = $conn->prepare($sql);
    // $stmt->bindParam(':id', $id);
    // $stmt->bindParam(':type_services', $type_services);
    // $stmt->bindParam(':Nom_de_service', $Nom_de_service);
    // $stmt->bindParam(':Date_début', $Date_début);

    // $stmt->execute();

    echo json_encode('Service modifié avec succès.');
} catch (PDOException $e) {
    echo json_encode('Erreur de la base de données : ' . $e->getMessage());
}

$conn = null;
?>
