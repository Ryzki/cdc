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
            redirect(base_url('backend/dashboard/profile'));
        } else {
            redirect(base_url('backend/dashboard/profile'));
        }
    }

    public function slide1()
    {
        $config['upload_path']          = './assets/images/slide/';
        $config['allowed_types']        = 'jpg';
        $config['file_name']            = '1';
        $config['overwrite']            = true;
        $config['max_size']             = 10024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('slide1')) {
            redirect(base_url('backend/dashboard/profile'));
        } else {
            redirect(base_url('backend/dashboard/profile'));
        }
    }

    public function slide2()
    {
        $config['upload_path']          = './assets/images/slide/';
        $config['allowed_types']        = 'jpg';
        $config['file_name']            = '2';
        $config['overwrite']            = true;
        $config['max_size']             = 10024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('slide2')) {
            redirect(base_url('backend/dashboard/profile'));
        } else {
            redirect(base_url('backend/dashboard/profile'));
        }
    }



    public function slide3()
    {
        $config['upload_path']          = './assets/images/slide/';
        $config['allowed_types']        = 'jpg';
        $config['file_name']            = '3';
        $config['overwrite']            = true;
        $config['max_size']             = 10024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('slide3')) {
            redirect(base_url('backend/dashboard/profile'));
        } else {
            redirect(base_url('backend/dashboard/profile'));
        }
    }

    public function slide4()
    {
        $config['upload_path']          = './assets/images/slide/';
        $config['allowed_types']        = 'jpg';
        $config['file_name']            = '4';
        $config['overwrite']            = true;
        $config['max_size']             = 10024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('slide4')) {
            redirect(base_url('backend/dashboard/profile'));
        } else {
            redirect(base_url('backend/dashboard/profile'));
        }
    }

    public function slide5()
    {
        $config['upload_path']          = './assets/images/slide/';
        $config['allowed_types']        = 'jpg';
        $config['file_name']            = '5';
        $config['overwrite']            = true;
        $config['max_size']             = 10024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('slide5')) {
            redirect(base_url('backend/dashboard/profile'));
        } else {
            redirect(base_url('backend/dashboard/profile'));
        }
    }

    public function tambah_video()
    {
        $config['upload_path']          = './assets/images/video/';
        $config['allowed_types']        = 'jpg';
        $config['file_name']            = '1';
        $config['overwrite']            = true;
        $config['max_size']             = 10024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);


        $id = $this->input->post('id');
        $judul = $this->input->post('judul');
        $deskripsi = $this->input->post('deskripsi');
        $youtube = $this->input->post('youtube');

        $data = array(
            'judul' => $judul,
            'deskripsi' => $deskripsi,
            'link_youtube' => $youtube,
        );

        $where = array(
            'id' => $id
        );

        $this->backend_user_model->update_data($where, $data, 'tbl_video');

        if (!$this->upload->do_upload('video')) {
            redirect('backend/dashboard/video');
        } else {
            redirect('backend/dashboard/video');
        }
    }
}
