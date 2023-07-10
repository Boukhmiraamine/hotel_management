<?php
	if(!isset($_POST["connexion"])){
		header("location:connexion.php?erreur=1");
		die();
	}
	$login=$_POST['login'];
	$password=$_POST['password'];
	require('DAO.php');
	$dao=new DAO();
	if($dao->estAuthentifie($login,$password)){
		session_start();
		$_SESSION['login']=$login;
		header("location:index.php");
		die();	
	}else{
		header("location:connexion.php?erreur=2");
		die();
	}

?>