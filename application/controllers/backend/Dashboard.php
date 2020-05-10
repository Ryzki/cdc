<?php

class Dashboard extends CI_Controller
{
  public function index()
  {
    $this->load->view('backend/login');
  }

  public function login()
  {
    $this->form_validation->set_rules('username', 'username', 'required', ['required' => 'Username Wajib diisi']);
    $this->form_validation->set_rules('password', 'password', 'required', ['required' => 'Password Wajib diisi']);

    if ($this->form_validation->run() == FALSE) {
      $this->index();
    } else {
      $username = $this->input->post('username');
      $password = $this->input->post('password');

      $this->backend_user_model->getLoginData($username, $password);
    }
  }

  public function profile()
  {
    if (!isset($this->session->userdata['username'])) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Anda belum login!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>');
      redirect('backend/dashboard/login');
    }
    $this->load->view('backend/header');
    $this->load->view('backend/sidebar');
    $this->load->view('backend/topmenu', array('data' => ' '));
    $this->load->view('backend/footer');
  }

  public function lowongan()
  {
    if (!isset($this->session->userdata['username'])) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Anda belum login!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>');
      redirect('backend/dashboard/login');
    }
    $this->load->view('backend/header');
    $this->load->view('backend/sidebar');
    $this->load->view('backend/lowongan');
    $this->load->view('backend/footer');
  }

  public function agenda()
  {
    if (!isset($this->session->userdata['username'])) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Anda belum login!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>');
      redirect('backend/dashboard/login');
    }
    $this->load->view('backend/header');
    $this->load->view('backend/sidebar');
    $this->load->view('backend/agenda');
    $this->load->view('backend/footer');
  }

  public function video()
  {
    if (!isset($this->session->userdata['username'])) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Anda belum login!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>');
      redirect('backend/dashboard/login');
    }
    $this->load->view('backend/header');
    $this->load->view('backend/sidebar');
    $this->load->view('backend/video');
    $this->load->view('backend/footer');
  }

  public function galeri()
  {
    if (!isset($this->session->userdata['username'])) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Anda belum login!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>');
      redirect('backend/dashboard/login');
    }
    $this->load->view('backend/header');
    $this->load->view('backend/sidebar');
    $this->load->view('backend/galeri');
    $this->load->view('backend/footer');
  }

  public function testimoni()
  {
    if (!isset($this->session->userdata['username'])) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Anda belum login!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>');
      redirect('backend/dashboard/login');
    }
    $this->load->view('backend/header');
    $this->load->view('backend/sidebar');
    $this->load->view('backend/testimoni');
    $this->load->view('backend/footer');
  }

  public function achievement()
  {
    if (!isset($this->session->userdata['username'])) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Anda belum login!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>');
      redirect('backend/dashboard/login');
    }
    $this->load->view('backend/header');
    $this->load->view('backend/sidebar');
    $this->load->view('backend/achievement');
    $this->load->view('backend/footer');
  }

  public function partner()
  {
    if (!isset($this->session->userdata['username'])) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Anda belum login!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>');
      redirect('backend/dashboard/login');
    }
    $this->load->view('backend/header');
    $this->load->view('backend/sidebar');
    $this->load->view('backend/partner');
    $this->load->view('backend/footer');
  }

  public function footer()
  {
    if (!isset($this->session->userdata['username'])) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Anda belum login!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>');
      redirect('backend/dashboard/login');
    }
    $this->load->view('backend/header');
    $this->load->view('backend/sidebar');
    $this->load->view('backend/footer_area');
    $this->load->view('backend/footer');
  }

  public function kodept()
  {
    if (!isset($this->session->userdata['username'])) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Anda belum login!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>');
      redirect('backend/dashboard/login');
    }
    $this->load->view('backend/header');
    $this->load->view('backend/sidebar');
    $this->load->view('backend/kodept');
    $this->load->view('backend/footer');
  }

  public function sambutan()
  {
    if (!isset($this->session->userdata['username'])) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Anda belum login!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>');
      redirect('backend/dashboard/login');
    }
    $this->load->view('backend/header');
    $this->load->view('backend/sidebar');
    $this->load->view('backend/sambutan');
    $this->load->view('backend/footer');
  }

  public function prodi()
  {
    if (!isset($this->session->userdata['username'])) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Anda belum login!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>');
      redirect('backend/dashboard/login');
    }
    $this->load->view('backend/header');
    $this->load->view('backend/sidebar');
    $this->load->view('backend/prodi');
    $this->load->view('backend/footer');
  }

  public function alumni()
  {
    if (!isset($this->session->userdata['username'])) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Anda belum login!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>');
      redirect('backend/dashboard/login');
    }
    $this->load->view('backend/header');
    $this->load->view('backend/sidebar');
    $this->load->view('backend/alumni');
    $this->load->view('backend/footer');
  }

  public function analisa()
  {
    if (!isset($this->session->userdata['username'])) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Anda belum login!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>');
      redirect('backend/dashboard/login');
    }
    $this->load->view('backend/header');
    $this->load->view('backend/sidebar');
    $this->load->view('backend/analisa');
    $this->load->view('backend/footer');
  }

  public function laporan()
  {
    if (!isset($this->session->userdata['username'])) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Anda belum login!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>');
      redirect('backend/dashboard/login');
    }
    $this->load->view('backend/header');
    $this->load->view('backend/sidebar');
    $this->load->view('backend/laporan');
    $this->load->view('backend/footer');
  }

  public function artikel()
  {
    if (!isset($this->session->userdata['username'])) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Anda belum login!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>');
      redirect('backend/dashboard/login');
    }
    $this->load->view('backend/header');
    $this->load->view('backend/sidebar');
    $this->load->view('backend/artikel');
    $this->load->view('backend/footer');
  }

  public function logout()
  {
    $this->session->sess_destroy();
    redirect('backend/dashboard');
  }

  public function company()
  {
    if ($this->session->userdata('logged_in')) {
      $sess = $this->session->userdata();
      $data['nama_company'] = $this->session->userdata('nama');
      // var_dump($sess);
      $this->load->view('backend/header', $data);
      $this->load->view('backend/sidebar_company');
      $this->load->view('backend/company_dashboard');
      $this->load->view('backend/footer');
    } else {
      redirect(base_url('login'));
    }
  }

  public function company_profile()
  {
    $data['nama_company'] = $this->session->userdata('nama_pt');
    $this->load->view('backend/header', $data);
    $this->load->view('backend/sidebar_company');
    $this->load->view('backend/company_profile');
    $this->load->view('backend/footer');
  }

  public function company_create_vacancy()
  {
    $data['nama_company'] = $this->session->userdata('nama_pt');
    $this->load->view('backend/header', $data);
    $this->load->view('backend/sidebar_company');
    $this->load->view('backend/company_create_vacancy');
    $this->load->view('backend/footer');
  }

  public function create_agenda()
  {
    $data['nama_company'] = $this->session->userdata('nama_pt');
    $this->load->view('backend/header', $data);
    $this->load->view('backend/sidebar_company');
    $this->load->view('backend/create_agenda');
    $this->load->view('backend/footer');
  }

  public function apply_vacancy()
  {
    $data['nama_company'] = $this->session->userdata('nama_pt');
    $this->load->view('backend/header', $data);
    $this->load->view('backend/sidebar_company');
    $this->load->view('backend/apply_vacancy');
    $this->load->view('backend/footer');
  }
}
