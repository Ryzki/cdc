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

            $this->Backend_user_model->getLoginData($username, $password);
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
        $data['logo'] = $this->Backend_user_model->tampil_data('tbl_logo')->result();
        $data['slide'] = $this->Backend_user_model->tampil_data('tbl_slide')->result();
        $data['menu'] = $this->Landing_page_model->getMenu();
        $data['submenu'] = $this->Landing_page_model->getSubMenu();
        $data['menukaki'] = $this->Backend_user_model->tampil_data('tbl_menu_kaki')->result();
        $data['artikel'] = $this->Backend_user_model->tampil_data('tbl_artikel')->result();

        $this->load->view('backend/header', $data);
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

    public function contact()
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
        $data['contact'] = $this->Backend_user_model->tampil_data('tbl_contact_us_detil')->result();

        $this->load->view('backend/header');
        $this->load->view('backend/sidebar');
        $this->load->view('backend/contact', $data);
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
        $data['video'] = $this->Backend_user_model->tampil_data('tbl_video')->result();

        $this->load->view('backend/header');
        $this->load->view('backend/sidebar');
        $this->load->view('backend/video', $data);
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

        $data['galeri'] = $this->Backend_user_model->tampil_data('tbl_galeri_menu')->result();
        $data['galeri_gb'] = $this->Backend_user_model->tampil_data('tbl_galeri_gb')->result();

        $this->load->view('backend/header', $data);
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
        $data['gambar'] = $this->Backend_user_model->tampil_data('tbl_testimoni')->result();
        $data['list'] = $this->Backend_user_model->tampil_data('tbl_says')->result();

        $this->load->view('backend/header', $data);
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
        $data['achievement'] = $this->Backend_user_model->tampil_data('tbl_achievement')->result();

        $this->load->view('backend/header', $data);
        $this->load->view('backend/sidebar');
        $this->load->view('backend/achievement');
        $this->load->view('backend/footer');
    }

    public function member()
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
        $data['member'] = $this->Backend_user_model->tampil_data('tbl_member')->result();

        $this->load->view('backend/header', $data);
        $this->load->view('backend/sidebar');
        $this->load->view('backend/member');
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
        $data['partner'] = $this->Backend_user_model->tampil_data('tbl_partner')->result();

        $this->load->view('backend/header', $data);
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

        $data['footer'] = $this->Backend_user_model->tampil_data('tbl_footer')->result();

        $this->load->view('backend/header', $data);
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
        $data['menu'] = $this->Backend_user_model->tampil_data('tbl_menu')->result();
        $data['submenu'] = $this->Backend_user_model->tampil_data('tbl_submenu')->result();

        $this->load->view('backend/header');
        $this->load->view('backend/sidebar');
        $this->load->view('backend/artikel', $data);
        $this->load->view('backend/footer');
    }

    public function tambah_data()
    {
        $nama_menu = $this->input->post('menu');
        $link = $this->input->post('link');
        $pages = $this->input->post('pages');

        //buat kondisi
        if (empty($link)) {
            //buat kondisi pages apa yang dipilih
            if ($pages == 'contact') {
                $isi = 'landing/contact';
            } else if ($pages == 'artikel') {
                $isi = 'pages/pages/listArtikel';
            } else if ($pages == 'lowongan') {
                $isi = 'landing/lowongan';
            } else {
                $isi = '';
            }
        } else if (empty($pages)) {
            $isi = $link;
        }
        $data = array(
            'menu' => $nama_menu,
            'link' => $isi,
        );

        $this->Backend_user_model->insert_data($data, 'tbl_menu');
        redirect('backend/dashboard/profile');
    }

    public function tambah_album()
    {
        $album = $this->input->post('album');
        $data = array(
            'menu' => $album,
        );

        $this->Backend_user_model->insert_data($data, 'tbl_galeri_menu');
        redirect('backend/dashboard/galeri');
    }

    public function tambahSbm()
    {
        $nama_submenu = $this->input->post('submenu');
        $parent = $this->input->post('parent');
        $link = $this->input->post('link');

        $data = array(
            'submenu' => $nama_submenu,
            'menu' => $parent,
            'link' => $link,
        );

        $this->Backend_user_model->insert_data($data, 'tbl_submenu');
        redirect('backend/dashboard/profile');
    }

    public function tambahMenuKaki()
    {
        $nama_menu_kaki = $this->input->post('menu');
        $link = $this->input->post('link');

        $data = array(
            'menu' => $nama_menu_kaki,
            'link' => $link,
        );

        $this->Backend_user_model->insert_data($data, 'tbl_menu_kaki');
        redirect('backend/dashboard/profile');
    }

    public function tambahArtikel()
    {
        $judul = $this->input->post('judul');
        $konten = $this->input->post('konten');

        $data = array(
            'judul' => $judul,
            'konten' => $konten,
        );

        $this->Backend_user_model->insert_data($data, 'tbl_artikel');
        redirect('backend/dashboard/profile');
    }

    public function editArtikel()
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
        $id = $this->input->get('seq');

        $where = array('id' => $id);
        $data['artikel'] = $this->Backend_user_model->tampil_data_aksi($where, 'tbl_artikel')->result();

        $this->load->view('backend/header');
        $this->load->view('backend/sidebar');
        $this->load->view('backend/artikel_edit', $data);
        $this->load->view('backend/footer');
    }

    public function editArtikelAksi()
    {
        $id = $this->input->post('id');
        $judul = $this->input->post('judul');
        $konten = $this->input->post('konten');

        $data = array(
            'judul' => $judul,
            'konten' => $konten,
        );

        $where = array(
            'id' => $id
        );

        $this->Backend_user_model->update_data($where, $data, 'tbl_artikel');

        redirect('backend/dashboard/profile');
    }

    public function delete($id)
    {
        $where = array('id' => $id);
        $this->Backend_user_model->hapus_data($where, 'tbl_menu');
        redirect('backend/dashboard/profile');
    }

    public function deleteArtikel($id) //9
    {
        $where = array('id' => $id);
        $this->Backend_user_model->hapus_data($where, 'tbl_artikel');

        //hapus tbl_submenu
        $this->Backend_user_model->hapus_submenu($id);
        redirect('backend/dashboard/profile');
    }

    public function deleteAlbum($id)
    {
        $where = array('id' => $id);
        $this->Backend_user_model->hapus_data($where, 'tbl_galeri_menu');
        $this->deleteGambar($id);
    }

    public function deletegambar($id)
    {
        $where = array('menu' => $id);
        $this->Backend_user_model->hapus_data($where, 'tbl_galeri_gb');
        redirect('backend/dashboard/galeri');
    }

    public function deleteGaleri($id)
    {
        $where = array('id' => $id);
        $this->Backend_user_model->hapus_data($where, 'tbl_galeri_gb');
        redirect('backend/dashboard/galeri');
    }

    public function deleteSbm($id)
    {
        $where = array('id' => $id);
        $this->Backend_user_model->hapus_data($where, 'tbl_submenu');
        redirect('backend/dashboard/profile');
    }

    public function deleteMk($id)
    {
        $where = array('id' => $id);
        $this->Backend_user_model->hapus_data($where, 'tbl_menu_kaki');
        redirect('backend/dashboard/profile');
    }

    public function deleteTestimoni($id)
    {
        $where = array('id' => $id);
        $this->Backend_user_model->hapus_data($where, 'tbl_says');
        redirect('backend/dashboard/testimoni');
    }

    public function deletePartner($id)
    {
        $where = array('id' => $id);
        $this->Backend_user_model->hapus_data($where, 'tbl_partner');
        redirect('backend/dashboard/partner');
    }

    public function deleteMember($id)
    {
        $where = array('id' => $id);
        $this->Backend_user_model->hapus_data($where, 'tbl_member');
        redirect('backend/dashboard/member');
    }

    public function deleteSlide($id)
    {
        $where = array('id' => $id);
        $this->Backend_user_model->hapus_data($where, 'tbl_slide');
        redirect('backend/dashboard/profile');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('backend/dashboard');
    }
}
