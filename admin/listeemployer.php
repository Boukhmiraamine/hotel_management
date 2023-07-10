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
				 <form method="GET" action="listeemployer.php">	
				      <div class="input-group col-sm-3 ">
                           <input type="text" class="form-control" placeholder="Rechercher un technicien" aria-label="Recipient's username" name="numero">
                           <button class="btn  btn-warning " type="submit" name="submit">Rechercher</button>
                       </div>
			     </form>
			</div>
		
	
  <div class="card list-entete">
  <?php
		 if(isset($_GET['submit'])){
			$bdd = new PDO('mysql:host=localhost;dbname=employer', 'root', ''); 
			$res = $bdd->prepare("select * from employer where numero=? "); 
			$res->execute(array($_GET["numero"])); 
			if($res){
			while($e=$res->fetch()){
				echo "<table class='table'><tr><td>".$e[0]."</td><td>".$e[1]."</td><td>".$e[2]."</td><td>".$e[3]."</td><td>".$e[4]."</td><td><img width=80 src='".$e[5]."'></td><td>".
				'<a href="supprimeremployer.php?numero='.$e[0].'"><i class="fas fa-trash-alt supp"></i>
				</a><a href="modifyemployer.php"> <i class="fas fa-user-edit update"></i></a></td></tr></table>';
		   }
		   }else {
		   echo"Aucun contact ne correspond à ce nom <br>";
		   } 
	   } 
	   ?>
  <div class="card-header   bg-default text-black">Liste des Employers</div>
  <div class="card-body">
  	<?php
  	include("DAO.php");
	$dao=new DAO();
	$liste=$dao->listeemployer();
  	?>
	<table class="table">
		<thead>
			<th>Matricule</th><th>Nom</th><th>Prenom</th><th>Telephone</th><th>email</th><th>photo</th><th>Actions</th>
		</thead>
		<tbody>
			<?php
			foreach ($liste as $e) {
				echo "<tr><td>".$e[0]."</td><td>".$e[1]."</td><td>".$e[2]."</td><td>".$e[3]."</td><td>".$e[4]."</td><td><img width=80 src='".$e[5]."'></td><td>".
				'<a href="deleteemployer.php?matricule='.$e[0].'">Supprimer<i class="fas fa-trash-alt supp"></i>
				</a><a href="modifyemployer.php">Modifier <i class="fas fa-user-edit update"></i></a></td></tr>';
			}

			?>
		</tbody>
	</table>

  </div>

</div>
			
</div>

</body>
</html>