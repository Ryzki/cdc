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
	public function tracer()
	{
		echo "aaaaa";
	}
}
