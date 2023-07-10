<?php
	$matricule=$_GET['matricule'];
	include("DAO.php");
	$dao=new DAO();
	$dao->deleteemployer($matricule);
	header("location:listeemployer.php");
?>