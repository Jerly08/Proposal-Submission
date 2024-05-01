<?php
/**
 * 
 */
class Auth extends CI_Controller {
	public function index()
	{
		$data['judul']='Login';
		$this->load->view('tamplate/header');
		$this->load->view('auth/login');
		$this->load->view('tamplate/footer');

	}
	public function forgot_password()
	{
		$this->form_validation->set_rules('inputEmail', 'Email', 'trim|required|valid_email');
		if ($this->form_validation->run() == false) {
			$data['title_page'] = 'Forgot Password';
			$this->load->view('templates/auth_header', $data);
			$this->load->view('auth/forgot_password');
			$this->load->view('templates/auth_footer');
		} else {
			$email = $this->input->post('inputEmail');
			$user = $this->db->get_where('user', ['email' => $email, 'is_active' => 1])->row_array();
			if ($user) {
				$token = base64_encode(random_bytes(32));
				$user_token = [
					'email' => $email,
					'token' => $token,
					'date_created' => time()
				];
				$this->_sendEmail($token, 'forgot');
				$this->db->insert('user_token', $user_token);
				$this->Flasher_model->flashdata('Please open your email to reset your password', 'Success', 'success');
				redirect('auth');
			} else {
				$this->Flasher_model->flashdata('Email is not registered or activated', 'Failed', 'danger');
				redirect('auth/forgot_password');
			}
		}
	}

	private function _sendEmail($token, $type)
	{
		$email = $this->input->post('inputEmail');
		$confing = [
			'protocol'  => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_user' => 'iseplutpi.web@gmail.com',
			'smtp_pass' => 'Suksesamin123',
			'smtp_port' => 465,
			'mailtype'  => 'html',
			'charset'   => 'utf-8',
			'newline'   => "\r\n"

		];

		$this->load->library('email', $confing);
		$this->email->initialize($confing);

		$this->email->from('iseplutpi.web@gmail.com', 'Isep Lutpi Nur');
		$this->email->to($email);

		if ($type == 'verify') {
			$this->email->subject('Account verification');
			$this->email->message('Click this link to verify you account: <a href="' . base_url() . 'auth/verify?email=' . $email . '&token=' . urlencode($token) . '">Active</a>');
		} else if ($type == 'forgot') {
			$this->email->subject('Reset Password');
			$this->email->message('Click this link to reset your password: <a href="' . base_url() . 'auth/resetpassword?email=' . $email . '&token=' . urlencode($token) . '">Reset Password</a>');
		}

		if ($this->email->send()) {
			return true;
		} else {
			echo $this->email->print_debugger();
			die;
		}
	}

}