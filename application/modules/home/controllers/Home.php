<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index($nama = '')
	{	
		$data['judul'] = 'Halaman Home';
		// $data['nama'] = $nama;
		$this->load->view('templetes/header', $data);
		$this->load->view('home_view/index', $data);
		$this->load->view('templetes/footer');
	}
}