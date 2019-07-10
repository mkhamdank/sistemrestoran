<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class calculator2 extends CI_Controller {

	public function hasil_hitung(){
    $angka1 = $this->input->post('angka1');
    $angka2 = $this->input->post('angka2');
    $pilih_hitung = $this->input->post('pilih_hitung');
    $hasil_hitung = 0;

    if($pilih_hitung == "+")
    {
      $hasil_hitung = $angka1 + $angka2;
    }
    elseif ($pilih_hitung == "-") {
      $hasil_hitung = $angka1 - $angka2;
    }
    elseif ($pilih_hitung == "*") {
      $hasil_hitung = $angka1 * $angka2;
    }
    elseif ($pilih_hitung == "/") {
      $hasil_hitung = $angka1 / $angka2;
    }

    $data['angka1'] = $angka1;
    $data['angka2'] = $angka2;
    $data['pilih_hitung'] = $pilih_hitung;
    $data['hasil_hitung'] = $hasil_hitung;

    $this->load->view('hasil_hitung', $data);
  }

  public function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
  }
  public function index()
  {
    $this->load->view('form_hitung');
  }
  
}