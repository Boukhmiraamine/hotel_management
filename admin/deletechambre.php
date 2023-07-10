<?php
	$id=$_GET['id'];
	include("DAO.php");
	$dao=new DAO();
	$dao->deletechambre($id);
	header("location:listechambre.php");
?>