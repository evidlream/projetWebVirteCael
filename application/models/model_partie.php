<?php
class Model_Partie extends CI_Model{
	
	public function __construct(){
		parent::__construct();
	}
	
	public function existePartie($idJoueur){
		$res = $this->db->select('idPartie')->from('joue')->where('idJoueur=',$idJoueur)->where('fini',0)->get()->result_array();
		if(empty ($res[0]['idPartie']))
			return 0;
		else return $res[0]['idPartie'];
	}

}
?>