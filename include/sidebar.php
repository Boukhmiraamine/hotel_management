<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../css/styleinclude.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
      
    <section class="sec2">
<div class="card-header  bg-default text-black">Liste des produits</div>
  <div class="card-body">
  	<?php
  	include("../admin/DAO.php");
	$dao=new DAO();
	$liste=$dao->listechambre();
  	?>
	<table class="table">
		<thead>
			<th>Code Produit</th><th>Designation</th><th>Prix Unitaire</th><th>Disponibilité</th><th>qte</th><th>Id frn</th><th>Id cat</th><th>Date Peremption</th><th>photo</th><th>Actions</th>
		</thead>
		<tbody>
			<?php
			foreach ($liste as $e) {
				echo "<tr><td>".$e[0]."</td><td>".$e[1]."</td><td>".$e[2]."</td><td>".$e[3]."</td><td>".$e[4]."</td><td>".$e[5]."</td><td>".$e[6]."</td><td>".$e[7]."</td><td><img width=80 src='../".$e[8]."'></td><td>".
				'<a href="../deleteproduct.php?cd='.$e[0].'">Supprimer<i class="fas fa-trash-alt supp"></i>
				</a>&ensp;<a href="modifyform.php?nom='.$e[0].'">Modifier<i class="fas fa-user-edit update"></i></a></td></tr>';
			}

	    ?>
		</tbody>
	</table>

  </div>

</div>
    </section>
</body>
</html>