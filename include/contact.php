<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
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
section{
    width: 70%;
    margin: 100px auto;
}        
input[type=text], select, textarea {
  width: 100%; /* Full width */
  padding: 12px; /* Some padding */ 
  border: 1px solid #ccc; /* Gray border */
  border-radius: 4px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: 6px; /* Add a top margin */
  margin-bottom: 16px; /* Bottom margin */
  resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}

/* Style the submit button with a specific background color etc */
input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

/* When moving the mouse over the submit button, add a darker green color */
input[type=submit]:hover {
  background-color: #45a049;
}

/* Add a background color and some padding around the form */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
    </style>
</head>
<body>
     <?php
     include ("navbar.php");
     ?>


<section>
<div class="container">
  <form action="action_page.php">

    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">City</label>
    <select id="country" name="country">
      <option value="australia">Agadir</option>
      <option value="canada">Casabalanca</option>
      <option value="usa">Rabat</option>
      <option value="usa">Tanger</option>
      <option value="usa">Taroudant</option>
      <option value="usa">Sale</option>
      <option value="usa">Dakhla</option>
      <option value="usa">Laayoune</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">

  </form>
</div>
</section>


     <?php
     include ("newfooter.php"); 
     ?>
</body>
</html>