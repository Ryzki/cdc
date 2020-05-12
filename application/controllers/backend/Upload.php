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

    public function tambah_testimoni()
    {
        //ambil nama file
        $temp_filename = basename($_FILES["testimoni"]["name"]);

        $config['upload_path']          = './assets/images/testimoni/';
        $config['allowed_types']        = 'jpg|png|gif';
        $config['file_name']            = $temp_filename;
        $config['overwrite']            = true;
        $config['max_size']             = 10024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);
        $data = array(
            'gb_utama' => $temp_filename,
        );
        //hapus data
        $this->backend_user_model->hapus_all();
        //insert to db
        $this->backend_user_model->insert_data($data, 'tbl_testimoni');

        if (!$this->upload->do_upload('testimoni')) {
            redirect('backend/dashboard/testimoni');
        } else {
            redirect('backend/dashboard/testimoni');
        }
    }

    public function testimoni_gambar()
    {
        //ambil nama file
        $temp_filename = basename($_FILES["photo"]["name"]);

        $config['upload_path']          = './assets/images/testimoni/klien/';
        $config['allowed_types']        = 'jpg|png|gif';
        $config['file_name']            = $temp_filename;
        $config['overwrite']            = true;
        $config['max_size']             = 10024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);


        $nama = $this->input->post('nama');
        $profesi = $this->input->post('profesi');
        $testimoni = $this->input->post('testimoni');

        $data = array(
            'nama' => $nama,
            'profesi' => $profesi,
            'testimoni' => $testimoni,
            'gambar' => $temp_filename,
        );

        $this->backend_user_model->insert_data($data, 'tbl_says');

        if (!$this->upload->do_upload('photo')) {
            redirect('backend/dashboard/testimoni');
        } else {
            redirect('backend/dashboard/testimoni');
        }
    }

    public function achievement()
    {
        //ambil nama file
        $temp_filename = basename($_FILES["latar"]["name"]);

        $config['upload_path']          = './assets/images/achievement/';
        $config['allowed_types']        = 'jpg|png|gif';
        $config['file_name']            = $temp_filename;
        $config['overwrite']            = true;
        $config['max_size']             = 10024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);


        $id = $this->input->post('id');
        $judul = $this->input->post('judul');
        $deskripsi = $this->input->post('deskripsi');
        $kursus = $this->input->post('kursus');
        $jobseeker = $this->input->post('jobseeker');
        $company = $this->input->post('company');
        $lowongan = $this->input->post('lowongan');

        $data = array(
            'judul' => $judul,
            'deskripsi' => $deskripsi,
            'kursus' => $kursus,
            'jobseeker' => $jobseeker,
            'company' => $company,
            'lowongan' => $lowongan,
            'gambar' => $temp_filename,
        );


        $where = array('id' => $id);


        $this->backend_user_model->update_data($where, $data, 'tbl_achievement');

        if (!$this->upload->do_upload('latar')) {
            redirect('backend/dashboard/achievement');
        } else {
            redirect('backend/dashboard/achievement');
        }
    }

    public function partner_logo()
    {
        //ambil nama file
        $temp_filename = basename($_FILES["partner"]["name"]);

        $config['upload_path']          = './assets/images/partner/';
        $config['allowed_types']        = 'jpg|png|gif';
        $config['file_name']            = $temp_filename;
        $config['overwrite']            = true;
        $config['max_size']             = 10024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        $nama = $this->input->post('nama');

        $data = array(
            'nama' => $nama,
            'gambar' => $temp_filename,
        );

        $this->backend_user_model->insert_data($data, 'tbl_partner');

        if (!$this->upload->do_upload('partner')) {
            redirect('backend/dashboard/partner');
        } else {
            redirect('backend/dashboard/partner');
        }
    }

    public function member_area()
    {
        //ambil nama file
        $temp_filename = basename($_FILES["member"]["name"]);

        $config['upload_path']          = './assets/images/member/';
        $config['allowed_types']        = 'jpg|png|gif';
        $config['file_name']            = $temp_filename;
        $config['overwrite']            = true;
        $config['max_size']             = 10024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        $data = array(
            'gambar' => $temp_filename,
        );

        $this->backend_user_model->insert_data($data, 'tbl_member');

        if (!$this->upload->do_upload('member')) {
            redirect('backend/dashboard/member');
        } else {
            redirect('backend/dashboard/member');
        }
    }
}
