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

    public function admin()
    {
        if ($this->session->userdata('logged_in')) {
            // $sess = $this->session->userdata();
            $data['title'] = 'Dashboard Admin | PPK UNIKAMA';
            // $data['nama_company'] = $this->session->userdata('nama');
            // $data['data_company'] = $this->session->userdata();
            // $data['session'] = $this->session->userdata();
            $where = array(
                'username' => $this->session->userdata('username')
            );
            $data['detail'] = $this->Backend_user_model->tampil_data_aksi($where, 'user')->result();
            $data['logo'] = $this->Backend_user_model->tampil_data('tbl_logo')->result();
            $data['footer'] = $this->Backend_user_model->tampil_data('tbl_footer')->result();

            $this->load->library('scm');
            $this->load->view('backend/header', $data);
            $this->load->view('backend/sidebar');
            $this->load->view('backend/admin_dashboard');
            $this->load->view('backend/footer');
        } else {
            redirect(base_url('backend/dashboard/login'));
        }
    }

    public function version()
    {
        if ($this->session->userdata('logged_in')) {
            // $sess = $this->session->userdata();
            $data['title'] = 'Dashboard Admin | PPK UNIKAMA';
            // $data['nama_company'] = $this->session->userdata('nama');
            // $data['data_company'] = $this->session->userdata();
            // $data['session'] = $this->session->userdata();

            //cek versi dari database
            $data['version'] = $this->Backend_user_model->tampil_data('version')->row_array();
            $where = array(
                'username' => $this->session->userdata('username')
            );
            $data['detail'] = $this->Backend_user_model->tampil_data_aksi($where, 'user')->result();
            $data['logo'] = $this->Backend_user_model->tampil_data('tbl_logo')->result();
            $data['footer'] = $this->Backend_user_model->tampil_data('tbl_footer')->result();

            $this->load->library('scm');
            $this->load->view('backend/header', $data);
            $this->load->view('backend/sidebar');
            $this->load->view('backend/version');
            $this->load->view('backend/footer');
        } else {
            redirect(base_url('backend/dashboard/login'));
        }
    }

    public function getVersion()
    {
        $this->load->library('scm');
        $this->scm->upgradeVersion();
        redirect(base_url('backend/dashboard/version'));
    }

    public function user_profile()
    {
        if ($this->session->userdata('logged_in')) {
            $data['title'] = 'User Profile | PPK UNIKAMA';
            // $data['nama_company'] = $this->session->userdata('nama');
            $where = array(
                'username' => $this->session->userdata('username')
            );
            $data['detail'] = $this->Backend_user_model->tampil_data_aksi($where, 'user')->result();
            $data['logo'] = $this->Backend_user_model->tampil_data('tbl_logo')->result();
            $data['footer'] = $this->Backend_user_model->tampil_data('tbl_footer')->result();

            $this->load->view('backend/header', $data);
            $this->load->view('backend/sidebar');
            $this->load->view('backend/user_profile');
            $this->load->view('backend/footer');
        } else {
            redirect(base_url('backend/dashboard/login'));
        }
    }

    public function upload_image_user()
    {

        $config['upload_path']          = './assets/images/user';
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['file_name']            = $this->session->userdata('username');
        $config['max_size']             = 1000;
        $config['overwrite']            = true;

        $config['max_width']            = 1000;
        $config['max_height']           = 1000;

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('upload_image')) {
            $data_update = array(
                'image' => $this->upload->data('file_name'),
            );
            $this->Backend_user_model->update_upload($this->session->userdata('username'), $data_update);
            $this->session->set_flashdata('message_image', '<div class="alert alert-info text-center" role="alert">Success Update Image</div>');
            $this->user_profile();
        } else {
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('message_image', '<div class="alert alert-danger text-center" role="alert">Error Upload File!, ' . $error['error'] . '</div>');
            $this->user_profile();
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
        $data['footer'] = $this->Backend_user_model->tampil_data('tbl_footer')->result();

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
        $data['logo'] = $this->Backend_user_model->tampil_data('tbl_logo')->result();
        $data['footer'] = $this->Backend_user_model->tampil_data('tbl_footer')->result();

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
        $data['logo'] = $this->Backend_user_model->tampil_data('tbl_logo')->result();
        $data['footer'] = $this->Backend_user_model->tampil_data('tbl_footer')->result();

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
        $data['logo'] = $this->Backend_user_model->tampil_data('tbl_logo')->result();
        $data['contact'] = $this->Backend_user_model->tampil_data('tbl_contact_us_detil')->result();
        $data['footer'] = $this->Backend_user_model->tampil_data('tbl_footer')->result();

        $this->load->view('backend/header', $data);
        $this->load->view('backend/sidebar');
        $this->load->view('backend/contact');
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
        $data['logo'] = $this->Backend_user_model->tampil_data('tbl_logo')->result();
        $data['video'] = $this->Backend_user_model->tampil_data('tbl_video')->result();
        $data['footer'] = $this->Backend_user_model->tampil_data('tbl_footer')->result();

        $this->load->view('backend/header', $data);
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
        $data['logo'] = $this->Backend_user_model->tampil_data('tbl_logo')->result();
        $data['galeri'] = $this->Backend_user_model->tampil_data('tbl_galeri_menu')->result();
        $data['galeri_gb'] = $this->Backend_user_model->tampil_data('tbl_galeri_gb')->result();
        $data['footer'] = $this->Backend_user_model->tampil_data('tbl_footer')->result();

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
        $data['logo'] = $this->Backend_user_model->tampil_data('tbl_logo')->result();
        $data['gambar'] = $this->Backend_user_model->tampil_data('tbl_testimoni')->result();
        $data['list'] = $this->Backend_user_model->tampil_data('tbl_says')->result();
        $data['footer'] = $this->Backend_user_model->tampil_data('tbl_footer')->result();

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
        $data['logo'] = $this->Backend_user_model->tampil_data('tbl_logo')->result();
        $data['achievement'] = $this->Backend_user_model->tampil_data('tbl_achievement')->result();
        $data['footer'] = $this->Backend_user_model->tampil_data('tbl_footer')->result();

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
        $data['logo'] = $this->Backend_user_model->tampil_data('tbl_logo')->result();
        $data['member'] = $this->Backend_user_model->tampil_data('tbl_member')->result();
        $data['footer'] = $this->Backend_user_model->tampil_data('tbl_footer')->result();

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
        $data['logo'] = $this->Backend_user_model->tampil_data('tbl_logo')->result();
        $data['partner'] = $this->Backend_user_model->tampil_data('tbl_partner')->result();
        $data['footer'] = $this->Backend_user_model->tampil_data('tbl_footer')->result();

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
        $data['logo'] = $this->Backend_user_model->tampil_data('tbl_logo')->result();
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
        $data['logo'] = $this->Backend_user_model->tampil_data('tbl_logo')->result();
        $data['footer'] = $this->Backend_user_model->tampil_data('tbl_footer')->result();
        $this->load->view('backend/header', $data);
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
        $data['logo'] = $this->Backend_user_model->tampil_data('tbl_logo')->result();
        $data['footer'] = $this->Backend_user_model->tampil_data('tbl_footer')->result();
        $this->load->view('backend/header', $data);
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
        $data['logo'] = $this->Backend_user_model->tampil_data('tbl_logo')->result();
        $data['footer'] = $this->Backend_user_model->tampil_data('tbl_footer')->result();
        $this->load->view('backend/header', $data);
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
        $data['logo'] = $this->Backend_user_model->tampil_data('tbl_logo')->result();
        $data['footer'] = $this->Backend_user_model->tampil_data('tbl_footer')->result();
        $this->load->view('backend/header', $data);
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
        $data['logo'] = $this->Backend_user_model->tampil_data('tbl_logo')->result();
        $data['footer'] = $this->Backend_user_model->tampil_data('tbl_footer')->result();
        $this->load->view('backend/header', $data);
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
        $data['logo'] = $this->Backend_user_model->tampil_data('tbl_logo')->result();
        $data['footer'] = $this->Backend_user_model->tampil_data('tbl_footer')->result();
        $this->load->view('backend/header', $data);
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
        $data['logo'] = $this->Backend_user_model->tampil_data('tbl_logo')->result();
        $data['menu'] = $this->Backend_user_model->tampil_data('tbl_menu')->result();
        $data['submenu'] = $this->Backend_user_model->tampil_data('tbl_submenu')->result();
        $data['footer'] = $this->Backend_user_model->tampil_data('tbl_footer')->result();

        $this->load->view('backend/header', $data);
        $this->load->view('backend/sidebar');
        $this->load->view('backend/artikel', $data);
        $this->load->view('backend/footer');
    }

    public function perusahaan_outstanding()
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
        //buat data bahwa ini list untuk perusahaan outstanding
        $data = array(
            'status' => 'outstanding',
            'judul' => 'Perusahaan Outstanding',
            'deskripsi' => 'Dibawah ini adalah perusahan yang sudah mendaftar dan butuh persetujuan untuk mendownload draft MoU'
        );
        $where = array(
            'is_active' => '0'
        );
        $data['logo'] = $this->Backend_user_model->tampil_data('tbl_logo')->result();
        $data['company'] = $this->Backend_user_model->tampil_data_aksi($where, 'mst_company')->result();
        $data['footer'] = $this->Backend_user_model->tampil_data('tbl_footer')->result();

        $this->load->view('backend/header', $data);
        $this->load->view('backend/sidebar');
        $this->load->view('backend/perusahaan');
        $this->load->view('backend/footer');
    }

    public function perusahaan_mou()
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
        //buat data bahwa ini list untuk perusahaan mou
        $data = array(
            'status' => 'mou',
            'judul' => 'Perusahaan Waiting Mou',
            'deskripsi' => 'Perusahaan telah mendownload draft MoU dan menunggu untuk diupload',
        );
        $where = array(
            'is_active' => '1'
        );
        $data['logo'] = $this->Backend_user_model->tampil_data('tbl_logo')->result();
        $data['company'] = $this->Backend_user_model->tampil_data_aksi($where, 'mst_company')->result();
        $data['footer'] = $this->Backend_user_model->tampil_data('tbl_footer')->result();

        $this->load->view('backend/header', $data);
        $this->load->view('backend/sidebar');
        $this->load->view('backend/perusahaan');
        $this->load->view('backend/footer');
    }

    public function perusahaan_verified()
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
        //buat data bahwa ini list untuk perusahaan verified
        $data = array(
            'status' => 'verified',
            'judul' => 'Perusahaan Verified',
            'deskripsi' => 'Perusahaan telah mengunggah MoU, artinya kesepakat kerja dengan perusahaan telah resmi terjalin',
        );
        $where = array(
            'is_active' => '2'
        );
        $data['logo'] = $this->Backend_user_model->tampil_data('tbl_logo')->result();
        $data['company'] = $this->Backend_user_model->tampil_data_aksi($where, 'mst_company')->result();
        $data['footer'] = $this->Backend_user_model->tampil_data('tbl_footer')->result();

        $this->load->view('backend/header', $data);
        $this->load->view('backend/sidebar');
        $this->load->view('backend/perusahaan');
        $this->load->view('backend/footer');
    }

    public function konselor()
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
        $data['konselor'] = $this->Backend_user_model->tampil_data('tbl_konselor')->result();
        $data['footer'] = $this->Backend_user_model->tampil_data('tbl_footer')->result();

        $this->load->view('backend/header', $data);
        $this->load->view('backend/sidebar');
        $this->load->view('backend/konselor');
        $this->load->view('backend/footer');
    }

    public function deleteKonselor($id)
    {
        $where = array('id' => $id);

        $this->Backend_user_model->hapus_data($where, 'tbl_konselor');
        redirect('backend/dashboard/konselor');
    }

    public function user()
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
        $data['user'] = $this->Backend_user_model->tampil_data('user')->result();
        $data['footer'] = $this->Backend_user_model->tampil_data('tbl_footer')->result();

        $this->load->view('backend/header', $data);
        $this->load->view('backend/sidebar');
        $this->load->view('backend/user');
        $this->load->view('backend/footer');
    }

    public function deleteUser($id)
    {
        $where = array('id' => $id);

        $this->Backend_user_model->hapus_data($where, 'user');
        redirect('backend/dashboard/user');
    }

    public function tambah_user()
    {
        $this->Backend_user_model->tambah_user();
        $this->session->set_flashdata('message', '<div class="alert alert-info text-center" role="alert">Tambah User Berhasil</div>');
        redirect(base_url('backend/dashboard/user'));
    }

    public function approve($id)
    {
        $where = array('id' => $id);

        $data = array(
            'is_active' => '1'
        );

        $this->Backend_user_model->update_data($where, $data, 'mst_company');
        redirect('backend/dashboard/perusahaan_outstanding');
    }

    public function approveMou($id)
    {
        $where = array('id' => $id);

        $data = array(
            'is_active' => '2'
        );

        $this->Backend_user_model->update_data($where, $data, 'mst_company');
        redirect('backend/dashboard/perusahaan_mou');
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
                $isi = 'landing/job_all';
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
        $data['logo'] = $this->Backend_user_model->tampil_data('tbl_logo')->result();
        $data['artikel'] = $this->Backend_user_model->tampil_data_aksi($where, 'tbl_artikel')->result();
        $data['footer'] = $this->Backend_user_model->tampil_data('tbl_footer')->result();

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

    public function editProfile()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $deskripsi = $this->input->post('deskripsi');

        $where = array('id' => $id);
        $data = array(
            'nama' => $nama,
            'username' => $username,
            'email' => $email,
            'deskripsi' => $deskripsi,
        );

        $update = $this->Backend_user_model->update_data($where, $data, 'user');
        $this->session->set_flashdata('message', '<div class="alert alert-info text-center" role="alert">Success Update Data</div>');
        redirect('backend/dashboard/user_profile');
    }

    public function total_vacancy()
    {
        // $kode = $this->input->post('kode');
        // $data = array(
        //     'kode_pt' => $kode
        // );
        echo json_encode($this->Backend_user_model->get_total_data('tbl_vacancy'));
    }

    public function latest_vacancy()
    {
        // $kode = $this->input->post('kode');
        // $data = array(
        //     'kode_pt' => $kode
        // );
        echo json_encode($this->Backend_user_model->get_latest_vacancy('tbl_vacancy')->row_array());
    }

    public function total_apply()
    {
        // $kode = $this->input->post('kode');
        // $data = array(
        //     'kode_pt' => $kode
        // );
        echo json_encode($this->Backend_user_model->get_total_apply('tbl_apply'));
    }

    public function total_agenda()
    {
        // $kode = $this->input->post('kode');
        // $data = array(
        //     'kode_pt' => $kode
        // );
        echo json_encode($this->Backend_user_model->get_total_data('tbl_agenda'));
    }

    public function total_perusahaan()
    {
        // $kode = $this->input->post('kode');
        // $data = array(
        //     'kode_pt' => $kode
        // );
        echo json_encode($this->Backend_user_model->get_total_data('mst_company'));
    }
}
