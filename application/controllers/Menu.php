<?php

class Menu extends CI_Controller
{
	
	public function asul()
	{
		$data['judul']='Pengajuan HAKI';
		$this->load->view('tamplate/header',);
		$this->load->view('tamplate/sidebar');
		$this->load->view('menu/usul');
		$this->load->view('tamplate/footer');
	}
}