<?php
class joueur extends CI_Model{
	
	public function __construct(){
		parent::__construct();
	}
	
	public function connexion($iden, $mdp){
		$res = $this->db->select('*')->from('joueur')->where('pseudo=',$iden)->where('motDePasse',$mdp)->get()->result_array();
		if(!empty($res))
		{
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