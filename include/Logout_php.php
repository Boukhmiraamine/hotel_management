<?php 
session_start();

session_unset();
session_destroy();

header("Location: C:/wamp64/www/gestion_hotel/include/Login.php");
?>