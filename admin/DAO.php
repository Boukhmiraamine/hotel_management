<?php
class DAO{
	function __construct(){}
	function connexion(){
		$pdo = new PDO('mysql:host=localhost;dbname=hotel', 'root', '');
		return $pdo;
	}
	function estAuthentifie($login,$password){
		$bdd=$this->connexion();
		$reponse=$bdd->prepare("select * from utilisateurs where username= ? and password = ?");
   		$reponse->execute([$login,$password]);
   		if ($ligne=$reponse->fetch()) return true;
   		else return false ;
	}
	function estinscrit($username,$email,$password){
		$bdd=$this->connexion();
		$reponse=$bdd->prepare("insert into utilisateurs  values(?,?,?,?)");
   		$reponse->execute([$id,$username,$email,$password]);
   		$reponse->closeCursor();  
	}
    function addroom($id,$titre,$tel,$dispo,$prix,$photo){
		$bdd=$this->connexion();
		$reponse=$bdd->prepare('insert into chambre values(?,?,?,?,?,?)');
		$reponse->execute([$id,$titre,$tel,$dispo,$prix,$photo]);
		$reponse->closeCursor();
	}
	function listechambre(){
		$bdd=$this->connexion();
		$reponse=$bdd->prepare("select * from chambre");
   		$reponse->execute();
   		$lst=[];
   		while($ligne=$reponse->fetch()){
  	  		$lst[]=[$ligne[0],$ligne[1],$ligne[2],$ligne[3],$ligne[4],$ligne[5]];
  		}
   		$reponse->closeCursor();  
   		return $lst;
	}

    function deletechambre($id){
		$bdd=$this->connexion();
		$reponse=$bdd->prepare("delete from chambre where num_ch=?");
   		$reponse->execute([$id]);
	}
	function modifychambre($id, $titre,$description,$prix){
		$bdd=$this->connexion();
		$reponse=$bdd->prepare("update product set titre=?,description =?, prix=? where id_h=? ");
		$reponse->execute([$titre,$description,$prix,$id]);
		$reponse->closeCursor();
	}
	
	function ajouteremployer($matricule,$nom,$prenom,$telephone,$email,$photo){
		$bdd=$this->connexion();
		$reponse=$bdd->prepare("insert into employer values(?,?,?,?,?,?)");
   		$reponse->execute([$matricule,$nom,$prenom,$telephone,$email,$photo]);
   		$reponse->closeCursor();  
	}
	function deleteemployer($matricule){
		$bdd=$this->connexion();
		$reponse=$bdd->prepare("delete from employer where matricule= ?");
   		$reponse->execute([$matricule]);
	}
	function modifyemployer($nom){
		$bdd=$this->connexion();
		$reponse=$bdd->prepare('update employer set numero=2, nom="idi"  where numero=1');
        $reponse->execute(array(1)
		);
	}
	function listeemployer(){
		$bdd=$this->connexion();
		$reponse=$bdd->prepare("select * from employer");
   		$reponse->execute();
   		$lst=[];
   		while($ligne=$reponse->fetch()){
  	  		$lst[]=[$ligne[0],$ligne[1],$ligne[2],$ligne[3],$ligne[4],$ligne[5]];
  		}
   		$reponse->closeCursor();  
   		return $lst;
	}
	
	
}