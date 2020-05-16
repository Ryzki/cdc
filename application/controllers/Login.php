<?php

class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Company_model');
		$this->load->library('session');
		$this->load->helper(array('form', 'url'));
	}

	public function Perusahaan()
	{
		if (!empty($_REQUEST)) {
			$this->Company_model->sign_in();
		} else {
			$this->load->view('login/perusahaan');
		}
	}


	public function daftar_baru()
	{
		$this->load->view('login/daftar_baru');
	}

	public function download_template_mou()
	{
		force_download('assets/template/draft MOU.docx', NULL);
	}

	public function mou()
	{
		$this->load->view('login/mou');
	}

	public function upload_mou()
	{
		$config['upload_path']          = './assets/upload/';
		$config['allowed_types']        = 'docx';
		$config['file_name']        	= $this->session->userdata('kode');
		$config['max_size']             = 2000;

		$this->load->library('upload', $config);
		if ($this->upload->do_upload('upload_mou')) {
			echo $this->upload->data('file_name');
			echo "<br>SUSKES";
		} else {
			echo "GAGAL";
		}
	}

	public function sign_up()
	{
		$this->company_model->sign_up();
		$this->session->set_flashdata('message', '<div class="alert alert-info text-center" role="alert">Success Create Account!, We Will Response Your Submission</div>');
		redirect(base_url('login/perusahaan'));
	}
}
