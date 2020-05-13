<?php

class Company extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('company_model');
        $this->load->library('session');
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
            $data['image'] = $this->company_model->get_image($where, 'mst_company')->row_array();
            $this->load->view('backend/header', $data);
            $this->load->view('backend/sidebar_company');
            $this->load->view('backend/company_dashboard');
            $this->load->view('backend/footer_company');
        } else {
            redirect(base_url('login/perusahaan'));
        }
    }

    public function company_profile()
    {
        if ($this->session->userdata('logged_in')) {
            $data['title'] = 'Company Profile | PPK UNIKAMA';
            $data['nama_company'] = $this->session->userdata('nama');
            $data['data_company'] = $this->session->userdata();
            $where = array(
                'kode_pt' => $this->session->userdata('kode')
            );
            $data['image'] = $this->company_model->get_image($where, 'mst_company')->row_array();

            $this->load->view('backend/header', $data);
            $this->load->view('backend/sidebar_company');
            $this->load->view('backend/company_profile');
            $this->load->view('backend/footer_company');
        } else {
            redirect(base_url('login/perusahaan'));
        }
    }

    public function company_vacancy()
    {
        if ($this->session->userdata('logged_in')) {
            $data['title'] = 'Create Vacancy | PPK UNIKAMA';
            $data['nama_company'] = $this->session->userdata('nama');
            $where = array(
                'kode_pt' => $this->session->userdata('kode')
            );
            $data['image'] = $this->company_model->get_image($where, 'mst_company')->row_array();
            $data['data_vacancy'] = $this->company_model->get_data_by_kode($where, 'tbl_vacancy')->result();
            // var_dump($data['data_vacancy']);
            $this->load->view('backend/header', $data);
            $this->load->view('backend/sidebar_company');
            $this->load->view('backend/company_vacancy');
            $this->load->view('backend/footer_company');
        } else {
            redirect(base_url('login/perusahaan'));
        }
    }

    public function agenda()
    {
        if ($this->session->userdata('logged_in')) {
            $data['title'] = 'Agenda | PPK UNIKAMA';
            $data['nama_company'] = $this->session->userdata('nama');
            $where = array(
                'kode_pt' => $this->session->userdata('kode')
            );
            $data['image'] = $this->company_model->get_image($where, 'mst_company')->row_array();
            $data['data_agenda'] = $this->company_model->get_data_by_kode($where, 'tbl_agenda')->result();
            $this->load->view('backend/header', $data);
            $this->load->view('backend/sidebar_company');
            $this->load->view('backend/company_agenda');
            $this->load->view('backend/footer_company');
        } else {
            redirect(base_url('login/perusahaan'));
        }
    }

    public function apply_vacancy()
    {
        if ($this->session->userdata('logged_in')) {
            $data['title'] = 'Apply Vacancy | PPK UNIKAMA';
            $data['nama_company'] = $this->session->userdata('nama');
            $where = array(
                'kode_pt' => $this->session->userdata('kode')
            );
            $data['image'] = $this->company_model->get_image($where, 'mst_company')->row_array();
            $this->load->view('backend/header', $data);
            $this->load->view('backend/sidebar_company');
            $this->load->view('backend/company_apply_vacancy');
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
                'kode_pt' => '1',
                'nama_pt' => $this->session->userdata('nama'),
                'job_title' => $this->input->post('job_title'),
                'position' => $this->input->post('position'),
                'salary' => $this->input->post('salary'),
                'due_date' => $due_date,
                'requirement' => $this->input->post('requirement'),
                'location' => $this->input->post('location'),
            );
            $this->company_model->insert_data($data, 'tbl_vacancy');
            redirect(base_url('backend/company/company_vacancy'));
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
        echo json_encode($this->company_model->get_data_by_id($data, 'tbl_vacancy')->row_array());
    }

    public function delete_vacancy()
    {
        $id = $this->input->post('id');
        $data = array(
            'id' => $id
        );
        $delete = $this->company_model->delete_data_by_id($data, 'tbl_vacancy');
        if ($delete) {
            echo json_encode(array('statusCode' => '200'));
        } else {
            echo json_encode(array('statusCode' => '100'));
        }
    }

    public function total_vacancy_company()
    {
        $kode = $this->input->post('kode');
        $data = array(
            'kode_pt' => $kode
        );
        echo json_encode($this->company_model->get_total_vacancy($data, 'tbl_vacancy'));
    }

    public function latest_vacancy()
    {
        $kode = $this->input->post('kode');
        $data = array(
            'kode_pt' => $kode
        );
        echo json_encode($this->company_model->get_latest_vacancy($data, 'tbl_vacancy')->row_array());
    }

    public function total_apply()
    {
        $kode = $this->input->post('kode');
        $data = array(
            'kode_pt' => $kode
        );
        echo json_encode($this->company_model->get_total_apply($data, 'tbl_apply'));
    }

    public function total_agenda()
    {
        $kode = $this->input->post('kode');
        $data = array(
            'kode_pt' => $kode
        );
        echo json_encode($this->company_model->get_total_apply($data, 'tbl_agenda'));
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login/perusahaan');
    }
}
