<?php
	class Attente extends CI_Controller {

		public function __construct(){
			parent::__construct();
		}
	
		public function attenteJoueur($nombreJoueur)
		{
			session_start();
			$this->load->helper(array('form','url'));
			$data['nombreJoueur'] = $nombreJoueur;
			$this->load->view('wait',$data);
		}
		
		public function attenteJoueurPersistante($nb){

			echo '0'."/".$nb;
		}
	
	}

?>