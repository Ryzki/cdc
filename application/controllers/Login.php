<?php

class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('company_model');
		$this->load->library('session');
	}

	public function perusahaan()
	{
		if (!empty($_REQUEST)) {
			$this->company_model->sign_in();
		} else {
			$this->load->view('login/perusahaan');
		}
	}


	public function daftar_baru()
	{
		$this->load->view('login/daftar_baru');
	}

	public function sign_up()
	{
		$this->company_model->sign_up();
		$this->session->set_flashdata('message', '<div class="alert alert-info text-center" role="alert">Success Create Account!, We Will Response Your Submission</div>');
		redirect(base_url('login/perusahaan'));
	}
}
