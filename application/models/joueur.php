<?php
class joueur extends CI_Model{
	
	public function __construct(){
		parent::__construct();
	}
	
	public function connexion($iden, $mdp){
		$res = $this->db->select('*')->from('joueur')->where('pseudo',$iden)->where('motDePasse',$mdp)->get()->result_array();
		if(!empty($res))
		{
			return $res[0]['IDJOUEUR'];
		}
		else{
			return 0;
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
	
	public function score($iden){
		$temp = $this->db->select('*')->from('joueur')->where('pseudo',$iden)->get()->result_array();
		$res = $this->db->select('count(*) as nb')->from('joue')->where('idjoueur',$temp[0]["IDJOUEUR"])->get()->result_array();
		return $res[0]["nb"];
	}

}
?>