<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: charger_utilisateur_par_id.php");
    exit();
}
$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="style.css">

	<title>AdminHub</title>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  
</head>
<body>
	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">Admin</span>
		</a>
		<ul class="side-menu top">			
		<li >
				<a href="index.php">
					<i class='bx bxs-group' ></i>
					<span class="text">Gérer les comptes</span>
				</a>
			</li>
			<li>
				<a href="services.html">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Gérer les services</span>
				</a>
			</li>
            <li class="active">
				<a href="#">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Profile</span>
				</a>
			</li>
		</ul>
		
		
        <ul class="side-menu">
	<li>
		<a href="../logout.php" class="logout">
			<i class='bx bxs-log-out-circle'></i>
			<span class="text">Déconnecter</span>
		</a>
	</li>
</ul>

	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			
			</form>
			
			
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			
				
        <h1 style="color:#3C91E6;">Profile</h1>    



<br><br>
<style>
        .profile-img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            display: block;
            margin: 0 auto 20px auto;
        }
        .profile-section {
            text-align: center;
        }
        .profile-section h2 {
            margin-bottom: 10px;
        }
        .profile-data {
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }
        .profile-data label {
            font-weight: bold;
            color: #333;
        }
        .profile-data p {
            margin: 0;
            color: #333;
        }
    </style>

    
<section class="page-section" id="contact">
            <div class="container">
           
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Profile Section-->
            <div class="row justify-content-center"> 
                <div class="col-lg-8 col-xl-7 profile-section">
                    <img src="../uploads/<?php echo htmlspecialchars($user['photo']); ?>" alt="Photo de profil" class="profile-img">
                    <h2><?php echo htmlspecialchars($user['nom']) . ' ' . htmlspecialchars($user['prenom']); ?></h2>
                    <div class="profile-data">
                        <label>Email :</label>
                        <p><?php echo htmlspecialchars($user['email']); ?></p>
                    </div>
                    <div class="profile-data">
                        <label>Téléphone :</label>
                        <p><?php echo htmlspecialchars($user['tel']); ?></p>
                    </div>
                </div>
            </div>
            </div>
        </section>
	<!-- CONTENT -->
	<script>
$(document).ready(function() {
    // Fonction pour charger les utilisateurs depuis la base de données
    function chargerUtilisateurs() {
        $.ajax({
            url: 'charger_utilisateurs.php',
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                var tbody = $('#user-table tbody');
                tbody.empty();
                $.each(data, function(index, user) {
                    tbody.append('<tr>' +
                        '<td>' + user.nom + '</td>' +
                        '<td>' + user.prenom + '</td>' +
                        '<td>' + user.email + '</td>' +
                        '<td>' + user.tel + '</td>' +
                        '<td><img src="../uploads/'+user.photo+'" alt="Photo de ' + user.nom + '" width="50" height="50"></td>' +
                        '<td>' +
                        '<button class="btn btn-success modifier" data-id="' + user.id + '">Modifier</button>  &nbsp;' +
                        
                        '<button class="btn btn-danger supprimer" data-id="' + user.id + '">Supprimer</button>' +
                        '</td>' +
                        '</tr>');
                });
            },
            error: function() {
                alert('Une erreur s\'est produite lors du chargement des utilisateurs.');
            }
        });
    }

    // Appeler la fonction pour charger les utilisateurs au chargement de la page
    chargerUtilisateurs();

    // Gestionnaire d'événements pour le formulaire d'ajout
    $('#ajouterCompteForm').submit(function(event) {
        event.preventDefault();

        var nom = $('#nom').val();
        var prenom = $('#prenom').val();
        var email = $('#email').val();
        var tel = $('#tel').val();
        var mdp = $('#mdp').val();

        $.ajax({
            url: 'ajouter_utilisateurs.php',
            type: 'POST',
            data: {nom: nom, prenom: prenom, email: email, tel: tel,mdp: mdp},
            success: function(response) {
                alert(response);
                chargerUtilisateurs();
                $('#ajouterCompteForm')[0].reset();
            },
            error: function() {
                alert('Une erreur s\'est produite lors de l\'ajout de l\'utilisateur.');
            }
        });
    });

    // Gestionnaire d'événements pour les boutons "Modifier"
    $(document).on('click', '.modifier', function() {
        var userId = $(this).data('id');
        var utilisateur = trouverUtilisateurParId(userId);

        $('#userId').val(userId);
        $('#nomModif').val(utilisateur.nom);
        $('#prenomModif').val(utilisateur.prenom);
        $('#emailModif').val(utilisateur.email);
        $('#telModif').val(utilisateur.tel);

        $('#modifierModal').show();
    });

    // Gestionnaire d'événements pour le formulaire de modification
    $('#modifierCompteForm').submit(function(event) {
        event.preventDefault();

        var userId = $('#userId').val();
        var nom = $('#nomModif').val();
        var prenom = $('#prenomModif').val();
        var email = $('#emailModif').val();
        var tel = $('#telModif').val();

        $.ajax({
            url: 'modifier_utilisateur.php',
            type: 'POST',
            data: {id: userId, nom: nom, prenom: prenom, email: email, tel: tel},
            success: function(response) {
                alert(response);
                chargerUtilisateurs();
                $('#modifierModal').hide();
                $('#modifierCompteForm')[0].reset();
            },
            error: function() {
                alert('Une erreur s\'est produite lors de la modification de l\'utilisateur.');
            }
        });
    });

    // Gestionnaire d'événements pour les boutons "Supprimer"
    $(document).on('click', '.supprimer', function() {
        var userId = $(this).data('id');

        $('#supprimerModal').show();

        $('#confirmerSuppression').off('click').on('click', function() {
            $.ajax({
                url: 'supprimer_utilisateur.php',
                type: 'POST',
                data: {id: userId},
                success: function(response) {
                    alert(response);
                    chargerUtilisateurs();
                    $('#supprimerModal').hide();
                },
                error: function() {
                    alert('Une erreur s\'est produite lors de la suppression de l\'utilisateur.');
                }
            });
        });

        $('#annulerSuppression').off('click').on('click', function() {
            $('#supprimerModal').hide();
        });
    });

    // Gestionnaire d'événements pour annuler la modification
    $('#annulerModification').click(function() {
        $('#modifierModal').hide();
        $('#modifierCompteForm')[0].reset();
    });

    // Fonction pour trouver un utilisateur par son ID
    function trouverUtilisateurParId(userId) {
        var utilisateur = {};
        $.ajax({
            url: 'charger_utilisateur_par_id.php',
            type: 'GET',
            dataType: 'json',
            data: {id: userId},
            async: false, // Synchroniser la requête
            success: function(data) {
                utilisateur = data;
            },
            error: function() {
                alert('Une erreur s\'est produite lors de la récupération des données de l\'utilisateur.');
            }
        });
        return utilisateur;
    }
});
</script>
	<script src="script.js"></script>
</body>
</html>