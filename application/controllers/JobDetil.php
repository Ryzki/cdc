<?php

class JobDetil extends CI_Controller {
	public function index()
	{
		// $this->load->view('tracer/header');
		$data['title'] = "Job Detail | Universitas Kanjuruhan Malang";
		$this->load->view('landing-page/header_blog', $data);
		$this->load->view('landing-page/JobDetil');
		$this->load->view('landing-page/footer');
	}
	public function all()
	{
		// $this->load->view('tracer/header');
		$data['title'] = "Job | Universitas Kanjuruhan Malang";
		$this->load->view('landing-page/header_blog', $data);
		$this->load->view('landing-page/jobAll');
		$this->load->view('landing-page/footer');
	}
}
