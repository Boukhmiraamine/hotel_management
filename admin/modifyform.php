<?php session_start();
	if (!isset($_GET['id'])){
			header("location:listeproduct.php");
	}
  ?>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet"  href="css/style.css">
</head>
<body>
     <div>
          <div class="card login border-warning">
               <div class="card-header  bg-default">Administrateur</div>
               <div class="card-body">	
                    <form action="modifyproduct.php" method="post" enctype="multipart/form-data". >
                      <div class="form-group">
                        <label for="titre">Titre:</label>
                        <input type="text"  class="form-control" name="txtTitre" required>
                       <input type="text"  class="form-control" style="display:none" name="txtId" value="<?php echo $_GET['id'];?>" required> 
                      </div>
                      <div class="form-group">
                        <label for="description">Description:</label>
                        <input type="text"  class="form-control" name="txtDesc" required> 
                      </div>
                      <div class="form-group">
                        <label for="prix">Prix:</label>
                        <input type="text"  class="form-control" name="txtPrix" required>
                     </div>
                      <button type="reset" class="btn btn-secondary">Annuler</button>
                      <button type="submit" name="submit" class="btn btn-warning">Enregistrer</button>
                    </form>
  </div>

</div>


</div>
</body>