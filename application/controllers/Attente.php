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
			$this->load->model('Model_Partie');
			$partie = $this->Model_Partie->existePartie($_SESSION['idJoueur']);
			if($temp < $nb && $partie == 0)
				echo $temp."/".$nb;
			else{
				if($partie > 0){
					$_SESSION['idPartie'] = $partie;
					echo '<script type="text/javascript">
					window.location.href = "'.base_url().'";
					</script>';
				}
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