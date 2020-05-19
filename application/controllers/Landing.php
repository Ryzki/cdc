<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landing extends CI_Controller
{
	public function index()
	{
		$data['logo'] = $this->Landing_page_model->getKaki('tbl_logo')->result();
		$data['slide'] = $this->Landing_page_model->getKaki('tbl_slide')->result();
		$data['menu'] = $this->Landing_page_model->getMenu();
		$data['submenu'] = $this->Landing_page_model->getSubMenu();
		$data['kaki'] = $this->Landing_page_model->getKaki('tbl_menu_kaki')->result();
		$data['video'] = $this->Landing_page_model->getKaki('tbl_video')->result();
		$data['album'] = $this->Landing_page_model->getKaki('tbl_galeri_menu')->result();
		$data['galeri_gb'] = $this->Landing_page_model->getKaki('tbl_galeri_gb')->result();
		$data['testimoni'] = $this->Landing_page_model->getKaki('tbl_says')->result();
		$data['gb_testimoni'] = $this->Landing_page_model->getKaki('tbl_testimoni')->result();
		$data['achievement'] = $this->Landing_page_model->getKaki('tbl_achievement')->result();
		$data['member'] = $this->Landing_page_model->getKaki('tbl_member')->result();
		$data['partner'] = $this->Landing_page_model->getKaki('tbl_partner')->result();
		$data['footer'] = $this->Landing_page_model->getKaki('tbl_footer')->result();

		$data['vacancy'] = $this->Landing_page_model->get_data_vacancy('tbl_vacancy')->result();
		$data['agenda'] = $this->Landing_page_model->get_data('tbl_agenda')->result();

		$this->load->view('landing-page/header', $data);
		$this->load->view('landing-page/landing_page');
		$this->load->view('landing-page/footer');
		// $this->load->view('landing-page/edu', $data);
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

	public function job_detil()
	{
		if (isset($_GET['seq'])) {
			$data['title'] = "Detail Job | Universitas Kanjuruhan Malang";
			$data['footer'] = $this->Landing_page_model->getKaki('tbl_footer')->result();
			$where = array(
				'id' => $_GET['seq'],
			);
			$data['jobs'] = $this->Landing_page_model->get_data_by_id($where, 'tbl_vacancy')->row_array();
			$this->load->view('landing-page/header_blog', $data);
			$this->load->view('landing-page/jobdetil');
			$this->load->view('landing-page/footer');
		}
	}
}
