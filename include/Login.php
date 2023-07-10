<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;
  background-image: url(../images/bg2.webp);
  background-position: center;
  background-size: cover;
}

* {
  box-sizing: border-box;
}
form{
  margin: 150px auto ;
  padding: 20px 20px 80px 20px;
  background-color: black;
  width: 30%;
  border-radius: 5px;
}
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid gray;
  box-sizing: border-box;
}

.container button {
  background-color: gray;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

.container button:hover {
  opacity: 0.8;
}
.botn {
  border: 2px solid black;
  background-color: white;
  color: black;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  float: right;
  
}
.signup {
  border-color: white;
  color: green;
} 
.signup:hover {
  background-color: gray;
  color: white;
}
.container {
  padding: 16px;
}
.container label {
    color: white;
}
span.psw {
  float: right;
  padding-top: 16px;
}


 




</style>
</head>
<body>
     <?php
     include ("navbar.php");
     ?>

           
<form action="../include/login_php.php" method="post">


  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <button type="submit">Login</button>
    
  </div>

 
    <button class="botn signup"><a href="../include/sign up.php">Sign up</a></button>
  
</form>

<?php
     include ("newfooter.php"); 
     ?>

</body>
</html>
