<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accueil extends CI_Controller {

	public function index()
	{
		session_start();
		$this->load->helper('url');
		$this->load->model('joueur');
		if(!empty($_SESSION['idPartie'])){
			$this->load->view('jeux');
		}
		else $this->load->view('accueil');
		
	}
}