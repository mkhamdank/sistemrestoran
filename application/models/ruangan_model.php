<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ruangan_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function query_array()
	{
		$query =$this->db->query('SELECT * FROM kunci');
		return $query ->result_array();
	}

	public function query_object()
	{
		$query =$this->db->query('SELECT * FROM kunci');
		return $query ->result();
	}

}

/* End of file ruangan_model.php */
/* Location: ./application/models/ruangan_model.php */