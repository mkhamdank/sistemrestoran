<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	function login($username, $password){
		$this->db->select('id,username,password,nama');
		$this->db->from('login');
		$this->db->where('username', $username);
		$this->db->where('password', MD5($password));
		$query = $this->db->get();
		if($query->num_rows()==1){
			return $query->result();
		}
		else{
			return false;
		}
	}

	public function getNama($username)
	{
		$this->db->where('username', $username);
		$query = $this->db->get('login');
		return $query->result();
	}

}

/* End of file login_model.php */
/* Location: ./application/models/login_model.php */