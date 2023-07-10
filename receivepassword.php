
<html>
    <head>
        <title>Je recupere mon mot de passe </title>
        <link rel="stylesheet" href="css/stylelogin.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/aae8bd2377.js" crossorigin="anonymous"></script>

    </head>
</html>
<body class="page-recup">
    <div>
        <h4 style="text-align:center;">Bienvenue dans la page de recuperation de votre mot de passe</h1>
    </div>
         <div class="form-recup">
             <p>Veuillez entrer votre email de recuperation svp!</p>
                <form id="Recupform" action="sendpassword.php" method="post" enctype="multipart/form-data".>
                         <div class="input-icons">
						      <input type="email" name="email" placeholder="Email" name="email" class="recup-input">
							  <i class="fas fa-envelope"></i>
						 </div>   
                    <button type="submit"  name="submit" class="btn recup-btn">Enregistrer</button>
               </form>
</div>    
</body>
     