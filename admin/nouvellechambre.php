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
  <div class="card-header  bg-default text-black">Nouvelle chambre</div>
  <div class="card-body">
  	
	<form action="traiterchambre.php" method="post" enctype="multipart/form-data". >
	
	<div class="form-group">
	    <label for="id">Numero:</label>
	    <input type="text" name="txtId" class="form-control">
	  </div>
	  <div class="form-group">
	    <label for="titre">Designation:</label>
	    <input type="text" name="txtTitre" class="form-control">
	  </div>
	  <div class="form-group">
	    <label for="description">Telephone :</label>
	    <input type="text" name="txtTel" class="form-control">
	  </div>
	  <div class="form-group">
	    <label for="description">Disponibilité :</label>
	    <input type="text" name="txtDispo" class="form-control">
	  </div>
      <div class="form-group">
	    <label for="prix">Prix:</label>
	    <input type="text" name="txtPrix" class="form-control">
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