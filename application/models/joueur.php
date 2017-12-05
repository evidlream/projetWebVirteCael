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
		$res = $this->db->select('*')->from('joueur')->where('pseudo=',$iden)->get()->result_array();
		if(empty($res))
			{
				$data = array('idJoueur'=>NULL,'motdePasse'=>$iden,'pseudo'=>$mdp);
				$this->db->insert('joueur',$data);
				return true;
			}
	}

}
?>