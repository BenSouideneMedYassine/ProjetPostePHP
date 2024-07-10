<?php
session_start();
require_once "connexiondb.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];

    // Préparer la requête pour vérifier si l'email existe dans la base de données
    $stmt = $conn->prepare("SELECT * FROM user WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $user = $stmt->fetch();

    if ($user) {
        $mdp_hache = $user['mdp'];
        // Utilisateur trouvé avec l'email spécifié, vérifier le mot de passe
    //    if ($mdp==$mdp_hache && $mdp_hache=='admin' && $user['email']=='admin@gmail.com') {
        if ($mdp==$mdp_hache && $user['role']=='admin') {
        setcookie("user_id", $user['id'], time() + (86400 * 30), "/");
        echo "<script>window.location.href = 'adminhub-master';</script>";
       }
       else if ($mdp==$mdp_hache && $user['role']!='admin') {
        setcookie("user_id", $user['id'], time() + (86400 * 30), "/");
        echo "<script>window.location.href = 'userhub-master';</script>";
            // Mot de passe correct, récupérer les factures de l'utilisateur
            $stmt_factures = $conn->prepare("SELECT * FROM facture WHERE id = :user_id");
            $stmt_factures->bindParam(':user_id', $user['id']);
            $stmt_factures->execute();
            $result = $stmt_factures->fetchAll();

            if ($result) {
                // Afficher les factures dans un tableau HTML
                echo "<table border='1'>";
                echo "<tr><th>ID</th><th>Type de facture</th><th>Montant</th><th>Dernier délai</th></tr>";
                foreach ($result as $row) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($row['id']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['type_facture']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['montant']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['dernierdelai']) . "</td>";
                    echo "</tr>";
                }
                echo "</table>";

            } else {
                echo "Aucune facture trouvée pour cet utilisateur.";
            }

            // Fermer le curseur de la requête sur les factures
            $stmt_factures->closeCursor();
        } else {
            // Mot de passe incorrect, afficher un message d'erreur ou rediriger vers index.php
            echo "<script>alert('Mot de passe incorrect. Redirection vers index.php');</script>";
            echo "<script>window.location.href = 'index.php';</script>";
            exit();
        }
    } else {
        // Utilisateur non trouvé avec l'email spécifié, afficher un message d'erreur ou rediriger vers index.php
        echo "<script>alert('Aucun utilisateur trouvé avec cet email. Redirection vers index.php');</script>";
        echo "<script>window.location.href = 'index.php';</script>";
        exit();
    }

    // Fermer la connexion et le curseur de la requête sur les utilisateurs
    $stmt->closeCursor();
    $conn = null;
}
?>
