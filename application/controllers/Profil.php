<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	public function index()
	{
		$data['title'] = "Halaman Profil";
		$data['judul'] = "Biodata Saya";
		$data['isi'] = "Nama Saya Adie Iman Nurzaman, saya tinggal di Desa Anggrawati, Maja, Majalengka";
		$this->load->view('profil', $data);
	}

	public function simpan()
	{

	}

	public function edit()
	{

	}

}

/* End of file Profil.php */
/* Location: ./application/controllers/Profil.php */