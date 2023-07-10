<?php
class chambre{
    var $id;
    var $titre;
    var $tel;
	var $dispo;
    var $prix;
    var $photo;
	function __construct($id_p,$t,$tl,$d,$p,$ph){
        $this->id=$id_p;
		$this->titre=$t;
		$this->tel=$tl;
        $this->dispo=$d;
        $this->prix=$p;
		$this->photo=$ph;
	}
	public function save(){
		include("DAO.php");
		$dao=new DAO();
		$dao->addroom($this->id,$this->titre,$this->tel,$this->dispo,$this->prix,$this->photo);
	}  
    
}

?>