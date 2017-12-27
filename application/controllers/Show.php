<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Show extends CI_Controller {

	function __construct(){
		parent::__construct();
		// if (!$this->ion_auth->logged_in()){
		// 	redirect('auth/login', 'refresh');
		// }
	}

	public function index()
	{
		$this->load->view('table_imigran');
	}
}
