<?php

class employer{
    var $numero;
    var $telephone;
    var $nom;
    var $prenom;
	var $email;
	var $photo;
	function __construct($num,$n,$p,$tel,$e,$ph){
        $this->numero=$num;
        $this->nom=$n;
		$this->prenom=$p;
        $this->telephone=$tel;
		$this->email=$e;
		$this->photo=$ph;
	}
	public function save(){
		include("DAO.php");
		$dao=new DAO();
		$dao->ajouteremployer($this->numero,$this->nom,$this->prenom,$this->telephone,$this->email,$this->photo);
	}  

}
?>