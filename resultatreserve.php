<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manutention africaine niger</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style-result.css">
    
    
</head>
<body>
 <div class="container reserve">

    <div class="main">
        <div class="logo">
            <img src="images/logomanut.png" alt="logo de la manutention africaine">
                 <p>
                      Liste des reservations des Chambres  
                 </p>
        </div>

          <table class="table table-hover table-bordered "  style="direction: ltr; ">
                <thead class="thead">
                       <th>nom de chambre</th>
                       <th>nom client</th>
                       <th>type</th>
                       <th>categories</th>
                       <th>date reservation</th>
                </thead>
                   
                    <tbody>
                        <?php
                            $bdd = new PDO('mysql:host=localhost;dbname=hotel', 'root', ''); 
                            $res = $bdd->prepare("select * from reservation");
                            $res->execute();
                            if($res){
                                echo "vous êtes connecté à la base de données";
                                while($ligne= $res->fetch()){
                                    echo "<tr><td>".$ligne["nom"]."</td><td>".$ligne["adresse"]."</td><td> ".$ligne["marque"]."</td><td> ".$ligne["modele"]."</td><td> ".$ligne["date"]."</td><td> ".$ligne["objet"]."</td></tr>";
                                }
                                $res->closeCursor();
                            }else{
                                echo "il y a eu une erreur, veuillez réessayer plus tard";
                            }
                            
                                ?>
                            
                    </tbody>
                </table>
</div>
</div>
</body>
</html>