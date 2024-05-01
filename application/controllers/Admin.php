<?php


class User extends CI_Controller {
	public function index()
	{
		$data['judul']='Dasboard HAKI';
		$this->load->view('tamplate/header', $data);
		$this->load->view('tamplate/sidebar');
		$this->load->view('admin/index');
		$this->load->view('tamplate/footer');
	}

}