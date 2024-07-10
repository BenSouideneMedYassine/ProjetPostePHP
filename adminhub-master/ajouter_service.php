<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Poste";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $type_services = $_POST['type_services'];
    $Nom_de_service = $_POST['Nom_de_service'];
    $Date_début = $_POST['Date_début'];
    
    $sql = "INSERT INTO `services` (type_services, Nom_de_service, Date_début) VALUES ('$type_services', '$Nom_de_service', '$Date_début')";
    $conn->exec($sql);

    echo json_encode('Service ajouté avec succès.');
} catch (PDOException $e) {
    echo json_encode('Erreur de la base de données : ' . $e->getMessage());
}

$conn = null;

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "Poste";

// try {
//     $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//     // Récupérer les données du formulaire
//     $type_services = $_POST['type_services'];
//     $Nom_de_service = $_POST['Nom_de_service'];
//     $Date_début = $_POST['Date_début'];

//     // Préparer la requête SQL pour l'insertion
//     $sql = "INSERT INTO `services` (type_services, Nom_de_service, Date_début) VALUES (:type_services, :Nom_de_service, :Date_début)";
    
//     $stmt = $conn->prepare($sql);
    
//     // Liaison des paramètres avec les valeurs
//     $stmt->bindParam(':type_services', $type_services);
//     $stmt->bindParam(':Nom_de_service', $Nom_de_service);
//     $stmt->bindParam(':Date_début', $Date_début);

//     // Exécution de la requête
//     $stmt->execute();

//     // Réponse JSON pour indiquer le succès
//     echo json_encode('Service ajouté avec succès.');
// } catch (PDOException $e) {
//     // En cas d'erreur, renvoyer un message d'erreur JSON
//     echo json_encode('Erreur de la base de données : ' . $e->getMessage());
// }

// $conn = null;
?>

