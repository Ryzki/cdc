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
        $this->load->view('backend/topmenu');
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
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('backend/dashboard');
    }
}
