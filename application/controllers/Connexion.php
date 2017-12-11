<?php
	class Connexion extends CI_Controller {

		public function index()
		{
			session_start();
			$this->load->helper(array('form','url'));
			$this->load->library('form_validation');
			$this->load->model('joueur');
			
			$this->form_validation->set_rules('connect_pseudo','Identifiant','required');
			$this->form_validation->set_rules('connect_mdp','Mot de passe','required');
			$this->load->database();

			if($this->form_validation->run() == false){
				$_SESSION['message'] = validation_errors();
				$this->load->view('message');
			}
			else{
				if ($_SESSION['idJoueur'] = $this->joueur->connexion($this->input->post("connect_pseudo"),$this->input->post("connect_mdp"))){
					$_SESSION['connect'] = $this->input->post("connect_pseudo");
					$_SESSION['victoire'] = $this->joueur->score($this->input->post("connect_pseudo"));
					$this->load->model('Model_Partie');
					$_SESSION['idPartie'] = $this->Model_Partie->existePartie($_SESSION['idJoueur']);
					if($_SESSION['idPartie'] > 0)
						$this->load->view('jeux');
					else $this->load->view('accueil');
				}
				else{
					$_SESSION['message'] = 'Erreur de connexion, mauvais mot de passe ou pseudo.';
					$this->load->view('message');
				}
			}

		}
		
		public function deconnexion()
		{
			session_start();
			$this->load->helper(array('form','url'));
			$_SESSION['connect'] = "";
			$_SESSION['idJoueur'] = "";
			$_SESSION['idPartie'] = "";
			$this->load->view("accueil");
		}
	
	}
?>