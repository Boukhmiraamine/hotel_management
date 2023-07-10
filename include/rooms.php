<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
@import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Macondo&family=Varela+Round&display=swap');
body {
  font-family: Arial, Helvetica, sans-serif;
}

.flip-card {
  background-color: transparent;
  width: 300px;
  height: 300px;
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #bbb;
  color: black;
  
}
.flip-card-front h2 {
    color: #FAA33F;
    font-size: 20px;
}
.flip-card-front img {
    object-fit: cover;    
}

.flip-card-back {
  background-color: #000;
  color: white;
  transform: rotateY(180deg);
  display: flex;
  place-items: center; 

}

.button {
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 0 auto;
  

}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
.form{
  margin: 0 auto ;
  padding: 50px 20px 80px 20px;
  background-color: rgb(212, 210, 207);
  width: 70%;
  border-radius: 5px;
}
.Container {
  display: flex;

}

.flip-card {
  flex: 33.33%;
  padding: 5px;
}
.title h4 {
    margin: 0 0 10px 20px;
    font-family: 'Dancing Script', cursive;
    font-family: 'Macondo', cursive;
    font-family: 'Varela Round', sans-serif;
}
.title hr{
    border: 1px dashed  ;
}

</style>
</head>
<body>
<div id="Rooms" class="form">
 <div class="title">
     <h4>Rooms Hotel</h4>
     <hr>
 </div>
 <br> 
 <div class="Container">
  <div class="flip-card">
   <div class="flip-card-inner">
     <div class="flip-card-front">
       <img src="../images/room1.jpg" alt="room1" style="width:300px;height:300px;">
       <h2>JUNIOR SUITE</h2>
       <h4><i>220 DH / night / 2 persons</i></h4>
     </div>
    
     <div class="flip-card-back">
        <button class="button"><a href="../include/room_junior suite.php"><span>More</span></a></button>
    </div>
   </div>
 </div>
 <div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="../images/room8.jpg" alt="room2" style="width:300px;height:300px;">
      <h2>MATRIMONIAL DOUBLE ROOM</h2>
      <h4><i>200 DH / night / 1 person</i></h4>
    </div>
    
    <div class="flip-card-back">
        <button class="button"><a href="../include/rooms_Matrimonial double room.php"><span>More</span></a></button>
    </div>
  </div>
 </div>
 
 <div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="../images/room4.jpg" alt="room3" style="width:300px;height:300px;">
      <h2>EXECUTIVE SUITE</h2>
      <h4><i>350 DH / night / 2 persons</i></h4>
    </div>
  
    <div class="flip-card-back">
      <button class="button"><a href="../include/rooms_executive suite.php"><span>More</span></a></button>
    </div>
  </div>
 </div>
</div> 

<br><br><br><br>

<div class="Container">
  <div class="flip-card">
   <div class="flip-card-inner">
     <div class="flip-card-front">
       <img src="../images/room7.jpg" alt="room1" style="width:300px;height:300px;">
       <h2>TWIN DOUBLE ROOM</h2>
       <h4><i>220 DH / night / 2 persons</i></h4>
     </div>
    
     <div class="flip-card-back">
     <button class="button"><a href="../include/rooms_twin double room.php"><span>More</span></a></button>
    </div>
   </div>
 </div>
 <div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="../images/room5.jpg" alt="room2" style="width:300px;height:300px;">
      <h2>SINGLE ROOM</h2>
      <h4><i>200 DH / night / 1 person</i></h4>
    </div>
    
    <div class="flip-card-back">
    <button class="button"><a href="../include/rooms_single room.php"><span>More</span></a></button>
    </div>
  </div>
 </div>
 
 <div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="../images/room6.jpg" alt="room3" style="width:300px;height:300px;">
      <h2>SUITE WITH TERRACE</h2>
      <h4><i>350 DH / night / 2 persons</i></h4>
    </div>
  
    <div class="flip-card-back">
    <button class="button"><a href="../include/rooms_suite with terrace.php"><span>More</span></a></button>
    </div>
  </div>
 </div>
</div>
</div>
</div>
</body>
</html>