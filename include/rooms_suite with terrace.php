<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUITE WITH TERRACE</title>
    <style>

section {
	display: flex;
	place-items: center;
    width: 80%;
    margin: 100px auto  ;
    background-color: rgb(212, 210, 207);
    padding: 30px 30px;
    border-radius: 5px;
    position:relative
   
}
section div {
    width: 50%;
}
section div h1{
    font-family: 'Dancing Script', cursive;
    font-family: 'Macondo', cursive;
    font-family: 'Varela Round', sans-serif;
}
section div img{
    width: 90%;
}

section p {
    width: 50%;
    font-family: 'Dancing Script', cursive;
    font-family: 'Macondo', cursive;
    font-family: 'Varela Round', sans-serif;
}
section button {
  background-color: #ddd;
  border: none;
  color: black;
  padding: 10px 25px;
  text-align: center;
  font-size: 16px;
  margin: 30px;
  transition: 0.3s;
  position: absolute;
  bottom:0;
  right: 0;

}
section button:hover {
  background-color: #D78820;
  color: white;
}
   
    </style>
</head>
<body>
     <?php
     include ("navbar.php");
     ?>
      <section>
         <div>
            <h1>SUITE WITH TERRACE</h1>
            <br>
            <img src="../images/room6.jpg" alt="description_img">
         </div>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis rem, voluptas sed similique deleniti, fugiat blanditiis iure, libero accusamus aut saepe doloribus inventore id consequuntur commodi debitis unde quae. Consequatur? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam, eius? Minus rerum sequi quidem perferendi kknjnkj jkk k lkmkmlkk kk mlk kl k k lmk lk mlmklfdvmlkml,  mlk mm km km m.</p>
         <button>Reserver Maintenant</button>
      </section>
     
     <?php
     include ("newfooter.php"); 
     ?>
</body>
</html>