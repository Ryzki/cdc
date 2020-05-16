<?php

class Upload extends CI_Controller
{
    public function index()
    {
        $this->load->view('topmenu', array('error' => ' '));
    }

    public function aksi_upload()
    {
        //ambil nama file
        $temp_filename = basename($_FILES["berkas"]["name"]);

        $config['upload_path']          = './assets/images/logo/';
        $config['allowed_types']        = 'jpg|png|gif';
        $config['file_name']            = $temp_filename;
        $config['overwrite']            = true;
        $config['max_size']             = 0; // unlimited
        $config['max_width']            = 0;
        $config['max_height']           = 0;

        $this->load->library('upload', $config);
        $data = array(
            'logo' => $temp_filename,
        );
        //hapus data
        $this->Backend_user_model->hapus_logo();
        //insert to db
        $this->Backend_user_model->insert_data($data, 'tbl_logo');

        if (!$this->upload->do_upload('berkas')) {
            redirect('backend/dashboard/profile');
        } else {
            redirect('backend/dashboard/profile');
        }
    }

    public function slide1()
    {
        //ambil nama file
        $temp_filename = basename($_FILES["slide"]["name"]);

        $config['upload_path']          = './assets/images/slide/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $temp_filename;
        $config['overwrite']            = true;
        $config['max_size']             = 0; // unlimited
        $config['max_width']            = 0;
        $config['max_height']           = 0;

        $this->load->library('upload', $config);

        $data = array(
            'gambar' => $temp_filename,
        );

        $this->Backend_user_model->insert_data($data, 'tbl_slide');

        if (!$this->upload->do_upload('slide')) {
            redirect(base_url('backend/dashboard/profile'));
        } else {
            redirect(base_url('backend/dashboard/profile'));
        }
    }

    public function tambah_video()
    {
        //ambil nama file
        $temp_filename = basename($_FILES["video"]["name"]);

        $config['upload_path']          = './assets/images/video/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $temp_filename;
        $config['overwrite']            = true;
        $config['max_size']             = 0; // unlimited
        $config['max_width']            = 0;
        $config['max_height']           = 0;

        $this->load->library('upload', $config);

        $id = $this->input->post('id');
        $judul = $this->input->post('judul');
        $deskripsi = $this->input->post('deskripsi');
        $youtube = $this->input->post('youtube');

        $data = array(
            'judul' => $judul,
            'deskripsi' => $deskripsi,
            'link_youtube' => $youtube,
            'gambar' => $temp_filename,
        );

        $where = array(
            'id' => $id
        );

        $this->Backend_user_model->update_data($where, $data, 'tbl_video');

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
        $config['max_size']             = 0; // unlimited
        $config['max_width']            = 0;
        $config['max_height']           = 0;

        $this->load->library('upload', $config);
        $data = array(
            'gb_utama' => $temp_filename,
        );
        //hapus data
        $this->Backend_user_model->hapus_all();
        //insert to db
        $this->Backend_user_model->insert_data($data, 'tbl_testimoni');

        if (!$this->upload->do_upload('testimoni')) {
            redirect('backend/dashboard/testimoni');
        } else {
            redirect('backend/dashboard/testimoni');
        }
    }

    public function galeri_gb()
    {
        //ambil nama file
        $temp_filename = basename($_FILES["gal"]["name"]);

        $config['upload_path']          = './assets/images/gallery/';
        $config['allowed_types']        = 'jpg|png|gif';
        $config['file_name']            = $temp_filename;
        $config['overwrite']            = true;
        $config['max_size']             = 0; // unlimited
        $config['max_width']            = 0;
        $config['max_height']           = 0;

        $this->load->library('upload', $config);
        $menu = $this->input->post('album');

        $data = array(
            'gambar' => $temp_filename,
            'menu' => $menu,
        );

        //insert to db
        $this->Backend_user_model->insert_data($data, 'tbl_galeri_gb');

        if (!$this->upload->do_upload('gal')) {
            redirect('backend/dashboard/galeri');
        } else {
            redirect('backend/dashboard/galeri');
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
        $config['max_size']             = 0; // unlimited
        $config['max_width']            = 0;
        $config['max_height']           = 0;

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

        $this->Backend_user_model->insert_data($data, 'tbl_says');

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
        $config['max_size']             = 0; // unlimited
        $config['max_width']            = 0;
        $config['max_height']           = 0;

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


        $this->Backend_user_model->update_data($where, $data, 'tbl_achievement');

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
        $config['max_size']             = 0; // unlimited
        $config['max_width']            = 0;
        $config['max_height']           = 0;

        $this->load->library('upload', $config);

        $nama = $this->input->post('nama');

        $data = array(
            'nama' => $nama,
            'gambar' => $temp_filename,
        );

        $this->Backend_user_model->insert_data($data, 'tbl_partner');

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
        $config['max_size']             = 0; // unlimited
        $config['max_width']            = 0;
        $config['max_height']           = 0;

        $this->load->library('upload', $config);

        $data = array(
            'gambar' => $temp_filename,
        );

        $this->Backend_user_model->insert_data($data, 'tbl_member');

        if (!$this->upload->do_upload('member')) {
            redirect('backend/dashboard/member');
        } else {
            redirect('backend/dashboard/member');
        }
    }

    public function update_footer()
    {
        //ambil nama file
        $temp_filename = basename($_FILES["footer"]["name"]);

        $config['upload_path']          = './assets/images/logo-footer/';
        $config['allowed_types']        = 'jpg|png|gif';
        $config['file_name']            = $temp_filename;
        $config['overwrite']            = true;
        $config['max_size']             = 0; // unlimited
        $config['max_width']            = 0;
        $config['max_height']           = 0;

        $this->load->library('upload', $config);


        $id = $this->input->post('id');
        $alamat = $this->input->post('alamat');
        $telp = $this->input->post('telp');
        $email = $this->input->post('email');
        $website = $this->input->post('website');
        $taut1 = $this->input->post('taut1');
        $link1 = $this->input->post('link1');
        $taut2 = $this->input->post('taut2');
        $link2 = $this->input->post('link2');
        $taut3 = $this->input->post('taut3');
        $link3 = $this->input->post('link3');
        $taut4 = $this->input->post('taut4');
        $link4 = $this->input->post('link4');
        $taut5 = $this->input->post('taut5');
        $link5 = $this->input->post('link5');
        $facebook = $this->input->post('facebook');
        $instagram = $this->input->post('instagram');
        $twitter = $this->input->post('twitter');
        $youtube = $this->input->post('youtube');
        $skype = $this->input->post('skype');
        $pinterest = $this->input->post('pinterest');

        $data = array(
            'alamat' => $alamat,
            'telp' => $telp,
            'email' => $email,
            'website' => $website,
            'taut1' => $taut1,
            'link1' => $link1,
            'taut2' => $taut2,
            'link2' => $link2,
            'taut3' => $taut3,
            'link3' => $link3,
            'taut4' => $taut4,
            'link4' => $link4,
            'taut5' => $taut5,
            'link5' => $link5,
            'facebook' => $facebook,
            'instagram' => $instagram,
            'twitter' => $twitter,
            'youtube' => $youtube,
            'skype' => $skype,
            'pinterest' => $pinterest,
        );


        $where = array('id' => $id);


        $this->Backend_user_model->update_data($where, $data, 'tbl_footer');

        if (!$this->upload->do_upload('footer')) {
            redirect('backend/dashboard/footer');
        } else {
            redirect('backend/dashboard/footer');
        }
    }
}
