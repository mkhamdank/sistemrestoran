<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url', 'form');
		$this->load->library('form_validation');
		$this->load->model('login_model');
		$this->load->library('encryption');
	}

	public function index()
	{
		$this->form_validation->set_rules('login_username', 'Username', 'trim|required');
		$this->form_validation->set_rules('login_password', 'Password', 'trim|required|callback_tombollogin');

		if ($this->form_validation->run()==FALSE)
		{
			$this->load->view('form_login');
		}
		else
		{
			redirect('restoran_controller','refresh');
		}
	}

	public function tombollogin($password)
	{
		$username=$this->input->post('login_username');
		$test = $this->encryption->encrypt($password);
		$result = $this->login_model->login($username, $password);

		// $password=$this->input->post('login_password');
		if ($result=='wrong_user')
		{
			$this->form_validation->set_message('tombollogin', 'Wrong Username!');
			echo "control:wrong user";
			return false;
		}
		elseif($result=='wrong_password')
		{
			$this->form_validation->set_message('tombollogin', 'Wrong Password!');
			echo "control:wrong password";
			return false;
		}
		elseif($result)
		{
			foreach ($result as $row) {
				$session_variables=array('id' =>$row->id, 'username' =>$row->username, 'password' =>$row->password, 'nama' =>$row->nama);
			}
			$this->session->set_userdata('logged_in', $session_variables);
			redirect('restoran_controller','refresh');
			return true;
		}
		else
		{
			echo "whut";
		}
	}

	public function logout(){
      $this->session->unset_userdata('logged_in');
      $this->session->sess_destroy();
      redirect('restoran_controller/awal','refresh');
    }

}



/* End of file login_controller.php */
/* Location: ./application/controllers/login_controller.php */