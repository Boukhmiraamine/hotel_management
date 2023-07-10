<?php
     session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>la page d'accueil</title>
</head>
<body>
<h1>Bienvenu</h1>
     <a href="logout.php">Se deconnecter</a>
     <div class="container">
        <div class="starter-template">
             <h3>Formulaire de contact PHP</h3>
             <?php
              if(array_key_exists('errors', $_SESSION)): ?>
                 <div class="alert alert-danger">
                 <p> une erreur est survenu et votre message n'est pas envoyé </p>

                  <!-----Pour afficher les messages d'erreur en haut du formulaire----->
                  <!-- <ul><li><?php /* echo implode("</li><li>" , $_SESSION['errors']); */ ?></li></ul> -->

                 </div>
                 <?php endif ?>
                 <?php
              if(array_key_exists('success', $_SESSION)): ?>
                 <div class="alert alert-success">
                     <p>Votre message nous est bien parvenu </p>
                </div>
                 <?php endif ?>

             <form method="post" action="contactform.php">
                 <div class="row g-3">
                     <div class="col-md-4">
                        <div class="form-group">
                            <label for="inputname" class="form-label">Votre nom</label>
                            <input type="name" name="name" class="form-control" id="inputname" autocomplete="none"
                             value="<?= isset($_SESSION['inputs']['name']) ? $_SESSION['inputs']['name'] : ''; ?>" >
                             <span>
                                 <?php isset($_SESSION['errors']['name']) ?
                                 '<span class="alert-danger">'.$_SESSION['errors']['name'].'</span>' : '';  ?>
                                                                           
                            </span>
                         </div>
                     </div>
                     <div class="col-md-4">
                        <div class="form-group">
                            <label for="inputEmail" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="inputEmail"
                            value="<?= isset($_SESSION['inputs']['email']) ? $_SESSION['inputs']['email'] : ''; ?>" >
                            <span>
                                 <?php isset($_SESSION['errors']['email']) ?
                                 '<span class="alert-danger">'.$_SESSION['errors']['email'].'</span>' : '';  ?>
                                                                           
                            </span>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="form-group">
                            <label for="inputservice" class="form-label">Service</label>
                            <select name="service"  class="form-select" id="inputservice">
                                <option  value="0" <?= isset($_SESSION['inputs']['service']) && 
                                 $_SESSION['inputs']['service'] == 0 ? "selected" : ''; ?>> Contact</option>
                                <option value="1" <?= isset($_SESSION['inputs']['service']) && 
                                 $_SESSION['inputs']['service'] == 1 ? "selected" : ''; ?>>comptabilité</option>
                                <option value="2" <?= isset($_SESSION['inputs']['service']) && 
                                 $_SESSION['inputs']['service'] == 2 ? "selected" : ''; ?>>commerciale</option>
                            </select>
                            <span>
                                 <?php isset($_SESSION['errors']['service']) ?
                                 '<span class="alert-danger">'.$_SESSION['errors']['service'].'</span>' : '';  ?>
                                                                           
                            </span>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group">
                            <label for="inputmessage" class="form-label">Message</label>
                            <textarea  type="text" name="message" id="inputmessage" class="form-control" cols="10" rows="3">
                            <?= isset($_SESSION['inputs']['message']) ? $_SESSION['inputs']['message'] : ''; ?>
                            </textarea>
                            <span>
                                 <?php isset($_SESSION['errors']['message']) ?
                                 '<span class="alert-danger">'.$_SESSION['errors']['message'].'</span>' : '';  ?>
                                                                           
                            </span>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group">
                            <input type="hidden" name="hid"  class="form-control">
                        </div>
                     </div>
                     <div class="col-12">
                         <button type="submit" name="submit" class="btn btn-primary">Envoyer</button>
                    </div>

                 </div>
             </form>
                 
             <h3>Deboguer</h3>
              <?php var_dump($_SESSION);?>
        </div>
    </div>
</body>
</html>
<?php 
      unset($_SESSION['errors']);
      unset($_SESSION['inputs']);
      unset($_SESSION['success']);
?>