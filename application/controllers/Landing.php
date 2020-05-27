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
		$data['galeri_gb'] = $this->Landing_page_model->get_galeri_gb('tbl_galeri_gb')->result();
		$data['testimoni'] = $this->Landing_page_model->getKaki('tbl_says')->result();
		$data['gb_testimoni'] = $this->Landing_page_model->getKaki('tbl_testimoni')->result();
		$data['achievement'] = $this->Landing_page_model->getKaki('tbl_achievement')->result();
		$data['member'] = $this->Landing_page_model->getKaki('tbl_member')->result();
		$data['partner'] = $this->Landing_page_model->getKaki('tbl_partner')->result();
		$data['footer'] = $this->Landing_page_model->getKaki('tbl_footer')->result();
		$data['footer'] = $this->Landing_page_model->getKaki('tbl_footer')->result();
		$data['data_konselor'] = $this->Landing_page_model->getKaki('tbl_konselor')->result();

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
		$data['logo'] = $this->Backend_user_model->tampil_data('tbl_logo')->result();
		$data['menu'] = $this->Landing_page_model->getMenu();
		$data['submenu'] = $this->Landing_page_model->getSubMenu();
		$data['contact'] = $this->Landing_page_model->getKaki('tbl_contact_us_detil')->result();
		$data['footer'] = $this->Landing_page_model->getKaki('tbl_footer')->result();

		$this->load->view('landing-page/header_blog', $data);
		$this->load->view('landing-page/contact');
		$this->load->view('landing-page/footer_minimalis');
	}

	public function blogDetil()
	{
		$data['title'] = "Blog Detail | Universitas Kanjuruhan Malang";
		$data['footer'] = $this->Landing_page_model->getKaki('tbl_footer')->result();
		// $this->load->view('tracer/header', $data);
		$this->load->view('landing-page/header_blog', $data);
		$this->load->view('landing-page/blogDetil');
		$this->load->view('landing-page/footer');
	}


	public function job_all()
	{
		$data['title'] = "Job | Universitas Kanjuruhan Malang";
		$data['logo'] = $this->Backend_user_model->tampil_data('tbl_logo')->result();
		$data['menu'] = $this->Landing_page_model->getMenu();
		$data['submenu'] = $this->Landing_page_model->getSubMenu();
		$data['footer'] = $this->Landing_page_model->getKaki('tbl_footer')->result();
		$data['jobs'] = $this->Landing_page_model->get_job_by_due_date('tbl_vacancy')->result();
		$this->load->view('landing-page/header_blog', $data);
		$this->load->view('landing-page/jobAll');
		$this->load->view('landing-page/footer');
	}

	public function job_detil()
	{
		if (isset($_GET['seq'])) {
			$data['title'] = "Detail Job | Universitas Kanjuruhan Malang";
			$data['logo'] = $this->Backend_user_model->tampil_data('tbl_logo')->result();
			$data['menu'] = $this->Landing_page_model->getMenu();
			$data['submenu'] = $this->Landing_page_model->getSubMenu();
			$data['footer'] = $this->Landing_page_model->getKaki('tbl_footer')->result();
			$where = array(
				'id' => $_GET['seq'],
			);
			$data['jobs'] = $this->Landing_page_model->get_data_by_id($where, 'tbl_vacancy')->row_array();
			$this->load->view('landing-page/header_blog', $data);
			$this->load->view('landing-page/jobdetil');
			$this->load->view('landing-page/footer');
		} else {
			redirect(base_url());
		}
	}

	public function detail_agenda()
	{
		if (isset($_GET['seq'])) {
			$data['menu'] = $this->Landing_page_model->getMenu();
			$data['title'] = "Detail Agenda | Universitas Kanjuruhan Malang";
			$data['logo'] = $this->Backend_user_model->tampil_data('tbl_logo')->result();
			$data['footer'] = $this->Landing_page_model->getKaki('tbl_footer')->result();
			$where = array(
				'id' => $_GET['seq'],
			);
			$data['agenda'] = $this->Landing_page_model->get_data_by_id($where, 'tbl_agenda')->row_array();
			$this->load->view('landing-page/header_blog', $data);
			$this->load->view('landing-page/detail_agenda');
			$this->load->view('landing-page/footer');
		} else {
			redirect(base_url());
		}
	}

	public function apply_job()
	{
		$id = $this->input->post('id_vacancy');

		$config['upload_path']          = './assets/cv/';
		$config['allowed_types']        = 'pdf';
		$config['file_name']            = uniqid();
		$config['max_size']             = 2000;
		$config['overwrite']            = false;

		$this->load->library('upload', $config);
		if ($this->upload->do_upload('cv')) {
			$data = array(
				'id_vacancy' => $this->input->post('id_vacancy'),
				'nama' => $this->input->post('nama'),
				'email' => $this->input->post('email'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'pesan' => $this->input->post('pesan'),
				'posisi' => $this->input->post('posisi'),
				'kode_pt' => $this->input->post('kode_pt'),
				'cv' => $this->upload->data('file_name'),
			);

			$this->Landing_page_model->insert_data($data, 'tbl_apply');
			$this->session->set_flashdata('message', '<div class="alert alert-info text-center" role="alert">Success Apply</div>');
			$this->job_all();
		} else {
			$error = array('error' => $this->upload->display_errors());
			$this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">Failed Apply !, ' . $error['error'] . '</div>');
			redirect('landing/job_detil?seq=' . $id);
		}
	}

	public function form_contact()
	{
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');
		$judul = $this->input->post('judul');
		$pesan = $this->input->post('pesan');
		$data = array(
			'nama' => $nama,
			'email' => $email,
			'phone' => $phone,
			'title' => $judul,
			'pesan' => $pesan
		);

		$this->Backend_user_model->insert_data($data, 'tbl_contact_us');
		redirect('landing/contact');
	}
}
