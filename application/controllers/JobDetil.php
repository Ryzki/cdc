<?php

class JobDetil extends CI_Controller {
	public function index()
	{
		$this->load->view('landing-page/header');
		$this->load->view('landing-page/landing_page');
		$this->load->view('landing-page/footer');
	}
}

?>