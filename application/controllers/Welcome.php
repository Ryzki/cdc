<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function index()
	{
		$this->load->view('landing-page/header');
		$this->load->view('landing-page/landing_page');
		$this->load->view('landing-page/footer');
		
	}

	public function contact()
	{
		$this->load->view('tracer/header');
		$this->load->view('landing-page/contact');
		$this->load->view('landing-page/footer');
		
	}

	public function blog()
	{
		$this->load->view('tracer/header');
		$this->load->view('landing-page/blog');
		$this->load->view('landing-page/footer');
		
	}

	public function blogDetil()
	{
		$this->load->view('tracer/header');
		$this->load->view('landing-page/blogDetil');
		$this->load->view('landing-page/footer');
		
	}
}
