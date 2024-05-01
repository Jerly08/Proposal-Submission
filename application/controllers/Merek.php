<?php
/**
 * 
 */
class Merek extends CI_Controller {
	public function index()
	{
		$this->load->model('Merek_model');
		$this->load->library('form_validation');
		
		$data['judul']='Tabel Pengusulan';
		$data['merek']= $this->Merek_model->getAllMerek('merek');

		$this->load->view('tamplate/header', $data);
		$this->load->view('tamplate/sidebar');
		$this->load->view('Merek/user', $data);
		$this->load->view('tamplate/footer');
	}
	
}