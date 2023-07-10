<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil</title>
    <link rel="stylesheet" href="../css/styleheader.css">
    <script src="https://kit.fontawesome.com/aae8bd2377.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script>
         $(document).ready(function(){
             $('#icon').click(function(){
                 $('ul').toggleClass('show');
             });
         });
    </script>
   
</head>
<body>
    
    <div class="menu-bar">
        <ul>
            <li class="active"><a href="index.php"><i class="fas fa-home"></i>Accueil</a></li>
            <li><a href="#"><i class="fas fa-shopping-bag"></i></i>Hotels</a>
               <div class="sub-menu-1">
                    <ul>
                         <li class="hover-me"><a href="#">Classes</a><i class="fas fa-angle-right"></i>
                             <div class="sub-menu-2">
                                <ul>
                                     <li><a href="#">Chemises</a></li>
                                     <li><a href="#">Chaussures</a></li>
                                     <li><a href="#">Pantalons</a></li>
                                     <li><a href="#">T-Shirt</a></li>
                                     <li><a href="#">Jeans</a></li>
                                     <li><a href="#">Pulls</a></li>
                                     <li><a href="#">Costumes</a></li>
                                     <li><a href="#">Accessoires</a></li>

                                </ul> 
                             </div> 
                        </li>
                        <li class="hover-me"><a href="#">Categories</a><i class="fas fa-angle-right"></i>
                            <div class="sub-menu-2">
                                    <ul>
                                        <li><a href="#">Chemises</a></li>
                                        <li><a href="#">Chaussures</a></li>
                                        <li><a href="#">Pantalons</a></li>
                                        <li><a href="#">Sacs</a></li>

                                    </ul> 
                           </div> 
                        </li>
                         <li class="hover-me"><a href="#">Villes</a><i class="fas fa-angle-right"></i>
                            <div class="sub-menu-2">
                                <ul>
                                     <li><a href="#">Chemises</a></li>
                                     <li><a href="#">Chaussures</a></li>
                                     <li><a href="#">Pantalons</a></li>
                                     <li><a href="#">Sacs</a></li>

                                </ul> 
                            </div> 
                        </li>
                    </ul> 
                </div> 
            </li>
            <li><a href="#"><i class="fas fa-users"></i>Apropos</a>
            <div class="sub-menu-1">
                    <ul>
                         <li><a href="#">Qui sommes nous</a></li>
                         <li><a href="#">Magasin</a></li>
                         <li><a href="#">Equipes</a></li>
                    </ul> 
                </div> 
           </li>
            <li><a href="#"><i class="fas fa-clone"></i>Services</a>
                <div class="sub-menu-1">
                        <ul>
                            <li><a href="#">Achat</a></li>
                            <li><a href="#">Reservation</a></li>
                            <li><a href="#">Livraison</a></li>
                        </ul> 
                    </div> 
             </li>

            <li><a href="#"><i class="fas fa-shopping-cart"></i>Receptions</a></li>
            <li><a href="#"><i class="fas fa-user-circle"></i>Inscription</a></li>
            <li><a href="#"><i class="fas fa-user"></i>Connexion</a></li>
            <li><a href="#"><i class="fas fa-phone-alt"></i>Contact</a>
            <div class="sub-menu-1">
                    <ul>
                         <li><a href="#">Appel</a></li>
                         <li><a href="#">Message</a></li>
                         <li><a href="#">Reseau sociaux</a></li>
                    </ul> 
                </div> 
            </li>
        </ul>    
    </div> 

   
</body>
</html>