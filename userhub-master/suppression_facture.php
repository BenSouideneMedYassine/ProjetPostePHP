<?php
if ($_SERVER["REQUEST_METHOD"] === "DELETE") {
    $idFacture = isset($_GET['id']) ? $_GET['id'] : null;

    if (!$idFacture) {
        http_response_code(400); 
        echo json_encode(array("message" => "L'ID de la facture est requis."));
        exit();
    }

    require_once "../connexiondb.php";

    try {
        $req = "DELETE FROM facture WHERE id = :id";
        $stmt = $conn->prepare($req);
        $stmt->bindParam(':id', $idFacture, PDO::PARAM_INT);

        if ($stmt->execute()) {
            http_response_code(200); 
            echo json_encode(array("message" => "Facture supprimée avec succès."));
        } else {
            http_response_code(500);
            echo json_encode(array("message" => "Erreur lors de la suppression de la facture."));
        }
    } catch (PDOException $e) {
        http_response_code(500); 
        echo json_encode(array("message" => "Erreur de base de données : " . $e->getMessage()));
    }
} else {
    http_response_code(405);
    echo json_encode(array("message" => "Méthode non autorisée."));
}
?>
