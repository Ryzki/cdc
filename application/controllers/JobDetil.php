<?php

class JobDetil extends CI_Controller {
	public function index()
	{
		$this->load->view('tracer/header');
		$this->load->view('landing-page/JobDetil');
		$this->load->view('landing-page/footer');
	}
	public function all()
	{
		$this->load->view('tracer/header');
		$this->load->view('landing-page/jobAll');
		$this->load->view('landing-page/footer');
	}
}

?>