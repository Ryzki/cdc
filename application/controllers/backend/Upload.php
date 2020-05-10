<?php

class Upload extends CI_Controller
{
    public function index()
    {
        $this->load->view('topmenu', array('error' => ' '));
    }

    public function aksi_upload()
    {
        $config['upload_path']          = './assets/images/logo/';
        $config['allowed_types']        = 'png';
        $config['file_name']            = 'logo';
        $config['overwrite']            = true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('berkas')) {
            $data = array('data' => $this->upload->display_errors());
            $this->load->view('backend/header');
            $this->load->view('backend/sidebar');
            $this->load->view('backend/topmenu', $data);
            $this->load->view('backend/footer');
        } else {

            $this->load->view('backend/header');
            $this->load->view('backend/sidebar');
            $this->load->view('backend/topmenu', array('data' => 'Sukses'));
            $this->load->view('backend/footer');
        }
    }
}
