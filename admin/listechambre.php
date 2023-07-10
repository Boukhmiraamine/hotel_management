<?php
session_start();
if(!isset($_SESSION['login'])){
	header("location:index.php?erreur=1");
	die();
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/fontawesome/css/all.css">
</head>
<body>
<div>
<?php include('navigation.php'); ?>
<div class="search">
				 <form methode="GET" action="#">	
				      <div class="input-group col-sm-3 ">
                           <input type="text" class="form-control" placeholder="Rechercher un groupe" name="ordre">
                           <button class="btn  btn-warning " type="submit" name="submit">Rechercher</button>
                       </div>
			     </form>
			</div>
  <div class="card list-entete">
  <?php
		 if(isset($_GET['submit'])){
			$bdd = new PDO('mysql:host=localhost;dbname=maboutique', 'root', ''); 
			$res = $bdd->prepare("select * from product where id=? "); 
			$res->execute(array($_GET["id"])); 
			if($res){
			while($ligne=$res->fetch()){
				echo "<table class='table'><tr><td>".$ligne[0]."</td><td>".$ligne[1]."</td><td>".$ligne[2]."</td><td>".$ligne[3]."</td><td>".$ligne[4]."</td><td><img width=80 src='".$ligne[5]."'></td>
				<td><a href='supprimergroupe.php?modele='.$ligne[0].''>Supprimer<i class='fas fa-trash-alt supp'></i>
				</a><a href='modifygroupe.php'>Modifier <i class='fas fa-user-edit update'></i></a></td></tr></table>";
		   }
		   }else {
		   echo"Aucun contact ne correspond à ce nom <br>";
		   } 
	   } 
	   ?>
  <div class="card-header  bg-default text-black">Liste des Chambres</div>
  <div class="card-body">
  	<?php
  	include("DAO.php");
	$dao=new DAO();
	$liste=$dao->listechambre();
  	?>
	<table class="table">
		<thead>
			<th>Numero</th><th>Designation</th><th>Telephone</th><th>Disponibilité</th><th>Prix</th><th>photo</th><th>Actions</th>
		</thead>
		<tbody>
			<?php
			foreach ($liste as $e) {
				echo "<tr><td>".$e[0]."</td><td>".$e[1]."</td><td>".$e[2]."</td><td>".$e[3]."</td><td>".$e[4]."</td><td><img width=80 src='".$e[5]."'></td><td>".
				'<a href="deletechambre.php?id='.$e[0].'">Supprimer<i class="fas fa-trash-alt supp"></i>
				</a>&ensp;<a href="modifyform.php?id='.$e[0].'">Modifier<i class="fas fa-user-edit update"></i></a></td></tr>';
			}

	    ?>
		</tbody>
	</table>

  </div>

</div>

</div>

</body>
</html>