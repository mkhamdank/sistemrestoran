<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pinjem_kunci extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ruangan_model');
		$this->load->helper('url');
	}

	public function index()
	{
		$pinjam['array']=$this->ruangan_model->query_array();

		$this->load->view('view_kunci', $pinjam);
	}

}

/* End of file pinjem_kunci.php */
/* Location: ./application/controllers/pinjem_kunci.php */