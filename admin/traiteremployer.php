<?php
	if(!isset($_POST["save"])){
		header("location:nouveauemployer.php");
		die();
	}
	$numero=$_POST["txtNumero"];
	$nom=$_POST["txtNom"];
	$prenom=$_POST["txtPrenom"];
	$telephone=$_POST["txtTelephone"];
	$email=$_POST["txtEmail"];
	$photo=$_FILES["photo"]["tmp_name"];
	$dest="images/".$numero.".jpg";
	move_uploaded_file($photo,$dest);

	include("employer.php");
	$e=new employer($numero,$nom,$prenom,$telephone,$email,$dest);
	$e->save();
	header("location:listeemployer.php");
?>