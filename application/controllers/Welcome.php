<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function index()
	{
		$data['menu'] = $this->landing_page_model->getMenu();
		$data['submenu'] = $this->landing_page_model->getSubMenu();


		// $data['menu'] = $this->landing_page_model->getMenu('tbl_menu')->result();

		$this->load->view('landing-page/header', $data);
		$this->load->view('landing-page/landing_page');
		$this->load->view('landing-page/footer');
	}

	public function contact()
	{
		$data['title'] = "Contact | Universitas Kanjuruhan Malang";
		$this->load->view('landing-page/header_blog', $data);
		// $this->load->view('tracer/header', $data);
		$this->load->view('landing-page/contact');
		$this->load->view('landing-page/footer');
	}

	public function blog()
	{
		$data['title'] = "Blog | Universitas Kanjuruhan Malang";
		$this->load->view('landing-page/header_blog', $data);
		// $this->load->view('tracer/header', $data);
		$this->load->view('landing-page/blog');
		$this->load->view('landing-page/footer');
	}

	public function blogDetil()
	{
		$data['title'] = "Blog Detail | Universitas Kanjuruhan Malang";
		// $this->load->view('tracer/header', $data);
		$this->load->view('landing-page/header_blog', $data);
		$this->load->view('landing-page/blogDetil');
		$this->load->view('landing-page/footer');
	}
}
