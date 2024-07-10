<?php
session_start();
require_once "connexiondb.php";

// Vérifier si le cookie user_id existe
if (!isset($_COOKIE['user_id'])) {
    // Rediriger vers la page de connexion si le cookie n'existe pas
    header("Location: ../index.php");
    exit();
}
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
		<li class="active">
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
            <li>
				<a href="profile_admin.php">
					<i class='bx bxs-group' ></i>
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
			
				
        <h1 style="color:#3C91E6;">Liste des Utilisateurs</h1>    
    <form id="ajouterCompteForm">
    <div class="row g-3 align-items-center">
        <div class="col">
            <input class="form-control" type="text" id="nom" placeholder="Nom" required>
        </div>
        <div class="col">
            <input class="form-control" type="text" id="prenom" placeholder="Prénom" required>
        </div>
        <div class="col">
            <input class="form-control" type="email" id="email" placeholder="Email" required>
        </div>
        <div class="col">
            <input class="form-control" type="tel" id="tel" placeholder="Téléphone" required>
        </div>
        <div class="col">
            <input class="form-control" type="password" id="mdp" placeholder="Mot de Passe" required>
        </div>
        <div class="col-auto">
            <button class="btn btn-primary" type="submit">Ajouter Compte</button>
        </div>
    </div>
</form>


<br><br>
    <table id="user-table" border="1" class="table">
        <thead class="table table-primary">
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Photo</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody class="table">
            <!-- Les données de la table seront insérées ici via AJAX -->
        </tbody>
    </table>

    <!-- Modals pour la modification et la suppression -->
    <div id="modifierModal" style="display: none;">
        <h2 style="color:#3C91E6;">Modifier Utilisateur</h2>
        <!-- <form id="modifierCompteForm">
        <div class="row g-1 align-items-center">
        <div class="col">
            <input type="hidden" id="userId">
       </div>
       <div class="col">
            <input type="text" id="nomModif" placeholder="Nom" required>
       </div>
       <div class="col">
            <input type="text" id="prenomModif" placeholder="Prénom" required>
       </div>
       <div class="col">
            <input type="email" id="emailModif" placeholder="Email" required>
       </div>
       <div class="col">
            <input type="tel" id="telModif" placeholder="Téléphone" required>
        </div>
        <div class="col">
            <button type="submit">Valider</button>
        </div>
        <div class="col">
            <button type="button" id="annulerModification">Annuler</button>
        </div>
        </form> -->
        <style>
        #modifierCompteForm {
            max-width: 800px;
            margin: 20px auto;
        }
        .form-control {
            margin-bottom: 15px;
        }
        .form-buttons {
            margin-top: 10px;
        }
        .form-buttons .btn {
            margin-right: 10px;
        }
    </style>
        <form id="modifierCompteForm">
        <div class="row g-1 align-items-center">
            <input type="hidden" id="userId">
            <div class="col-12 col-md-6">
                <input class="form-control" type="text" id="nomModif" placeholder="Nom" required>
            </div>
            <div class="col-12 col-md-6">
                <input class="form-control" type="text" id="prenomModif" placeholder="Prénom" required>
            </div>
            <div class="col-12 col-md-6">
                <input class="form-control" type="email" id="emailModif" placeholder="Email" required>
            </div>
            <div class="col-12 col-md-6">
                <input class="form-control" type="tel" id="telModif" placeholder="Téléphone" required>
            </div>
            <div class="col-12 form-buttons">
                <button class="btn btn-primary" type="submit">Valider</button>
                <button class="btn btn-secondary" type="button" id="annulerModification">Annuler</button>
            </div>
        </div>
    </form>
    </div>

    <div id="supprimerModal" style="display: none;">
        <h2 style="color:#3C91E6;">Confirmer la Suppression</h2>
        <p>Êtes-vous sûr de vouloir supprimer cet utilisateur ?</p>
        <button class="btn btn-primary" type="button" id="confirmerSuppression">Confirmer</button>
        <button class="btn btn-danger" type="button" id="annulerSuppression">Annuler</button>
    </div>
			
			
		</main>
		<!-- MAIN -->
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