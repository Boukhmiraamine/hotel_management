<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Junior Suite</title>
    <style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
}

/* The grid: Four equal columns that floats next to each other */
.column {
  float: left;
  width: 25%;
  padding: 10px;
}
.row .container{
    width: 50%;
}

/* Style the images inside the grid */
.column img {
  opacity: 0.8; 
  cursor: pointer; 
}

.column img:hover {
  opacity: 1;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* The expanding image container */
.container {
  position: relative;
  display: none;
}

/* Expanding image text */
#imgtext {
  position: absolute;
  bottom: 15px;
  left: 15px;
  color: white;
  font-size: 20px;
}

/* Closable button inside the expanded image */
.closebtn {
  position: absolute;
  top: 10px;
  right: 15px;
  color: white;
  font-size: 35px;
  cursor: pointer;
}
.bigcontainer{
    display: flex;
	place-items: center;
    width: 80%;
    margin: 10px auto  ;
    background-color: rgb(212, 210, 207);
    padding: 5px 5px;
    border-radius: 5px;
}
.bigcontainer p {
    width: 50%;
}


</style>
</head>
<body>
     <?php
     include ("navbar.php");
     ?>


<div class="bigcontainer">
<div class="row">
  <div class="column">
    <img src="../images/j_s1.jpg"  style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="../images/j_s2.jpg" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="../images/j_s3.jpg" style="width:100%" onclick="myFunction(this);">
  </div>
</div>
<div class="container">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <img id="expandedImg" style="width:100%">
  <div id="imgtext"></div>
</div>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In voluptates qui beatae repellendus praesentium, magni consequatur cupiditate. Necessitatibus laborum, perspiciatis rerum ea tempora incidunt beatae ab accusamus nesciunt possimus quidem?</p>

</div>
<script>
function myFunction(imgs) {
  var expandImg = document.getElementById("expandedImg");
  var imgText = document.getElementById("imgtext");
  expandImg.src = imgs.src;
  imgText.innerHTML = imgs.alt;
  expandImg.parentElement.style.display = "block";
}
</script>

     <?php
     include ("newfooter.php"); 
     ?>
</body>
</html>