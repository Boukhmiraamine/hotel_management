<?php
	if(!isset($_POST["connexion"])){
		header("location:index.php?erreur=1");
		die();
	}
	$login=$_POST['login'];
	$password=$_POST['password'];
	require('admin/DAO.php');
	$dao=new DAO();
	if($dao->estAuthentifie($login,$password)){
		session_start();
		$_SESSION['login']=$login;
		header("location:include/header.php");
		die();	
	}else{
		header("location:index.php?erreur=2");
		die();
	}

?>