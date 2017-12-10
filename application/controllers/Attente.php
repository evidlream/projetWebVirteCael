<?php
	class Attente extends CI_Controller {

		public function __construct(){
			parent::__construct();
			session_start();
		}
	
		public function attenteJoueur($nombreJoueur)
		{
			$this->load->helper(array('form','url'));
			$data['nombreJoueur'] = $nombreJoueur;
			$this->load->view('wait',$data);
		}
		
		public function attenteJoueurPersistante($nb){
			$this->load->database();
			$this->load->helper(array('form','url'));
			$this->load->model('Model_Attente');
			$temp = $this->Model_Attente->nbAttente($nb);
			if($temp < $nb)
				echo $temp."/".$nb;
			else{
				echo "aa";
			}
		}
		
		public function ajoutAttente($nb){
			$this->load->database();
			$this->load->helper(array('form','url'));
			$this->load->model('Model_Attente');
			$this->Model_Attente->ajoutJoueur($_SESSION['idJoueur'],$nb);
			$temp = $this->Model_Attente->nbAttente($nb);
			if($temp == $nb)
				$this->Model_Attente->nettoyer($nb);
			$this->attenteJoueurPersistante($nb);
		}
	
	}

?>