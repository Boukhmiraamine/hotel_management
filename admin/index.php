
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet"  href="css/style.css">
</head>
<body>
     <div>
          <div class="card login border-warning">
               <div class="card-header  bg-default">Responsable commerciale</div>
               <div class="card-body">	
                    <form action="connexion.php" method="post" enctype="multipart/form-data". >
                      <div class="form-group">
                        <label for="login">Nom:</label>
                        <input type="text"  class="form-control" name="login">
                      </div>
                      <div class="form-group">
                        <label for="password">mot de passe:</label>
                        <input type="password"  class="form-control" name="password">
                      </div>
                      <div style="color:red">
                        <?php
                            if(isset($_GET['erreur'])&&($_GET['erreur']==1)) echo "Merci de s'authentifier";
                            if(isset($_GET['erreur'])&&($_GET['erreur']==2)) echo "Login ou mot de passe incorrect!!!";
                        ?>
                    
                      </div>
                      <button type="reset" class="btn btn-secondary">Annuler</button>
                      <button type="submit" name="connexion" class="btn btn-warning">connexion</button>
                    </form>
  </div>

</div>


</div>
</body>