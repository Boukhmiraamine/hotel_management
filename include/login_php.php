<?php 
session_start(); 
include ("../include/conn.php");//Le nom de fichier config que tu a utiliser pour la base de donnees

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: C:/wamp64/www/gestion_hotel/include/Login.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: C:/wamp64/www/gestion_hotel/include/Login.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM client WHERE user_name='$uname' AND password ='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $uname && $row['password'] === $pass) {
            	$_SESSION['user_name'] = $row['user_name'];
                $_SESSION['password'] = $row['password'];
                $_SESSION['id'] = $row['id'];
            	$_SESSION['fname'] = $row['fname'];
                $_SESSION['lname'] = $row['lname'];
            	header("Location: C:/wamp64/www/gestion_hotel/include/Reservation_client.php");
		        exit();
            }else{
				header("Location: C:/wamp64/www/gestion_hotel/include/Login.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: C:/wamp64/www/gestion_hotel/include/Login.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: C:/wamp64/www/gestion_hotel/include/Login.php");
	exit();
}
