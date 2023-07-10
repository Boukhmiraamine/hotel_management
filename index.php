<!DOCTYPE html>
<html>
<head>
	<title>Page de Connexion</title>
	<link rel="stylesheet" type="text/css" href="css/stylelogin.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>
<body>
	<!------------------Pages de Conecxion-Inscription--------------------->
<div class="page-connexion">
	<div class="container">
		 <div class="row">
			
		    <div class="col-2">
		         <div class="form-container">
	                <div class="form-btn">
					    <span onclick="login()">Connexion</span>
					    <span onclick="inscrire()">Inscription</span>
						<hr id="Indicator">
	                </div>
					<form id="Loginform" action="connect.php" method="post" enctype="multipart/form-data".>
					    <div class="input-icons">
						      <input type="text" placeholder="nom d'utilisateur" name="login" autocomplete="off">
							  <i class="fas fa-user"></i>
						</div>	
							 <div class="input-icons">
									<input type="password" placeholder="mot de passe" name="password" autocomplete="off">
									<i class="fas fa-lock"></i>
						     </div>	
							 
								<div style="color:red">
										<?php
											if(isset($_GET['erreur'])&&($_GET['erreur']==2)) echo "Login ou mot de passe incorrect!!!";
										?>
								</div>

							 <button type="submit" name="connexion" class="btn">Connexion</button>
							 <a href="receivepassword.php">mot de passe oublié</a>
					</form>
					<form id="Regform" action="registrer.php" method="post" enctype="multipart/form-data".>
						<div class="input-icons">
						     <input type="text" placeholder="nom d'utilisateur" name="username">
							  <i class="fas fa-user"></i>
						</div>	
					     <div class="input-icons">
						      <input type="email" name="email" placeholder="Email" name="email">
							  <i class="fas fa-envelope"></i>
						 </div>
					     <div class="input-icons">
						      <input type="password" placeholder="mot de passe" name="password" >
							  <i class="fas fa-lock"></i>
						 </div>		 
								<div style="color:red">
											<?php
												if(isset($_GET['erreur'])&&($_GET['erreur']==1)) echo "Merci de remplir le formulaire";
											?>
									</div>
							 <button type="submit"  name="submit" class="btn">Inscription</button>
					</form> 
						
					
				  </div>
			 </div>
		 </div>
   </div>
   	<!------------------Footer--------------------->
	<!-------------------Javascript pour le menu de navigation--------------------->
	<script>
		var MenuItems = document.getElementById("MenuItems");
		MenuItems.style.maxHeight="0px";

		function menutoggle() {
			if(MenuItems.style.maxHeight =="0px"){
				MenuItems.style.maxHeight = "200px";
			}else{
				MenuItems.style.maxHeight="0px";
			}
		}
	</script>

   <script>
		var Loginform = document.getElementById("Loginform");
		var Regform = document.getElementById("Regform");
		var Indicator = document.getElementById("Indicator");
		function inscrire() {
			Regform.style.transform = "translateX(0px)";
			Loginform.style.transform = "translateX(0px)";
			Indicator.style.transform="translateX(100px)";
		}
		function login() {
			Regform.style.transform="translateX(300px)";
			Loginform.style.transform="translateX(300px)";
			Indicator.style.transform="translateX(0px)";
		}

	</script>

</div>
</body>
</html>