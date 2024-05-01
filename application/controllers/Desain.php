<?php
/**
 * 
 */
class Desain extends CI_Controller {
	public function index()
	{
		$this->load->model('Desain_model');
		$this->load->library('form_validation');
		
		$data['judul']='Tabel Pengusulan';
		$data['desain']= $this->Desain_model->getAllDesain('desain');

		$this->load->view('tamplate/header', $data);
		$this->load->view('tamplate/sidebar');
		$this->load->view('desain/user',);
		$this->load->view('tamplate/footer');
	}
	
}