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

            // $this->load->model('b_m_user');

            $cek = $this->b_m_user->getLoginData($username, $password);
        }
    }

    public function profile()
    {
        $this->load->view('backend/header');
        $this->load->view('backend/sidebar');
        $this->load->view('backend/footer');
    }
}
