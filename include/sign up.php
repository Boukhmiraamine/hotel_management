<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up</title>
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
  margin: 100px auto ;
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
.container {
  padding: 16px;
}
.container label  {
    color: white;
}
.container  hr{
    color: white;
}
.container  h1{
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

<form action="action_page.php">
  <div class="container">
    <h1>Register</h1>
    <hr>
    <br>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>
    <br>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
    <br>
    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
    <br>
    <hr>
    <br>
    <button type="submit" class="registerbtn">Register</button>
</form> 
  
    <?php
     include ("newfooter.php"); 
     ?>
</body>
</html>