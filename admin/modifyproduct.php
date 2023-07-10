<?php session_start();
	if (!isset($_POST['submit'])){
		
			header("location:listeproduct.php");
		

	}else{
	    	$id=$_POST['txtId'];
			$titre=$_POST['txtTitre'];
			$description=$_POST['txtDesc'];
			$prix=$_POST['txtPrix'];
			include("DAO.php");
			$dao=new DAO();
			$dao->modifyproduct($id,$titre,$description,$prix);
			header("location:listeproduct.php");
	}
		
	
?>