<?php
     if(isset($_POST["submit"])){
         if(isset($_POST["username"]) and isset($_POST["email"]) and isset($_POST["password"])){
             if(!empty($_POST["username"]) and !empty($_POST["email"]) and !empty($_POST["password"])){
             $username=htmlspecialchars($_POST["username"]);
             $email=htmlspecialchars($_POST["email"]);
             $password=htmlspecialchars($_POST["password"]);
             require('DAO.php');
             $dao=new DAO();
             $dao->estinscrit($username,$email,$password);
             header("location:index.php");  
             }else
             header("location:index.php?erreur=1");
		     die();
         }
     }
?>