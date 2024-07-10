<?php
session_start();
require_once "../connexiondb.php";

function getUserFactures($user_id, $conn) {
    $req = "SELECT id, type_facture, montant, dernierdelai FROM facture WHERE id_user = :id";
    $stmt = $conn->prepare($req);
    $stmt->bindParam(':id', $user_id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

if (isset($_COOKIE['user_id'])) {
    $user_id = $_COOKIE['user_id'];
    $factures = getUserFactures($user_id, $conn);
    if ($factures) { 
        $_SESSION['factures'] = $factures; 
        header("Location: index.php");
        exit();
    } else {
        $_SESSION['factures'] = []; 
        header("Location: index.php");
        exit();
    }
} else {
    echo "Aucun utilisateur connecté.";
    exit();
}
?>
