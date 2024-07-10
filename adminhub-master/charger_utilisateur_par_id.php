<?php
session_start();
require_once "../connexiondb.php";

function getUserProfile($user_id, $conn) {
    $req = "SELECT id, nom, prenom, email, tel, photo FROM user WHERE id = :id";
    $stmt = $conn->prepare($req);
    $stmt->bindParam(':id', $user_id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

if (isset($_COOKIE['user_id'])) {
    $user_id = $_COOKIE['user_id'];
    $user = getUserProfile($user_id, $conn);
    if ($user) {
        $_SESSION['user'] = $user;
        header("Location: index.php");
        exit();
    } else {
        echo "Aucune information utilisateur trouvée.";
        exit();
    }
} else {
    echo "Aucun utilisateur connecté.";
    exit();
}
?>
