<?php

class Company extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Company_model');
        $this->load->library('session');
        $this->load->helper(array('url', 'download'));
    }

    public function index()
    {
        if ($this->session->userdata('logged_in')) {
            // $sess = $this->session->userdata();
            $data['title'] = 'Dashboard Company | PPK UNIKAMA';
            $data['nama_company'] = $this->session->userdata('nama');
            $data['data_company'] = $this->session->userdata();
            $data['session'] = $this->session->userdata();
            $where = array(
                'kode_pt' => $this->session->userdata('kode')
            );
            $data['detail'] = $this->Company_model->get_data_by_id($where, 'mst_company')->result();
            $data['image'] = $this->Company_model->get_image($where, 'mst_company')->row_array();
            $data['logo'] = $this->Backend_user_model->tampil_data('tbl_logo')->result();
            $data['footer'] = $this->Backend_user_model->tampil_data('tbl_footer')->result();

            $this->load->library('scm');
            $this->load->view('backend/header', $data);
            $this->load->view('backend/sidebar_company');
            $this->load->view('backend/company_dashboard');
            $this->load->view('backend/footer_company');
        } else {
            redirect(base_url('login/perusahaan'));
        }
    }

    public function Company_profile()
    {
        if ($this->session->userdata('logged_in')) {
            $data['title'] = 'Company Profile | PPK UNIKAMA';
            // $data['nama_company'] = $this->session->userdata('nama');
            $where = array(
                'kode_pt' => $this->session->userdata('kode')
            );
            $data['detail'] = $this->Company_model->get_data_by_id($where, 'mst_company')->result();
            $data['logo'] = $this->Backend_user_model->tampil_data('tbl_logo')->result();
            $data['data_company'] = $this->Company_model->get_data_by_kode($where, 'mst_company')->row_array();
            $data['image'] = $this->Company_model->get_image($where, 'mst_company')->row_array();
            $data['footer'] = $this->Backend_user_model->tampil_data('tbl_footer')->result();

            $this->load->view('backend/header', $data);
            $this->load->view('backend/sidebar_company');
            $this->load->view('backend/Company_profile');
            $this->load->view('backend/footer_company');
        } else {
            redirect(base_url('login/perusahaan'));
        }
    }

    public function Company_vacancy()
    {
        if ($this->session->userdata('logged_in')) {
            $data['title'] = 'Create Vacancy | PPK UNIKAMA';
            // $data['nama_company'] = $this->session->userdata('nama');
            $where = array(
                'kode_pt' => $this->session->userdata('kode')
            );
            $data['detail'] = $this->Company_model->get_data_by_id($where, 'mst_company')->result();
            $data['logo'] = $this->Backend_user_model->tampil_data('tbl_logo')->result();
            $data['image'] = $this->Company_model->get_image($where, 'mst_company')->row_array();
            $data['data_vacancy'] = $this->Company_model->get_data_by_kode($where, 'tbl_vacancy')->result();
            $data['footer'] = $this->Backend_user_model->tampil_data('tbl_footer')->result();
            // var_dump($data['data_vacancy']);
            $this->load->library('scm');
            $this->load->view('backend/header', $data);
            $this->load->view('backend/sidebar_company');
            $this->load->view('backend/Company_vacancy');
            $this->load->view('backend/footer_company');
        } else {
            redirect(base_url('login/perusahaan'));
        }
    }

    public function agenda()
    {
        if ($this->session->userdata('logged_in')) {
            $data['title'] = 'Agenda | PPK UNIKAMA';
            // $data['nama_company'] = $this->session->userdata('nama');
            $where = array(
                'kode_pt' => $this->session->userdata('kode')
            );
            $data['detail'] = $this->Company_model->get_data_by_id($where, 'mst_company')->result();
            $data['logo'] = $this->Backend_user_model->tampil_data('tbl_logo')->result();
            $data['image'] = $this->Company_model->get_image($where, 'mst_company')->row_array();
            $data['data_agenda'] = $this->Company_model->get_data_by_kode($where, 'tbl_agenda')->result();
            $data['footer'] = $this->Backend_user_model->tampil_data('tbl_footer')->result();

            $this->load->library('scm');
            $this->load->view('backend/header', $data);
            $this->load->view('backend/sidebar_company');
            $this->load->view('backend/Company_agenda');
            $this->load->view('backend/footer_company');
        } else {
            redirect(base_url('login/perusahaan'));
        }
    }

    public function apply_vacancy()
    {
        if ($this->session->userdata('logged_in')) {
            $data['title'] = 'Apply Vacancy | PPK UNIKAMA';
            $data['sub_title'] = 'Applier Vacancy';
            // $data['nama_company'] = $this->session->userdata('nama');
            $where_img = array(
                'kode_pt' => $this->session->userdata('kode')
            );
            $data['detail'] = $this->Company_model->get_data_by_id($where_img, 'mst_company')->result();
            $kode_pt = $this->session->userdata('kode');
            $data['logo'] = $this->Backend_user_model->tampil_data('tbl_logo')->result();
            $data['image'] = $this->Company_model->get_image($where_img, 'mst_company')->row_array();
            $data['datas'] = $this->Company_model->get_data_apply($kode_pt, 'tbl_apply')->result();
            $data['footer'] = $this->Backend_user_model->tampil_data('tbl_footer')->result();
            // var_dump($data['datas']);
            // die;
            $this->load->view('backend/header', $data);
            $this->load->view('backend/sidebar_company');
            $this->load->view('backend/company_apply_vacancy');
            $this->load->view('backend/footer_company');
        } else {
            redirect(base_url('login/perusahaan'));
        }
    }

    public function result_applier($result)
    {
        if ($result == "approved") {
            $status = '1';
        } elseif ($result == "rejected") {
            $status = '2';
        } elseif ($result == 'outstanding') {
            $status = '0';
        } else {
            redirect(base_url('backend/Company/apply_vacancy'));
        }
        if ($this->session->userdata('logged_in')) {
            $data['title'] = 'Apply Vacancy | PPK UNIKAMA';
            $data['result'] = $result;
            $data['sub_title'] = ucfirst($result) . ' Applier';
            // $data['nama_company'] = $this->session->userdata('nama');
            $where_img = array(
                'kode_pt' => $this->session->userdata('kode')
            );
            $data['detail'] = $this->Company_model->get_data_by_id($where_img, 'mst_company')->result();
            $kode_pt = $this->session->userdata('kode');
            $status = $status;
            $data['logo'] = $this->Backend_user_model->tampil_data('tbl_logo')->result();
            $data['image'] = $this->Company_model->get_image($where_img, 'mst_company')->row_array();
            $data['datas'] = $this->Company_model->get_data_apply_per_status($kode_pt, $status, 'tbl_apply')->result();
            $data['footer'] = $this->Backend_user_model->tampil_data('tbl_footer')->result();
            $this->load->view('backend/header', $data);
            $this->load->view('backend/sidebar_company');
            $this->load->view('backend/Company_result_apply');
            $this->load->view('backend/footer_company');
        } else {
            redirect(base_url('login/perusahaan'));
        }
    }

    public function add_vacancy()
    {
        if ($this->session->userdata('logged_in')) {
            $konversi_tanggal = DateTime::createFromFormat("m/d/Y", $this->input->post('due_date'));
            $due_date = $konversi_tanggal->format('Y-m-d');
            $data = array(
                'kode_pt' => $this->session->userdata('kode'),
                'nama_pt' => $this->session->userdata('nama'),
                'job_title' => $this->input->post('job_title'),
                'position' => $this->input->post('position'),
                'salary' => $this->input->post('salary'),
                'due_date' => $due_date,
                'requirement' => $this->input->post('requirement'),
                'location' => $this->input->post('location'),
            );
            $this->Company_model->insert_data($data, 'tbl_vacancy');
            redirect(base_url('backend/Company/Company_vacancy'));
        } else {
            redirect(base_url('login/perusahaan'));
        }
    }

    public function add_agenda()
    {
        if ($this->session->userdata('logged_in')) {
            $data = array(
                'kode_pt' => $this->session->userdata('kode'),
                'title' => $this->input->post('title'),
                'time_1' => $this->input->post('time_1'),
                'time_2' => $this->input->post('time_2'),
                'location' => $this->input->post('location'),
                'content' => $this->input->post('content'),
            );
            $this->Company_model->insert_data($data, 'tbl_agenda');
            redirect(base_url('backend/Company/agenda'));
        } else {
            redirect(base_url('login/perusahaan'));
        }
    }

    public function view_vacancy()
    {
        $id = $this->input->post('id');
        $data = array(
            'id' => $id
        );
        echo json_encode($this->Company_model->get_data_by_id($data, 'tbl_vacancy')->row_array());
    }

    public function view_agenda()
    {
        $id = $this->input->post('id');
        $data = array(
            'id' => $id
        );
        $this->load->library('scm');
        echo json_encode($this->Company_model->get_data_by_id($data, 'tbl_agenda')->row_array());
    }

    public function view_apply()
    {
        $id = $this->input->post('id');
        echo json_encode($this->Company_model->get_data_apply_by_id($id, 'tbl_apply')->row_array());
    }

    public function delete_vacancy()
    {
        $id = $this->input->post('id');
        $data = array(
            'id' => $id
        );
        $delete = $this->Company_model->delete_data_by_id($data, 'tbl_vacancy');
        if ($delete) {
            echo json_encode(array('statusCode' => '200'));
        } else {
            echo json_encode(array('statusCode' => '100'));
        }
    }

    public function delete_agenda()
    {
        $id = $this->input->post('id');
        $data = array(
            'id' => $id
        );
        $delete = $this->Company_model->delete_data_by_id($data, 'tbl_agenda');
        if ($delete) {
            echo json_encode(array('statusCode' => '200'));
        } else {
            echo json_encode(array('statusCode' => '100'));
        }
    }

    public function total_vacancy_Company()
    {
        $kode = $this->input->post('kode');
        // $data = array(
        //     'kode_pt' => $kode
        // );
        echo json_encode($this->Company_model->get_total_data($kode, 'tbl_vacancy'));
    }

    public function latest_vacancy()
    {
        $kode = $this->input->post('kode');
        $data = array(
            'kode_pt' => $kode
        );
        echo json_encode($this->Company_model->get_latest_vacancy($data, 'tbl_vacancy')->row_array());
    }

    public function total_apply()
    {
        $kode = $this->input->post('kode');
        // $data = array(
        //     'kode_pt' => $kode
        // );
        echo json_encode($this->Company_model->get_total_apply($kode, 'tbl_apply'));
    }

    public function apply_this_month()
    {
        $kode = $this->input->post('kode');
        // $data = array(
        //     'kode_pt' => $kode
        // );
        echo json_encode($this->Company_model->get_apply_per_month($kode, 'tbl_apply'));
    }

    public function total_agenda()
    {
        $kode = $this->input->post('kode');
        // $data = array(
        //     'kode_pt' => $kode
        // );
        echo json_encode($this->Company_model->get_total_data($kode, 'tbl_agenda'));
    }

    public function decision()
    {
        $id = $this->input->post('id');
        $status = $this->input->post('status');
        $data = array(
            'status' => $status
        );
        echo json_encode($this->Company_model->update_data_by_id($id, $data, 'tbl_apply'));
    }

    public function download_csv($csv)
    {
        force_download('assets/cv/' . $csv, NULL);
    }

    public function edit_profile()
    {
        $kode = $this->session->userdata('kode');
        $data = array(
            'nama_pt' => $this->input->post('nama'),
            'jenis_pt' => $this->input->post('jenis'),
            'email_pt' => $this->input->post('email'),
            'deskripsi' => $this->input->post('deskripsi'),
        );
        $update_data = $this->Company_model->update_data_by_kode($kode, $data, 'mst_company');
        if ($update_data) {
            $this->session->set_flashdata('message', '<div class="alert alert-info text-center" role="alert">Success Update Data</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">Failed Update Data!!</div>');
        }
        $this->Company_profile();
    }

    public function upload_image()
    {

        $config['upload_path']          = './assets/images/user_company';
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['file_name']            = $this->session->userdata('kode');
        $config['max_size']             = 1000;
        $config['overwrite']            = true;

        $config['max_width']            = 500;
        $config['max_height']           = 500;

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('upload_image')) {
            $data_update = array(
                'image' => $this->upload->data('file_name'),
            );
            $this->Company_model->update_upload($this->session->userdata('kode'), $data_update);
            $this->session->set_flashdata('message_image', '<div class="alert alert-info text-center" role="alert">Success Update Image</div>');
            $this->Company_profile();
        } else {
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('message_image', '<div class="alert alert-danger text-center" role="alert">Error Upload File!, ' . $error['error'] . '</div>');
            $this->Company_profile();
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login/perusahaan');
    }
}
