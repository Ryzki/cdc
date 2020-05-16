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
            $data['nama_Company'] = $this->session->userdata('nama');
            $data['data_Company'] = $this->session->userdata();
            $data['session'] = $this->session->userdata();
            $where = array(
                'kode_pt' => $this->session->userdata('kode')
            );
            $data['image'] = $this->Company_model->get_image($where, 'mst_Company')->row_array();
            $this->load->view('backend/header', $data);
            $this->load->view('backend/sidebar_Company');
            $this->load->view('backend/Company_dashboard');
            $this->load->view('backend/footer_Company');
        } else {
            redirect(base_url('login/perusahaan'));
        }
    }

    public function Company_profile()
    {
        if ($this->session->userdata('logged_in')) {
            $data['title'] = 'Company Profile | PPK UNIKAMA';
            $data['nama_Company'] = $this->session->userdata('nama');
            $data['data_Company'] = $this->session->userdata();
            $where = array(
                'kode_pt' => $this->session->userdata('kode')
            );
            $data['image'] = $this->Company_model->get_image($where, 'mst_Company')->row_array();

            $this->load->view('backend/header', $data);
            $this->load->view('backend/sidebar_Company');
            $this->load->view('backend/Company_profile');
            $this->load->view('backend/footer_Company');
        } else {
            redirect(base_url('login/perusahaan'));
        }
    }

    public function Company_vacancy()
    {
        if ($this->session->userdata('logged_in')) {
            $data['title'] = 'Create Vacancy | PPK UNIKAMA';
            $data['nama_Company'] = $this->session->userdata('nama');
            $where = array(
                'kode_pt' => $this->session->userdata('kode')
            );
            $data['image'] = $this->Company_model->get_image($where, 'mst_Company')->row_array();
            $data['data_vacancy'] = $this->Company_model->get_data_by_kode($where, 'tbl_vacancy')->result();
            // var_dump($data['data_vacancy']);
            $this->load->view('backend/header', $data);
            $this->load->view('backend/sidebar_Company');
            $this->load->view('backend/Company_vacancy');
            $this->load->view('backend/footer_Company');
        } else {
            redirect(base_url('login/perusahaan'));
        }
    }

    public function agenda()
    {
        if ($this->session->userdata('logged_in')) {
            $data['title'] = 'Agenda | PPK UNIKAMA';
            $data['nama_Company'] = $this->session->userdata('nama');
            $where = array(
                'kode_pt' => $this->session->userdata('kode')
            );
            $data['image'] = $this->Company_model->get_image($where, 'mst_Company')->row_array();
            $data['data_agenda'] = $this->Company_model->get_data_by_kode($where, 'tbl_agenda')->result();
            $this->load->view('backend/header', $data);
            $this->load->view('backend/sidebar_Company');
            $this->load->view('backend/Company_agenda');
            $this->load->view('backend/footer_Company');
        } else {
            redirect(base_url('login/perusahaan'));
        }
    }

    public function apply_vacancy()
    {
        if ($this->session->userdata('logged_in')) {
            $data['title'] = 'Apply Vacancy | PPK UNIKAMA';
            $data['sub_title'] = 'Applier Vacancy';
            $data['nama_Company'] = $this->session->userdata('nama');
            $where_img = array(
                'kode_pt' => $this->session->userdata('kode')
            );
            $kode_pt = $this->session->userdata('kode');
            $data['image'] = $this->Company_model->get_image($where_img, 'mst_Company')->row_array();
            $data['datas'] = $this->Company_model->get_data_apply($kode_pt, 'tbl_apply')->result();
            // var_dump($data['datas']);
            // die;
            $this->load->view('backend/header', $data);
            $this->load->view('backend/sidebar_Company');
            $this->load->view('backend/Company_apply_vacancy');
            $this->load->view('backend/footer_Company');
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
            $data['nama_Company'] = $this->session->userdata('nama');
            $where_img = array(
                'kode_pt' => $this->session->userdata('kode')
            );
            $kode_pt = $this->session->userdata('kode');
            $status = $status;
            $data['image'] = $this->Company_model->get_image($where_img, 'mst_Company')->row_array();
            $data['datas'] = $this->Company_model->get_data_apply_per_status($kode_pt, $status, 'tbl_apply')->result();
            $this->load->view('backend/header', $data);
            $this->load->view('backend/sidebar_Company');
            $this->load->view('backend/Company_result_apply');
            $this->load->view('backend/footer_Company');
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

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login/perusahaan');
    }
}
