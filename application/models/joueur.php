<?php
class joueur extends CI_Model{
	
	private $pseudo;
	private $motDePasse;
	
	public function __construct(){
		parent::__construct();
		$pseudo ="";
		$motDePasse="";
	}
	
	public function connexion($iden, $mdp){
		if($this->db->simple_query('SELECT * FROM JOUEUR WHERE motDePasse = '.$mdp.' AND pseudo = '.$iden))
		{
			$pseudo = $iden;
			$motdePasse = $mdp;
			return true;
		}
		else{
			return false;
		}
	}
	
	public function inscription($iden, $mdp){
		if($this->db->simplequery('SELECT * FROM JOUEUR WHERE pseudo = '.$iden)){
			return false;
		}
		else{
			$this->db->simple_query('INSERT INTO JOUEUR VALUES(NULL,'.$iden.','.$mdp.')');
			return true;
		}
	}

}
?>