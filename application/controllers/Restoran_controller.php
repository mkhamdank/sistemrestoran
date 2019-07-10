<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Restoran_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('datatables');
	}
	public function index()
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$username = $session_data['username'];
			$password = $session_data['password'];
		}
		else{
			redirect('login_controller','refresh');
		}
		$session_data = $this->session->userdata('logged_in');
			$username = $session_data['username'];
			$password = $session_data['password'];
		$this->load->model('login_model');
		$user = $this->login_model->getNama($username);
		foreach ($user as $key) {
			$nama = $key->nama;
		}
		$this->load->model('restoran_model');
		$restoran['array_makan'] = $this->restoran_model->get_makanan();
		$restoran['array_minum'] = $this->restoran_model->get_minuman();
		$restoran['username'] = $username;
		$restoran['nama'] = $nama;
		$this->load->view('view_restoran', $restoran);
	}

	public function minuman()
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$username = $session_data['username'];
			$password = $session_data['password'];
		}
		else{
			redirect('login_controller','refresh');
		}
			$session_data = $this->session->userdata('logged_in');
			$username = $session_data['username'];
			$password = $session_data['password'];
		$this->load->model('login_model');
		$user = $this->login_model->getNama($username);
		foreach ($user as $key) {
			$nama = $key->nama;
		}
		$this->load->model('restoran_model');
		$restoran['array_minum'] = $this->restoran_model->get_minuman();
		$restoran['username'] = $username;
		$restoran['nama'] = $nama;
		$this->load->view('view_minuman', $restoran);
	}
	public function awal()
	{
		$this->load->model('restoran_model');
		$restoran['array_makan'] = $this->restoran_model->get_makanan();
		$restoran['array_minum'] = $this->restoran_model->get_minuman();
		$this->load->view('awal', $restoran);
	}
	public function create_makanan()
	{

		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$username = $session_data['username'];
			$password = $session_data['password'];
		}
		else{
			redirect('login_controller','refresh');
		}
			$session_data = $this->session->userdata('logged_in');
			$username = $session_data['username'];
			$password = $session_data['password'];
		$this->load->model('login_model');
		$user = $this->login_model->getNama($username);
		foreach ($user as $key) {
			$nama = $key->nama;
		}

		$this->load->helper('url','form');
		$this->load->library('form_validation');
		// $this->form_validation->set_rules('nama_makanan', 'Nama Makanan', 'trim|required');
		$this->form_validation->set_rules('jenis_makanan', 'Jenis Makanan', 'trim|required');
		$this->form_validation->set_rules('nama_makanan', 'Nama Makanan', 'trim|required');
		$this->form_validation->set_rules('harga_makanan', 'Harga Makanan', 'trim|required');
		$this->form_validation->set_rules('stok_makanan', 'Stok Makanan', 'trim|required');

		$this->load->model('restoran_model');
		$data['makanan'] = $this->restoran_model->get_makanan();
		$data['nama'] = $nama;
		$this->load->model('restoran_model');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('tambah_makanan_view', $data);
		} else {
			$config['upload_path'] = './assets/uploads/';
            $config['allowed_types'] = 'jpg|png';
            $config['max_size'] = 100000;
            $config['max_width'] = 100000;
            $config['max_height'] = 100000;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('userfile')) {
            	$data['minuman'] = $this->restoran_model->get_makanan();
				$data['nama'] = $nama;
                $data['error'] = $this->upload->display_errors();
                $this->load->view('tambah_makanan_view', $data);
            }
            else {
            	$this->restoran_model->tambah_makanan();
				$this->load->view('tambah_makanan_sukses',$data);
            }
			
		}
	}

	public function create_minuman()
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$username = $session_data['username'];
			$password = $session_data['password'];
		}
		else{
			redirect('login_controller','refresh');
		}
			$session_data = $this->session->userdata('logged_in');
			$username = $session_data['username'];
			$password = $session_data['password'];
		$this->load->model('login_model');
		$user = $this->login_model->getNama($username);
		foreach ($user as $key) {
			$nama = $key->nama;
		}

		$this->load->helper('url','form');
		$this->load->library('form_validation');
		// $this->form_validation->set_rules('nama_minuman', 'Nama Minuman', 'trim|required');
		$this->form_validation->set_rules('nama_minuman', 'Nama Minuman', 'trim|required');
		$this->form_validation->set_rules('harga_minuman', 'Harga Minuman', 'trim|required');
		$this->form_validation->set_rules('stok_minuman', 'Stok Minuman', 'trim|required');
		$this->load->model('restoran_model');
		$data['minuman'] = $this->restoran_model->get_minuman();
		$data['nama'] = $nama;
		$this->load->model('restoran_model');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('tambah_minuman_view', $data);
		} else {
			$config['upload_path'] = './assets/uploads/';
            $config['allowed_types'] = 'jpg|png';
            $config['max_size'] = 100000;
            $config['max_width'] = 100000;
            $config['max_height'] = 100000;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('userfile')) {
            	$data['minuman'] = $this->restoran_model->get_minuman();
				$data['nama'] = $nama;
                $data['error'] = $this->upload->display_errors();
                $this->load->view('tambah_minuman_view', $data);
            }
            else {
            	$this->restoran_model->tambah_minuman();
				$this->load->view('tambah_minuman_sukses',$data);
            }
			
		}
	}

	public function edit_makanan($id_makanan,$gambar)
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$username = $session_data['username'];
			$password = $session_data['password'];
		}
		else{
			redirect('login_controller','refresh');
		}
			$session_data = $this->session->userdata('logged_in');
			$username = $session_data['username'];
			$password = $session_data['password'];
		$this->load->model('login_model');
		$user = $this->login_model->getNama($username);
		foreach ($user as $key) {
			$nama = $key->nama;
		}

		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('jenis_makanan', 'Jenis Makanan', 'trim|required');
		$this->form_validation->set_rules('nama_makanan', 'Nama Makanan', 'trim|required');
		$this->form_validation->set_rules('harga_makanan', 'Harga Makanan', 'trim|required');
		$this->form_validation->set_rules('stok_makanan', 'Stok Makanan', 'trim|required');

		$this->load->model('restoran_model');
		$object['makanan'] = $this->restoran_model->get_makananById($id_makanan);
		$object['nama'] = $nama;
		if ($this->form_validation->run()==FALSE) {
			$this->load->view('edit_makanan_view', $object);
		}
		else{
			$config['upload_path'] = './assets/uploads/';
			$config['allowed_types'] = 'jpg|png';
			$config['max_size'] = 250;
			$config['max_width'] = 1024;
			$config['max_height'] = 768;
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('userfile')){
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('edit_makanan_view', $error);
			}
			else{
				$image_data = $this->upload->data();
				$configer = array (
					'image_library' => 'gd2',
					'source_image' => $image_data['full_path'],
					'maintain_ratio' => TRUE,
					'width' => 1024,
					'height' => 768,
					);

				$this->load->library('image_lib', $config);
				$this->image_lib->clear();
				$this->image_lib->initialize($configer);
				$this->image_lib->resize();

				$path_to_file = './assets/uploads/'.$gambar;
				unlink($path_to_file);

			$this->restoran_model->update_makanan($id_makanan);
			$this->load->view('edit_makanan_sukses',$object);
			}
			
		}
	}

	public function edit_minuman($id_minuman,$gambar)
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$username = $session_data['username'];
			$password = $session_data['password'];
		}
		else{
			redirect('login_controller','refresh');
		}
			$session_data = $this->session->userdata('logged_in');
			$username = $session_data['username'];
			$password = $session_data['password'];
		$this->load->model('login_model');
		$user = $this->login_model->getNama($username);
		foreach ($user as $key) {
			$nama = $key->nama;
		}

		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama_minuman', 'Nama Minuman', 'trim|required');
		$this->form_validation->set_rules('harga_minuman', 'Harga Minuman', 'trim|required');
		$this->form_validation->set_rules('stok_minuman', 'Stok Minuman', 'trim|required');

		$this->load->model('restoran_model');
		$object['minuman'] = $this->restoran_model->get_minumanById($id_minuman);
		$object['nama'] = $nama;
		if ($this->form_validation->run()==FALSE) {
			$this->load->view('edit_minuman_view', $object);
		}
		else{
			$config['upload_path'] = './assets/uploads/';
			$config['allowed_types'] = 'jpg|png';
			$config['max_size'] = 250;
			$config['max_width'] = 1024;
			$config['max_height'] = 768;
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('userfile')){
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('edit_minuman_view', $error);
			}
			else{
				$image_data = $this->upload->data();
				$configer = array (
					'image_library' => 'gd2',
					'source_image' => $image_data['full_path'],
					'maintain_ratio' => TRUE,
					'width' => 1024,
					'height' => 768,
					);

				$this->load->library('image_lib', $config);
				$this->image_lib->clear();
				$this->image_lib->initialize($configer);
				$this->image_lib->resize();

				$path_to_file = './assets/uploads/'.$gambar;
				unlink($path_to_file);
			$this->restoran_model->update_minuman($id_minuman);
			$this->load->view('edit_minuman_sukses',$object);
			}
		}
	}

	public function delete_makanan($id_makanan,$gambar)
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$username = $session_data['username'];
			$password = $session_data['password'];
		}
		else{
			redirect('login_controller','refresh');
		}
			$session_data = $this->session->userdata('logged_in');
			$username = $session_data['username'];
			$password = $session_data['password'];
		$this->load->model('login_model');
		$user = $this->login_model->getNama($username);
		foreach ($user as $key) {
			$nama = $key->nama;
		}

		$this->load->helper('url','form');
		$this->load->library('form_validation');
		
		$this->load->model('restoran_model');
		$data['makanan'] = $this->restoran_model->get_makananById($id_makanan);
		$data['nama'] = $nama;
		// $this->form_validation->set_rules('nama_makanan', 'Nama Makanan', 'trim|required');
		$this->form_validation->set_rules('jenis_makanan', 'Jenis Makanan', 'trim|required');
		$this->form_validation->set_rules('nama_makanan', 'Nama Makanan', 'trim|required');
		$this->form_validation->set_rules('harga_makanan', 'Harga Makanan', 'trim|required');
		$this->form_validation->set_rules('stok_makanan', 'Stok Makanan', 'trim|required');
		if ($this->form_validation->run()==FALSE) {
			$this->load->view('hapus_makanan_view',$data);
		}else{
			// $path_to_file = './assets/uploads/'.$gambar;
			// unlink($path_to_file);
			$this->restoran_model->delete_makananById($id_makanan);
			$this->load->view('hapus_makanan_sukses',$data);
		}
	}

	public function delete_minuman($id_minuman,$gambar)
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$username = $session_data['username'];
			$password = $session_data['password'];
		}
		else{
			redirect('login_controller','refresh');
		}
			$session_data = $this->session->userdata('logged_in');
			$username = $session_data['username'];
			$password = $session_data['password'];
		$this->load->model('login_model');
		$user = $this->login_model->getNama($username);
		foreach ($user as $key) {
			$nama = $key->nama;
		}

		$this->load->helper('url','form');
		$this->load->library('form_validation');
		
		$this->load->model('restoran_model');
		$data['minuman'] = $this->restoran_model->get_minumanById($id_minuman);
		$data['nama'] = $nama;
		// $this->form_validation->set_rules('nama_minuman', 'Nama Minuman', 'trim|required');
		$this->form_validation->set_rules('nama_minuman', 'Nama Minuman', 'trim|required');
		$this->form_validation->set_rules('harga_minuman', 'Harga Minuman', 'trim|required');
		$this->form_validation->set_rules('stok_minuman', 'Stok Minuman', 'trim|required');
		if ($this->form_validation->run()==FALSE) {
			$this->load->view('hapus_minuman_view',$data);
		}else{
			// $path_to_file = './assets/uploads/'.$gambar;
			// unlink($path_to_file);
			$this->restoran_model->delete_minumanById($id_minuman);
			$this->load->view('hapus_minuman_sukses',$data);
		}
	}

	public function menu()
	{
		$this->load->model('restoran_model');
		$restoran['array_makan'] = $this->restoran_model->get_makanan();
		$restoran['array_minum'] = $this->restoran_model->get_minuman();
		$this->load->view('view_menu', $restoran);
	}

	public function pemesanan()
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		
		$this->load->model('restoran_model');
		$data['makanan'] = $this->restoran_model->get_makanan();
		$data['minuman'] = $this->restoran_model->get_minuman();
		
		$this->form_validation->set_rules('nama_pemesan', 'Nama Minuman', 'trim|required');
		if ($this->form_validation->run()==FALSE) {
			$this->load->view('view_pemesanan',$data);
		}else{
			$session_variables = array('data_makanan' => $this->input->post('nama_makanan'),
			'data_minuman' => $this->input->post('nama_minuman') );
			$this->session->set_userdata('pesan', $session_variables);
			$data['data_makanan'] = $this->input->post('nama_makanan');
			$data['data_minuman'] = $this->input->post('nama_minuman');
			$data['nama_pemesan'] = $this->input->post('nama_pemesan');
			$data['nomor_meja'] = $this->input->post('no_meja');
			$data['tanggal'] = $this->input->post('tanggal');
			$this->load->view('view_pemesanan_jumlah',$data);
		}
	}

	public function pesan()
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		
		$this->load->model('restoran_model');
		$data['makanan'] = $this->restoran_model->get_makanan();
		$data['minuman'] = $this->restoran_model->get_minuman();
		$session_data = $this->session->userdata('pesan');
		$makanan = $session_data['data_makanan'];
		$minuman = $session_data['data_minuman'];
		$jmlmak = $this->input->post('jumlahmak');
		$jmlmin = $this->input->post('jumlahmin');
		$this->form_validation->set_rules('nama_pemesan', 'Nama Minuman', 'trim|required');
		if ($this->form_validation->run()==FALSE) {
			$this->load->view('view_pemesanan_jumlah',$data);
		}else{
			$mak = count($makanan);
			for($i=0;$i<$mak;$i++)
			{
				$hrg = $this->restoran_model->get_makananByNama($makanan[$i]);
				foreach ($hrg as $key) {
					$hargamak = $key->harga_makanan;
					$stok = $key->stok_makanan;
				}
				$harga = $jmlmak[$i] * $hargamak;
				$jmlnew = $stok - $jmlmak[$i];
				if ($jmlmak[$i] <= $stok || $jmlmak[$i] == $stok) {
					$this->restoran_model->updateStokMakanan($makanan[$i],$jmlnew);
					$this->restoran_model->insertPemesananMakanan($makanan[$i],$jmlmak[$i],$harga);
				}
				elseif ($stok == 0 || $jmlmak[$i] > $stok) {
					$this->load->view('error_pesan', $data);
				}
			}
			$min = count($minuman);
			for($j=0;$j<$min;$j++)
			{	
				$hrg = $this->restoran_model->get_minumanByNama($minuman[$j]);
				foreach ($hrg as $key) {
					$hargamin = $key->harga_minuman;
					$stokmin = $key->stok_minuman;
					$id_minuman = $key->id_minuman;
				}
				$hargaminuman = $jmlmin[$j] * $hargamin;
				$jmlnewmin = $stokmin - $jmlmin[$j];
				if ($jmlmin[$i] <= $stokmin || $jmlmin[$i] == $stokmin) {
					$this->restoran_model->updateStokMinuman($id_minuman,$jmlnewmin);
					$this->restoran_model->insertPemesananMinuman($minuman[$j],$jmlmin[$j],$hargaminuman);
				}
				elseif ($stokmin == 0 || $jmlmin[$i] > $stokmin) {
					$this->load->view('error_pesan', $data);
				}
			}
			$this->load->view('view_pemesanan_skss',$data);
		}
	}

	public function pesananMakanan()
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$username = $session_data['username'];
			$password = $session_data['password'];
		}
		else{
			redirect('login_controller','refresh');
		}
			$session_data = $this->session->userdata('logged_in');
			$username = $session_data['username'];
			$password = $session_data['password'];
		$this->load->model('login_model');
		$user = $this->login_model->getNama($username);
		foreach ($user as $key) {
			$nama = $key->nama;
		}
		$this->load->model('restoran_model');
		$restoran['array_makan'] = $this->restoran_model->getPesananMakanan();
		$restoran['array_minum'] = $this->restoran_model->getPesananMinuman();
		$restoran['username'] = $username;
		$restoran['nama'] = $nama;
		$this->load->view('view_pesanan_makanan', $restoran);
	}

	public function pesananMinuman()
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$username = $session_data['username'];
			$password = $session_data['password'];
		}
		else{
			redirect('login_controller','refresh');
		}
			$session_data = $this->session->userdata('logged_in');
			$username = $session_data['username'];
			$password = $session_data['password'];
		$this->load->model('login_model');
		$user = $this->login_model->getNama($username);
		foreach ($user as $key) {
			$nama = $key->nama;
		}
		$this->load->model('restoran_model');
		$restoran['array_makan'] = $this->restoran_model->getPesananMakanan();
		$restoran['array_minum'] = $this->restoran_model->getPesananMinuman();
		$restoran['username'] = $username;
		$restoran['nama'] = $nama;
		$this->load->view('view_pesanan_minuman', $restoran);
	}

	public function pembayaranMakanan($id_pemesanan_mak)
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$username = $session_data['username'];
			$password = $session_data['password'];
		}
		else{
			redirect('login_controller','refresh');
		}
			$session_data = $this->session->userdata('logged_in');
			$username = $session_data['username'];
			$password = $session_data['password'];
		$this->load->model('login_model');
		$user = $this->login_model->getNama($username);
		foreach ($user as $key) {
			$nama = $key->nama;
		}
		$this->load->model('restoran_model');
		$restoran['array_makan'] = $this->restoran_model->getPesananMakanan();
		$restoran['array_minum'] = $this->restoran_model->getPesananMinuman();
		$restoran['username'] = $username;
		$restoran['nama'] = $nama;
		$this->restoran_model->updateStatusMakanan($id_pemesanan_mak);
		redirect('restoran_controller/pesananMakanan','refresh');
	}

	public function pembayaranMinuman($id_pemesanan_min)
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$username = $session_data['username'];
			$password = $session_data['password'];
		}
		else{
			redirect('login_controller','refresh');
		}
			$session_data = $this->session->userdata('logged_in');
			$username = $session_data['username'];
			$password = $session_data['password'];
		$this->load->model('login_model');
		$user = $this->login_model->getNama($username);
		foreach ($user as $key) {
			$nama = $key->nama;
		}
		$this->load->model('restoran_model');
		$restoran['array_makan'] = $this->restoran_model->getPesananMakanan();
		$restoran['array_minum'] = $this->restoran_model->getPesananMinuman();
		$restoran['username'] = $username;
		$restoran['nama'] = $nama;
		$this->restoran_model->updateStatusMinuman($id_pemesanan_min);
		redirect('restoran_controller/pesananMinuman','refresh');
	}

	public function historyPesanan()
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$username = $session_data['username'];
			$password = $session_data['password'];
		}
		else{
			redirect('login_controller','refresh');
		}
			$session_data = $this->session->userdata('logged_in');
			$username = $session_data['username'];
			$password = $session_data['password'];
		$this->load->model('login_model');
		$user = $this->login_model->getNama($username);
		foreach ($user as $key) {
			$nama = $key->nama;
		}
		$this->load->model('restoran_model');
		$restoran['array_makan'] = $this->restoran_model->historyPesananMakanan();
		$restoran['array_minum'] = $this->restoran_model->historyPesananMinuman();
		$restoran['username'] = $username;
		$restoran['nama'] = $nama;
		$this->load->view('history_pesanan_view', $restoran);
	}
}

/* End of file Restoran_controller.php */
/* Location: ./application/controllers/Restoran_controller.php */