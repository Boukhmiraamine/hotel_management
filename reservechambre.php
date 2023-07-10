<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
<div class="container-fluid" >
    <div class="main">


        <div class="card formula" >
             <div class="card-header text-center">
                  <h4>Demande de reservation d'une chambre</h4>
             </div>
             <div class="card-body loc-vehicule" >

                        <form  class="form-vehicule" action="reserver.php" method="GET">
                        <div class ="mb-3" >
                            <label for="name" class="form-label">Nom du Client :</label>
                        <input  class="form-control " type="text"  name="username"> 
                        </div>
                        <div class="mb-3">
                            <label for="adresse" class="form-label" >Type de chambre:</label>
                            <input class="form-control "   type="text" name="useradresse">
                        </div>
                        <div class="mb-3">
                            <label for="modele" class="form-label">Entrer la categorie d'hotels:</label>
                            <input class="form-control "   type="text" name="usermodele">
                        </div>
                        <div class="mb-3">
                            <label for="date" class="form-label">Entrer La date de la reservation:</label>
                            <input class="form-control "  type="date" name="userdate">      
                        </div>
                        <input class="btn btn-secondary" type="submit" id="submit" value="Annuler">  
                        <input class="btn btn-primary" type="submit" value="Envoyer" name="submit">       
                 </form>
                
         </div>
        <?php
                  if(isset($_GET["submit"])){
                        $bdd = new PDO('mysql:host=localhost;dbname=hotel', 'root', '');  
                        $res = $bdd->prepare("insert into reservation(nom,adresse,marque,modele,date,objet) values (?,?,?,?,?,?)");
                        $res->execute(array($_GET["username"],$_GET["useradresse"],$_GET["usermarque"],$_GET["usermodele"],$_GET["userdate"],$_GET["userobjet"]));
                              if($res == true){
                                   echo "<p  style='color:green'>demande envoyée </p>";
                                }else{
                                      echo "<p style='color:red'>Désolé, une erreur s'est produite ... réessayez</p>";
                                }
                    }
       
                  ?>

     </div>
   </div>
 </div>
</body>
</html>