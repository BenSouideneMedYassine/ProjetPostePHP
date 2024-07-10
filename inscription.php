<?php
require_once "connexiondb.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];
    $tel = $_POST['tel'];

    // Gestion de l'upload de la photo
    $photo = $_FILES['photo'];
    $photoName = $photo['name'];
    $photoTmpName = $photo['tmp_name'];
    $photoSize = $photo['size'];
    $photoError = $photo['error'];
    $photoType = $photo['type'];

    $photoExt = explode('.', $photoName);
    $photoActualExt = strtolower(end($photoExt));

    $allowed = array('jpg', 'jpeg', 'png');

    if (in_array($photoActualExt, $allowed)) {
        if ($photoError === 0) {
            if ($photoSize < 5000000) { // 5MB
                $photoNewName = uniqid('', true) . "." . $photoActualExt;
                $photoDestination = 'uploads/' . $photoNewName;
                move_uploaded_file($photoTmpName, $photoDestination);
            } else {
                echo "Votre fichier est trop volumineux.";
                exit();
            }
        } else {
            echo "Erreur lors de l'upload du fichier.";
            exit();
        }
    } else {
        echo "Vous ne pouvez pas uploader des fichiers de ce type.";
        exit();
    }

    $req = "INSERT INTO `user`(`nom`, `prenom`, `email`, `mdp`, `tel`, `photo`) VALUES(:nom, :prenom, :email, :mdp, :tel, :photo)";
    
    $stmt = $conn->prepare($req);
    $params = array(
        ':nom' => $nom,
        ':prenom' => $prenom,
        ':email' => $email,
        ':mdp' => $mdp, 
        ':tel' => $tel,
        ':photo' => $photoNewName
    );

    if ($stmt->execute($params)) {
        echo "
        <script>
        alert('Votre inscription est créée avec succès, vous pouvez maintenant vous connecter');
        document.location.href='index.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Erreur lors de l\'inscription, veuillez réessayer.');
        document.location.href='index.php';
        </script>
        ";
    }
}


?>
