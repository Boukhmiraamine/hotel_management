<?php 
if(isset($_POST["connexion"])){
    if(isset($_POST["login"]) and isset($_POST["email"]) and isset($_POST["password1"]) and isset($_POST["password2"]) and isset($_POST["genre"]) and isset($_POST["choix"])){
        if(!empty($_POST["login"]) and !empty($_POST["email"]) and !empty($_POST["password1"]) and !empty($_POST["password2"]) and !empty($_POST["genre"]) and !empty($_POST["choix"]))
          {
              $login=htmlspecialchars($_POST["login"]);
              $email=htmlspecialchars($_POST["email"]);
              $password1=htmlspecialchars($_POST["password1"]);
              $password2=htmlspecialchars($_POST["password2"]);
              $genre=htmlspecialchars($_POST["genre"]);
              $choix=htmlspecialchars($_POST["choix"]);
               if($password1==$password2){
                   $password1=md5($password1);
                   require('DAO.php');
                   $bdd=new DAO();

                   if($bdd->equal($email)){
                    echo "cet email existe deja";

                   }else
                   {$bdd->estinscrit($login,$email,$password1,$password2,$genre,$choix);         
                   echo $login , $email, $password1,$password2,$genre,$choix;}
                   
               }else
               echo "les deux mots de passe doivent etre identiques";
               
          }else echo "Merci de remplir le formulaire";
    }
}
?>