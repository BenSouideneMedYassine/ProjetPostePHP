<?php
session_start();
if ((!isset($_SESSION['user']))||(!isset($_SESSION['factures']))) {
    header("Location: charger_utilisateur_par_id.php");
    exit();
}
$user = $_SESSION['user'];
$factures = $_SESSION['factures'];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Gestion de compte à la poste Tunisienne</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="bootstrap/bootstrap/css/bootstrap.min.css"/>

        <!-- Core theme CSS (includes Bootstrap)-->
        
        <link rel="stylesheet" href="style.css">
        
        
        <script src="scripts.js" defer> </script>
<link href="css/styles.css" rel="stylesheet" />




<style>
    .header{
        display:flex;
        align-items: center;
    }
    .logo{
        width: 100px;
        margin-right: 35px;
    }
    .special-button{
        background-color:antiquewhite;
        padding: 10px 20px;
        border-radius:5px;
        cursor: pointer;
        font-size: 16px;
    

    }
    
</style>








    </head>
    

    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <div class="header">
                <img class="logo" src="Images/poste2.jpg.jpg"  alt="..."  weight="30" height="60">

                <!--a class="navbar-brand" href="#page-top">Bienvenue </a-->
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="index.php">Accueil</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#portfolio">Services</a></li>

                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">Apropos</a></li>
                
                            <li class="nav-item " style="margin-left:500px"><a  class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">Profile</a></li>
                            <li class="nav-item mx-0 mx-lg-1"><a href="../logout.php" class="nav-link py-3 px-0 px-lg-3 rounded" data-bs-toggle="modal" href="#connexion">Déconnecter</a></li>


                    </ul>
                </div>
            </div>
        </nav>




        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="masthead-avatar mb-5" src="assets/img/avataaars.svg" alt="..." />
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">Poste Tunisienne</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0"></p>
            </div>
        </header>






        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Services</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                    <!-- Portfolio Item 1-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="Images/opérations.png.jfif" alt="..."   height="190" />
                        </div>
                    </div>
                    <script type="text/javascript" src="file:///C:/Users/user/Desktop/startbootstrap-freelancer-gh-pages/js/scripts.js"></script>


                    <!-- Portfolio Item 2-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal2">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="Images/virementp.png.png" alt="..."  width="400" height="160" />
                        </div>
                    </div>
                    <!-- Portfolio Item 3-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal3">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="Images/facture.png.jpg.jfif"  alt="..."  width="400" height="160"/>
                        </div>
                    </div>
                    <!-- Portfolio Item 4-->
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal4">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="Images/rechargetl.png.jpg.jpg"   alt="..." width="400" height="160" />
                        </div>
                    </div>
                    <!-- Portfolio Item 5-->
                    <div class="col-md-6 col-lg-4 mb-5 mb-md-0">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal5">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="Images/suite.jpg.jpg" alt="..."    width="400" height="160" />
                        </div>
                    </div>
                    <!-- Portfolio Item 6-->
                    <div class="col-md-6 col-lg-4">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal6">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                        <img class="img-fluid" src="Images/macarte.png.jpg" alt="..."  width="400" height="160" />
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!-- About Section-->
        <section class="page-section bg-primary text-white mb-0" id="about">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">A propos</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->




                <div class="row">
                    <div class="col-lg-4 ms-auto"><p class="lead"></p></div>La gestion de compte à la Poste Tunisienne en ligne permet aux clients de gérer facilement leurs comptes postaux grâce à l'utilisation de services en ligne. Ces services incluent la consultation des soldes de compte, le suivi des transactions, les virements bancaires et postaux, le paiement de factures, la gestion des cartes de crédit, et bien plus encore.

                    Les clients peuvent accéder à leurs comptes en ligne en utilisant leur identifiant et leur mot de passe personnels. Ils peuvent également sécuriser leur compte en utilisant une méthode d'authentification supplémentaire telle que l'envoi d'un code de sécurité par SMS.
                    
                    La gestion de compte en ligne offre de nombreux avantages aux clients. Elle leur permet de gagner du temps en évitant de se rendre physiquement dans une agence pour effectuer des opérations. Les clients peuvent effectuer des transactions à tout moment de la journée, même en dehors des heures d'ouverture des agences.
                    
                    De plus, la gestion de compte en ligne offre également une meilleure visibilité sur les transactions et les soldes de compte. Les clients peuvent facilement suivre leurs dépenses et gérer leur budget en consultant les relevés de compte en ligne.
                    
        
                    <div class="col-lg-4 me-auto"><p class="lead"></p></div>
                </div>
                



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

                
        <!-- Contact Section-->Enfin, la gestion de compte en ligne offre un niveau de sécurité élevé. La Poste Tunisienne utilise des mesures de sécurité avancées pour protéger les informations sensibles des clients, telles que le cryptage des données et la surveillance des activités suspectes. En résumé, la gestion de compte à la Poste Tunisienne en ligne offre aux clients une solution pratique, sécurisée et efficace pour gérer leurs comptes bancaires et postaux. Elle permet de gagner du temps, d'avoir une meilleure visibilité sur les transactions et d'effectuer des opérations à tout moment
        <section class="page-section" id="contact">
            <div class="container">
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Profil</h2>
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



        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Localisation</h4>
                        <p class="lead mb-0">
                            Rue El Hadi Nouira 1001
                            <br />
                            Tunis, Tunisie
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Around the Web</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">Pour plus d'informations</h4>
                        <p class="lead mb-0">
                            Appelez-nous sur 71.833.787
                            <br>
                            Ou contactez-nous sur notre e-mail: BRC@poste.tn
                            <a href="http://startbootstrap.com">Poste Tunisienne</a>
                        
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        
        
        
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; Your Website 2023</small></div>
        </div>

      



        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0">    
                        <!-- <a href="#portfolioModal2" data-bs-toggle="modal">connexion</a> -->
          
                                    
                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">

                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <h6 style="color:black;line-height: 3;">Suivez facilement vos opérations en ligne avec La Poste Tunisienne :
                             consultez l'état de vos envois en temps réel, recevez des notifications sur l'avancement de vos colis,
                              et gérez efficacement vos paiements et transactions.
                               Profitez d'une plateforme sécurisée et intuitive pour une expérience client optimale.</h6>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" aria-labelledby="portfolioModal2" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0">    
                        <!-- <a href="#portfolioModal2" data-bs-toggle="modal">connexion</a> -->
          
                                    
                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">

                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <h6 style="color:black;line-height: 3;">Facilitez vos échanges de devises et transferts internationaux avec notre application :
                                     convertissez rapidement les monnaies, envoyez de l'argent à l'étranger en toute sécurité, et suivez vos transactions en temps réel.
                                     Profitez d'une solution pratique et sécurisée pour gérer vos finances globalement.</h6>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          <!-- Portfolio Modal 3-->
          <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" aria-labelledby="portfolioModal3" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    
                                    <h6 style="color:black;">Facilitez vos paiements en ligne pour les services postaux avec notre plateforme sécurisée et pratique.</h6>

   <!-- Icon Divider-->
   <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <div class="row justify-content-center"> 
            <div class="col-lg-8 col-xl-7 profile-section">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Type de Facture</th>
                            <th>Montant</th>
                            <th>Dernier Délai</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="facturesTbody">
                        <!-- Les lignes seront ajoutées dynamiquement par JavaScript -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>                              
<script>
        // Récupération des factures depuis PHP (encodées en JSON)
        const factures = <?php echo json_encode($_SESSION['factures']); ?>;
        const facturesTbody = document.getElementById('facturesTbody');

        // Vérification des données de factures
        if (factures && factures.length > 0) {
            // Parcourir chaque facture et créer une ligne dans le tableau
            factures.forEach(facture => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${facture.type_facture}</td>
                    <td>${facture.montant}</td>
                    <td>${facture.dernierdelai}</td>
                    <td>
                    <button onclick="payerFacture(${facture.id})" class="btn btn-primary">Payer</button>
                   </td>
                `;
                facturesTbody.appendChild(row);
            });
        } else {
            // Afficher un message si aucune facture n'est trouvée
            const row = document.createElement('tr');
            row.innerHTML = `<td colspan="4">Aucune facture trouvée.</td>`;
            facturesTbody.appendChild(row);
        }
        function payerFacture(idFacture) {

        fetch(`suppression_facture.php?id=${idFacture}`, {
            method: 'DELETE'
        })
        .then(response => {
            if (response.ok) {
                window.location.href = 'charger_facteur_par_user.php';
            } else {

                console.error('Erreur lors du paiement de la facture.');
            }
        })
        .catch(error => {
            console.error('Erreur lors de la requête AJAX :', error);
        });
    }
    </script>
       
                                    
                                    <!-- <a href="paiement.html" target="_blank"><button>connexion20</button></a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 4-->
<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" aria-labelledby="portfolioModal4" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center pb-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">

                            <!-- Icon Divider-->
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                <div class="divider-custom-line"></div>
                            </div>

                            <h6 style="color:black;line-height: 3;">
                                Rechargez en ligne votre compte ou vos services avec facilité et sécurité. Effectuez vos recharges instantanément, 
                                consultez l'historique de vos transactions en temps réel, et bénéficiez d'une expérience de recharge fluide et efficace.
                            </h6>
                            
                            <form id="addFactureForm">
                                <div class="mb-3">
                                    <label for="type_facture" class="form-label">Type de Facture</label>
                                    <select class="form-select" id="type_facture" name="type_facture" required>
                                        <option value="STEG">STEG</option>
                                        <option value="SONED">SONED</option>
                                        <option value="Orange">Orange</option>
                                        <option value="Ooredo">Ooredo</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="montant" class="form-label">Montant</label>
                                    <input type="number" class="form-control" id="montant" name="montant" required>
                                </div>
                                <div class="mb-3">
                                    <label for="dernierdelai" class="form-label">Dernier Délai</label>
                                    <input type="date" class="form-control" id="dernierdelai" name="dernierdelai" required>
                                </div>
                                <input type="hidden" id="id_user" name="id_user">
                                <button type="submit" class="btn btn-primary">Ajouter Facture</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const id_user = getCookie('user_id');
    document.getElementById('id_user').value = id_user;

    document.getElementById('addFactureForm').addEventListener('submit', function(event) {
        event.preventDefault();
        const formData = new FormData(this);
        fetch('ajouter_facture.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('Facture ajoutée avec succès');
                // window.location.reload();
                window.location.href = 'charger_facteur_par_user.php';
            } else {
                alert('Erreur lors de l\'ajout de la facture');
            }
        })
        .catch(error => console.error('Erreur:', error));
    });
});

function getCookie(name) {
    let cookieArr = document.cookie.split(";");
    for(let i = 0; i < cookieArr.length; i++) {
        let cookiePair = cookieArr[i].split("=");
        if(name == cookiePair[0].trim()) {
            return decodeURIComponent(cookiePair[1]);
        }
    }
    return null;
}
</script>

        <!-- Portfolio Modal 5-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" aria-labelledby="portfolioModal5" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    
                        
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    
                                    
                                
                                    
                                    <h6 style="color:black;line-height: 3;">Envoyez vos enveloppes en toute simplicité avec notre service rapide et fiable. 
                                    Bénéficiez d'une expédition sécurisée et suivie, adaptée à vos besoins d'envoi local ou international.
                                     Profitez d'une solution efficace pour envoyer vos documents importants et lettres en toute confiance.</h6>                                      
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 6-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" aria-labelledby="portfolioModal6" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content"    >   
                    
                    
                <button  class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                <br>
                    <div class="modal-header border-0"> 
                    
                    
                    
                    </div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    
                                   
                                    <h6 style="color:black;line-height: 3;">Nous proposons un service complet de vérification de cartes et de renouvellement,
                                     assurant la sécurité de vos transactions et la mise à jour régulière de vos informations de paiement. Simplifiez la gestion de vos cartes bancaires en ligne,
 
                                    avec des options de vérification et de renouvellement intuitives et sécurisées, garantissant une expérience sans souci.</h6>  
                                    
                           
                                    
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



















        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>

        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        <script src="bootstrap/bootstrap/js/bootstrap.bundle.min.js"></script>

    </body>
</html>
