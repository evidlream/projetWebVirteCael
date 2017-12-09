<?php
	class Inscription extends CI_Controller {

		public function index()
		{
			$this->load->helper(array('form','url'));
			$this->load->library('form_validation');
			$this->load->model('joueur');
			
			$this->form_validation->set_rules('pseudo','Identifiant','required');
			$this->form_validation->set_rules('mdp','Mot de passe','required');
			$this->form_validation->set_rules('cmdp','Confirmation mot de passe','required|matches[mdp]');
			$this->load->database();

			if($this->form_validation->run() == false){
				echo 'erreur';
			}
			else{
				if ($this->joueur->inscription($this->input->post("pseudo"),$this->input->post("mdp")))
					echo 'connecté';
				else echo 'erreur';
			}

		}
}
?>