<?php
	if(!isset($_POST["save"])){
		header("location:nouvellechambre.php");
		die();
	}
	$id=$_POST["txtId"];
	$titre=$_POST["txtTitre"];
	$tel=$_POST["txtTel"];
	$dispo=$_POST["txtDispo"];
    $prix=$_POST["txtPrix"];
	$photo=$_FILES["photo"]["tmp_name"];
	$dest="images/".$titre.".jpg";
	move_uploaded_file($photo,$dest);

	include("chambre.php");
	$e=new chambre($id,$titre,$tel,$dispo,$prix,$dest);
	$e->save();
	header("location:listechambre.php");
?>