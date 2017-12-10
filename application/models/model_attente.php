<?php
class Model_Attente extends CI_Model{
	
	public function __construct(){
		parent::__construct();
	}
	
	public function nbAttente($typePartie){
		$res = $this->db->select('count(distinct idJoueur) as nb')->from('attente')->where('typePartie=',$typePartie)->get()->result_array();
		return $res[0]['nb'];
	}
	
	public function ajoutJoueur($id,$type){
		$data = array('idJoueur'=>$id,'typePartie'=>$type);
		$this->db->insert('attente',$data);
	}
	
	public function nettoyer($nb){
		$this->db->delete('attente',array('typePartie'=>$nb));
	}
	
	

}
?>