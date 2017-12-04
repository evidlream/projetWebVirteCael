<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accueil extends CI_Controller {

	public function index()
	{
		$this->load->database();
		
		$this->load->helper('url');
		$this->load->model('joueur');
		$this->joueur->connexion("test","test");
		$this->load->view('accueil');

	}
}