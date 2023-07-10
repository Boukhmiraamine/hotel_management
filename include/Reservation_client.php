<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Dashboard Client</title>
    <style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #000;
  color: white;
}
.Form_reservations{
  margin: 250px auto ;
  padding: 20px 20px 80px 20px;
  background-color: rgb(212, 210, 207);
  width: 70%;
  border-radius: 5px;
}
.btn {
  border: none;
  color: white;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
}
hr {
    border: 2px dashed ;
}
.danger {background-color: #f44336;}
.danger:hover {background: #da190b;}
/****************************************************************************************************** ************** */
/*navbar Style*/
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
  background-color: #111;
  color: white ;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.btnnav {
  background-color: #ddd;
  border: none;
  color: black;
  padding: 10px 25px;
  text-align: center;
  font-size: 16px;
  margin: 2px 2px;
  transition: 0.3s;
  float: right;
  margin-right: 20px;
}

.btnnav:hover {
  background-color: #D78820;
  color: white;
}

</style>
</head>
<body>
    <!-----------Navbar------------------------------------------------------------------------------------------------------------>
    <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">Home</a>
  <a href="#">Rooms</a>
  <a href="#">About</a>
  <a href="#">Contact</a>
  <a href="#">Connexion</a>
  <a href="Logout_php.php">Logout</a>
</div>

<div id="main">
 
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
  <button  class="btnnav"><i class='fas fa-calendar-alt'></i>Reserver Maintenant</button>
</div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
<!----------------------------------------------------------------------------------------------------------------------------->
    <Div class="Form_reservations">
        <h1>Listes Des Reservations</h1>
        <hr>
        <br>
        <table id="customers">
  <tr>
    <th>Designation</th>
    <th>Prix</th>
    <th>photo</th>
    <th>Status</th>
    <th>Actions</th>
  </tr>
  <tr>
    <td>JUNIOR SUITE</td>
    <td>220 DH / night / 2 persons</td>
    <td></td> <!--Enplacement image chambre -->
    <td></td> <!--Statuts-->
    <td><button class="btn danger">Delete <i class="fa fa-trash-o"></i></button></td>
  </tr>
  <tr>
  <td>JUNIOR SUITE</td>
    <td>220 DH / night / 2 persons</td>
    <td></td> <!--Enplacement image chambre -->
    <td></td> <!--Statuts-->
    <td><button class="btn danger">Delete <i class="fa fa-trash-o"></i></button></td>
  </tr>
  <tr>
  <td>JUNIOR SUITE</td>
    <td>220 DH / night / 2 persons</td>
    <td></td> <!--Enplacement image chambre -->
    <td></td> <!--Statuts-->
    <td><button class="btn danger">Delete <i class="fa fa-trash-o"></i></button></td>
  </tr>
  <tr>
  <td>JUNIOR SUITE</td>
    <td>220 DH / night / 2 persons</td>
    <td></td> <!--Enplacement image chambre -->
    <td></td> <!--Statuts-->
    <td><button class="btn danger">Delete <i class="fa fa-trash-o"></i></button></td>
  </tr>

</table>   
    </Div>


<?php
     include ("newfooter.php"); 
     ?>
</body>
</html>

<?php 
}else{
     header("Location: C:/wamp64/www/gestion_hotel/include/Login.php");
     exit();
}
 ?>