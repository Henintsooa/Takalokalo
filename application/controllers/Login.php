<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	public function index()
	{
		$mail = $this->input->post("mail");
		$password = $this->input->post("password");
		$this->load->model('MLogin');
        if($this->MLogin->checkLogin($mail,$password))
		{
			$this->session->set_userdata('mail', $mail);
			redirect('log/index');
		}else{
			redirect('welcome/index');
		}

	}
	
}
