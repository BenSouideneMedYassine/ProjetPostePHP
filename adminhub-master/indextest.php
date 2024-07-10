<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="style.css">
	<link rel='stylesheet' href='bootstrap/css/bootstrap.min.css'/>


	<title>Bs-GYMadmin</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<img src="img/logo.png" style="height: 50px;width: 50px;" >
			<span class="text">Bs-GYMadmin</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="#">
					<i class='bx bxs-utilisateurs ></i>
					<span class="text">Utilisateurs</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text" onclick="planning()">Planning</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text" onclick="products()">Products</span>
				</a>
			</li>
			<li>
			<a href="#">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text" onclick="products()">members</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-group' ></i>
					<span class="text">Team</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
				<a href="#" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
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
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="img/admin.png">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
				<a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a>
			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<h3>1020</h3>
						<p>New Order</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3>2834</h3>
						<p>Visitors</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
						<h3>$2543</h3>
						<p>Total Sales</p>
					</span>
				</li>
			</ul>

<!----------------Planning----------------->
<div class="table-data" id="comptes" style="">
				<div class="order">
					<div class="head">
						<h3>comptes</h3>
						<a href="#comp" data-bs-toggle="modal"><i class='bx bx-plus' ></i></a>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>id</th>
								<th>nom</th>
								<th>prenom</th>
								<th>email</th>
								<th>mdp</th>
							</tr>
						</thead>
						<tbody>
						<?php
						require_once "connexiondb.php";
						$req="SELECT * FROM `user`";
						$res=$pdo->query($req);
						while($user=$res->fetch())	{
							if(!empty($user)){ ?>

<tr id="found">

<td class="id"><?php echo $user['id'] ;?></td>
<td><?php echo $user['nom'] ;?></td>
<td><?php echo $user['prenom'] ;?></td>
<td><?php echo $user['email'] ;?></td>
<td><?php echo $user['mdp'] ;?></td>


<td>

<a class="edit"><i class="bx bx-edit"></i></a>
                                 
								 <a class="supp_btn"><i class="bx bx-trash"></i></a>
</td>




</tr>

						<?php 	}

						}					
						
						
						?>
						</tbody>
					</table>
				</div>
			
			</div>





			<!-------------add planning----------------->
			<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Modal 1 month-->
<div class="modal fade" id="comp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
    <h1 class="modal-title fs-5" id="exampleModalLabel">Abonner</h1>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
    <div class="show_dtl">
        <h1>user</h1>
        <form class="" action="addplanning.php" method="post" id="for3">
            <label for="name">nom</label>
            <input type="text" id="nom" name="nom" style="border-radius: 50px; "required>

            <label >prenom</label>
            <input type="text" id="prenom" name="prenom" style="border-radius: 50px;"required>
            
            <label >email</label>
          <input type="email" id="email" name="email" style="border-radius: 50px;" required>

            <label >mdp</label>
            <input type="password" id="mdp" name="mdp" style="border-radius: 50px; width: 100px;" required>

        

       

            <button type="submit">Add user</button>
        </form>
    </div>
    </div>
    
    </div>
    </div>
	</div>
	</div>





			<!---------------------------->
			<div class="table-data" id="members" style="display:none">
				<div class="order">
					<div class="head">
						<h3>Members</h3>
						<a href="#members" data-bs-toggle="modal"><i class='bx bx-plus' ></i></a>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
							<th>Ncarte</th>
								<th>FullName</th>
								<th>Email</th>
								<th>Password</th>
								<th>Age</th>
								<th>Offer</th>
								<th>gender</th>


							</tr>

							
						</thead>
						<tbody>
						<?php
						require_once "connexiondb.php";
						$req="SELECT * FROM `addmembers`";
						$res=$pdo->query($req);
						while($members=$res->fetch())	{
							if(!empty($members)){ ?>

<tr id="foundm">

<td class="idm"><?php echo $members['Ncarte'] ;?></td>
<td><?php echo $members['FullName'] ;?></td>
<td><?php echo $members['Email'] ;?></td>
<td><?php echo $members['Password'] ;?></td>
<td><?php echo $members['Age'] ;?></td>
<td><?php echo $members['Offer'] ;?></td>
<td><?php echo $members['gender'] ;?></td>

<td>

<a class="editm"><i class="bx bx-edit"></i></a>
                                 
								 <a class="supp_btnm"><i class="bx bx-trash"></i></a>
</td>




</tr>

						<?php 	}

						}					
						
						
						?>
						</tbody>
					</table>
				</div>
			
			</div>


			
	
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	





	    <!-----------------Script ajouter -------------------------------------->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"> </script>
<script>
$(document).ready(function(){
    $('.add_btn').click(function(e){
        e.preventDefault();
   
$.ajax({
    type:"POST",
    url:"ajouter.php",
    data:{
        "add_btn": true,
    
    },
    success:function(reponse){
       
    }
})
    })
})
</script>
<!-----------------------script modifier Planning---->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"> </script>

<script>
        $(document).ready(function(){
$('.edit').click(function(e){
    e.preventDefault();
    var id=$(this).closest('#found').find('.id').text();
    console.log(id);
    $.ajax({
        type:"POST",
        url:"modifier.php",
        data:{
            "edit":true,
            "id":id,
        },
        success:function(response){
          $('.show_dtl').html(response);
          $('#exampleModal').modal('show');


        }
    })
    
})

        })
		</script>




	<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h1 class="modal-title fs-5" id="exampleModalLabel">modifier</h1>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
<div class="show_dtl">

</div>
</div>

</div>
</div>
    <!---------------------------script Supprimer Planning------------------------>
    <script>
        $(document).ready(function(){
$('.supp_btn').click(function(e){
    e.preventDefault();
    if(confirm('voulez vous vreaiment supprimer ce champs')==true){
    var id=$(this).closest('#found').find('.id').text();
    console.log(id);
    $.ajax({
        type:"POST",
        url:"supprimer.php",
        data:{
            "delete":true,
            "id":id,
        },
        success:function(response){
         document.location.href="index.php";


        }
        
    })
  }
    else {

    }
})

        })
		</script>

	
<!------------------script planning products---------------------->
	<script>
function user(){
var p=document.getElementById('user');
p.style.display="block";


}

function products(){

	var p=document.getElementById('planning');
p.style.display="none";
var pr=document.getElementById('products');
pr.style.display="block";
var pm=document.getElementById('members');
pm.style.display="none";


}
function products(){

var p=document.getElementById('planning');
p.style.display="none";
var pr=document.getElementById('products');
pr.style.display="none";
var pm=document.getElementById('members');
pm.style.display="block";


}

	</script>
	<!--------------------add products--------------------------------->
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Modal 1 month-->
<div class="modal fade" id="addproducts" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
    <h1 class="modal-title fs-5" id="exampleModalLabel">Abonner</h1>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
    <div class="show_dtl">
        <h1>add product</h1>
        <form class="" action="addproducts.php" method="post" id="for3">
            <label for="name">porduct name</label>
            <input type="text" id="" name="pdname" style="border-radius: 50px; "required>

            <label >product descriprtion</label>
            <input type="text" id="" name="pddesc" style="border-radius: 50px;"required>
            
            <label >product price</label>
          <input type="number" id="pdprice" name="pdprice" style="border-radius: 50px;" required>

            <label >product photo</label>
            <input type="file" id="pdphot" name="pdphot" accept="image/*" style="border-radius: 50px; width: 100px;" required>

        

       

            <button type="submit">Add product</button>
        </form>
    </div>
    </div>
    
    </div>
    </div>
	</div>
	<!---------------------------------------------------->
<div class="table-data" id="products" style="display:none">
				<div class="order">
					<div class="head">
						<h3>Products</h3>
						<a href="#addproduct" data-bs-toggle="modal"><i class='bx bx-plus' ></i></a>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>ID</th>
								<th>Product Name</th>
								<th>description</th>
								<th>price</th>
								<th>photo_path</th>
								
							</tr>


						</thead>
						<tbody>
						<?php
						require_once "connexiondb.php";
						$req="SELECT * FROM `products`";
						$res=$pdo->query($req);
						while($products=$res->fetch())	{
							if(!empty($products)){ ?>

<tr id="foundp">

<td class="idp"><?php echo $products['idp'] ;?></td>
<td><?php echo $products['name'] ;?></td>
<td><?php echo $products['description'] ;?></td>
<td><?php echo $products['price'] ;?></td>
<td><?php echo $products['photo_path'] ;?></td>

<td>

<a class="edit_products"><i class="bx bx-edit"></i></a>
                                 
								 <a class="supp_btn_products"><i class="bx bx-trash"></i></a>
</td>




</tr>

						<?php 	}

						}					
						
						
						?>
						</tbody>
					</table>
				</div>
			
			</div>
	<!------------------ members---------------------->
	<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Modal 1 month-->
<div class="modal fade" id="members" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
    <h1 class="modal-title fs-5" id="exampleModalLabel">Abonner</h1>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
    <div class="show_dtl">
        <h1>members</h1>
        <form class="" action="addproducts.php" method="post" id="for3">
            <label for="name">Ncarte</label>
            <input type="number" id="" name="Ncarte" style="border-radius: 50px; "required>

            <label >FullName</label>
            <input type="text" id="" name="FullName" style="border-radius: 50px;"required>
            
            <label >Email</label>
          <input type="Email" id="Email" name="pdprice" style="border-radius: 50px;" required>

            <label >Password</label>
            <input type="Password" id="Password" name="Password" style="border-radius: 50px; width: 100px;" required>

        

       

            <button type="submit">Add product</button>
        </form>
    </div>
    </div>
    
    </div>
    </div>
	</div>




<----------------------------------------------->
<div class="table-data" id="members" style="display:none">
				<div class="order">
					<div class="head">
						<h3>Products</h3>
						<a href="#members" data-bs-toggle="modal"><i class='bx bx-plus' ></i></a>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>ID</th>
								<th>fullname</th>
								<th>email</th>
								<th>password</th>
								<th>age</th>
								<th>offer</th>
								<th>gender</th>
								<th>Ncarte</th>
								
							</tr>


						</thead>
						<tbody>
						<?php
						require_once "connexiondb.php";
						$req="SELECT * FROM `addmembers`";
						$res=$pdo->query($req);
						while($members=$res->fetch())	{
							if(!empty($members)){ ?>

<tr id="found">

<td class="id"><?php echo $addmembers['Ncarte'] ;?></td>
<td><?php echo $addmembers['fullname'] ;?></td>
<td><?php echo $addmembers['email'] ;?></td>
<td><?php echo $addmembers['password'] ;?></td>
<td><?php echo $addmembers['age'] ;?></td>
<td><?php echo $addmembers['offer'] ;?></td>
<td><?php echo $addmembers['gender'] ;?></td>



<td>

<a class="edit_products"><i class="bx bx-edit"></i></a>
                                 
								 <a class="supp_btn_products"><i class="bx bx-trash"></i></a>
</td>




</tr>

						<?php 	}

						}					
						
						
						?>
						</tbody>
					</table>
				</div>
			
			</div>

