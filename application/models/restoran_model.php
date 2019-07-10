<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Restoran_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function get_makanan()
	{
		$query = $this->db->get('makanan');
		return $query->result_array();
	}

	public function get_minuman()
	{
		$query = $this->db->get('minuman');
		return $query->result_array();
	}

	public function tambah_makanan()
	{
		$object = array('id_makanan' => $this->input->post('id_makanan'), 'jenis_makanan' =>$this->input->post('jenis_makanan') ,
		 'nama_makanan' =>$this->input->post('nama_makanan') ,
		 'harga_makanan' =>$this->input->post('harga_makanan') ,
		 'stok_makanan' =>$this->input->post('stok_makanan'),
		 'gambar' => $this->upload->data('file_name'));
		$this->db->insert('makanan', $object);
	}

	public function tambah_minuman()
	{
		$object = array('id_minuman' => $this->input->post('id_minuman'),'nama_minuman' =>$this->input->post('nama_minuman') ,
		 'harga_minuman' =>$this->input->post('harga_minuman') ,
		 'stok_minuman' =>$this->input->post('stok_minuman'),
		 'gmbr' => $this->upload->data('file_name'));
		$this->db->insert('minuman', $object);
	}

	public function update_makanan($id_makanan)
	{
		$object = array('jenis_makanan' =>$this->input->post('jenis_makanan') ,
		 'nama_makanan' =>$this->input->post('nama_makanan') ,
		 'harga_makanan' =>$this->input->post('harga_makanan') ,
		 'stok_makanan' =>$this->input->post('stok_makanan'),
		 'gambar' => $this->upload->data('file_name'));
		$this->db->where('id_makanan', $id_makanan);
		$this->db->update('makanan', $object);
	}

	// public function get_makanan()
	// {
	// 	$query = $this->db->get('makanan');
	// 	return $query->result();
	// }

	public function get_makananById($id_makanan)
	{
		$this->db->where('id_makanan', $id_makanan);
		$query = $this->db->get('makanan',1);
		// return $query->result_array();
		return $query;
	}

	public function get_minumanById($id_minuman)
	{
		$this->db->where('id_minuman', $id_minuman);
		$query = $this->db->get('minuman',1);
		// return $query->result_array();
		return $query;
	}

	public function get_makananByNama($nama_makanan)
	{
		$this->db->where('nama_makanan', $nama_makanan);
		$query = $this->db->get('makanan',1);
		// return $query->result_array();
		return $query->result();
	}

	public function get_minumanByNama($nama_minuman)
	{
		$this->db->where('nama_minuman', $nama_minuman);
		$query = $this->db->get('minuman',1);
		// return $query->result_array();
		return $query->result();
	}

	public function update_minuman($id_minuman)
	{
		$object = array('nama_minuman' =>$this->input->post('nama_minuman') ,
		 'harga_minuman' =>$this->input->post('harga_minuman') ,
		 'stok_minuman' =>$this->input->post('stok_minuman'),
		 'gmbr' => $this->upload->data('file_name'));
		$this->db->where('id_minuman', $id_minuman);
		$this->db->update('minuman', $object);	
	}

	public function delete_makananById($id_makanan)
	{
		$this->db->where('id_makanan', $id_makanan);
		$this->db->delete('makanan');
	}

	public function delete_minumanById($id_minuman)
	{
		$this->db->where('id_minuman', $id_minuman);
		$this->db->delete('minuman');
	}

	public function insertPemesananMakanan($makanan,$jumlahmak,$harga)
	{
		$object = array('no_meja' => $this->input->post('no_meja'),
		'nama_pemesan' => $this->input->post('nama_pemesan'),
		'tanggal' => $this->input->post('tanggal'),
		'pesanan_mkn' => $makanan,
		'jml_mkn' => $jumlahmak,
		'harga' => $harga,
		'status' => "Belum Dibayar" );
		$this->db->insert('pemesanan_makanan', $object);
	}

	public function insertPemesananMinuman($minuman,$jumlahmin,$harga)
	{
		$object = array('no_meja' => $this->input->post('no_meja'),
		'nama_pemesan' => $this->input->post('nama_pemesan'),
		'tanggal' => $this->input->post('tanggal'),
		'pesanan_mnm' => $minuman,
		'jml_mnm' => $jumlahmin,
		'harga' => $harga,
		'status' => "Belum Dibayar" );
		$this->db->insert('pemesanan_minuman', $object);
	}

	public function updateStokMakanan($nama_makanan,$stok_makanan)
	{
		$object = array('stok_makanan' => $stok_makanan );
		$this->db->where('nama_makanan', $nama_makanan);
		$this->db->update('makanan', $object);
	}
	public function updateStokMinuman($id_minuman,$stok_minuman)
	{
		$object = array('stok_minuman' => $stok_minuman );
		$this->db->where('id_minuman', $id_minuman);
		$this->db->update('minuman', $object);
	}

	public function getPesananMakanan()
	{
		$this->db->where('status', "Belum Dibayar");
		$query = $this->db->get('pemesanan_makanan');
		return $query->result();
	}

	public function getPesananMinuman()
	{
		$this->db->where('status', "Belum Dibayar");
		$query = $this->db->get('pemesanan_minuman');
		return $query->result();
	}

	public function updateStatusMakanan($id_pemesanan)
	{
		$object = array('status' => "Sudah Dibayar" );
		$this->db->where('id_pemesanan_mak', $id_pemesanan);
		$this->db->update('pemesanan_makanan', $object);
	}

	public function updateStatusMinuman($id_pemesanan)
	{
		$object = array('status' => "Sudah Dibayar" );
		$this->db->where('id_pemesanan_min', $id_pemesanan);
		$this->db->update('pemesanan_minuman', $object);
	}

	public function historyPesananMakanan()
	{
		$this->db->where('status', "Sudah Dibayar");
		$query = $this->db->get('pemesanan_makanan');
		return $query->result();
	}
	
	public function historyPesananMinuman()
	{
		$this->db->where('status', "Sudah Dibayar");
		$query = $this->db->get('pemesanan_minuman');
		return $query->result();
	}
}

/* End of file restoran_model.php */
/* Location: ./application/models/restoran_model.php */