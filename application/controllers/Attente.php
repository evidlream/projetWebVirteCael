<?php
	class Attente extends CI_Controller {

		public function attenteJoueur($nombreJoueur)
		{
			session_start();
			$this->load->helper(array('form','url'));
			$this->load->view('wait',$nombreJoueur);
		}
	
	}

?>