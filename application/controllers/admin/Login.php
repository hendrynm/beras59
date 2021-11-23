<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function index()
	{
		if($this->input->post()){
			if($this->login_model->masuk()) redirect(site_url('admin/overview'));
		}

		$this->load->view("admin/user_login");
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(site_url(''));
	}
}
