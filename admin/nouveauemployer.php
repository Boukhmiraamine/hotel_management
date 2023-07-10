<?php
session_start();
if(!isset($_SESSION['login'])){
	header("location:index.php?erreur=1");
	die();
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div>
<?php include('navigation.php'); ?>



  <div class="card list-entete border-warning">
  <div class="card-header  bg-default text-black">Nouveau Employer</div>
  <div class="card-body">
  	
	<form action="traiteremployer.php" method="post" enctype="multipart/form-data". >
	  <div class="form-group">
	    <label for="numero">Matricule:</label>
	    <input type="text" name="txtNumero" class="form-control">
	  </div>
	  <div class="form-group">
	    <label for="nom">Nom:</label>
	    <input type="text" name="txtNom" class="form-control">
	  </div>
	  <div class="form-group">
	    <label for="prenom">Prenom :</label>
	    <input type="text" name="txtPrenom" class="form-control">
	  </div>
	  <div class="form-group">
	    <label for="telephone">Telephone:</label>
	    <input type="text" name="txtTelephone" class="form-control">
	  </div>
	  <div class="form-group">
	    <label for="email">email:</label>
	    <input type="email" name="txtEmail" class="form-control">
	  </div>
	  <div class="form-group">
	    <label for="photo">Photo:</label>
	    <input type="file" name="photo" class="form-control">
	  </div>
	  <button type="reset" class="btn btn-danger">Annuler</button>
	  <button type="submit" name="save" class="btn btn-warning">Enregistrer</button>
	</form>

  </div>

</div>

</div>
</body>
</html>