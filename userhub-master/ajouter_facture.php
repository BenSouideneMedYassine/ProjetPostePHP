<?php
session_start();
require_once "../connexiondb.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $type_facture = $_POST['type_facture'];
    $montant = $_POST['montant'];
    $dernierdelai = $_POST['dernierdelai'];
    $id_user = $_POST['id_user'];
    // $user_id = $_COOKIE['user_id'];
    
    $stmt = $conn->prepare("INSERT INTO facture (type_facture, montant, dernierdelai, id_user) VALUES (:type_facture, :montant, :dernierdelai, :id_user)");
    $stmt->bindParam(':type_facture', $type_facture);
    $stmt->bindParam(':montant', $montant);
    $stmt->bindParam(':dernierdelai', $dernierdelai);
    $stmt->bindParam(':id_user', $id_user);
    
    // header("Location: charger_facteur_par_user.php");
    if ($stmt->execute()) {
        // header("Location: charger_facteur_par_user.php");
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false]);
    }
    
}
?>
