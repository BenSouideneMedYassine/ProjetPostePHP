<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Poste";


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $mdp = $_POST['mdp'];
    $mdp = password_hash($mdp, PASSWORD_BCRYPT);
    $sql = "INSERT INTO  `user` (nom, prenom, email, tel, mdp) VALUES ('$nom', '$prenom', '$email', '$tel', '$mdp')";
    $conn->exec($sql);

    echo json_encode('Utilisateur ajouté avec succès.');
} catch (PDOException $e) {
    echo json_encode('Erreur de la base de données : ' . $e->getMessage());
}

$conn = null;
?>