<?php
	$nom=$_GET['nom'];
	include("DAO.php");
	$dao=new DAO();
	$dao->modifyemployer($nom);
	header("location:listeemployer.php");
?>