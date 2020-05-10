<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tracer extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('tracer_model');
        $this->load->library('session');
    }

    public function index()
    {
        $this->form_validation->set_rules('npm', 'NPM', 'trim|required');
        $this->form_validation->set_rules('phone', 'Phone', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login Page | Tracer Study';
            // $this->load->view('tracer/header');
            $this->load->view('tracer/login', $data);
            // $this->load->view('tracer/footer');
        } else {
            $this->tracer_model->login();
        }
    }

    public function sambutan()
    {
        if ($this->session->userdata('logged_in')) {
            $data['alumni'] = $this->db->get_where('tbl_alumni', ['npm' => $this->session->userdata('npm')])->row_array();
            if ($data['alumni']['status'] !== '0') {
                $this->tracer_model->cek_status($data['alumni']['status']);
            }
            $data['title'] = 'Sambutan | Tracer Study';
            $this->load->view('tracer/header', $data);
            $this->load->view('tracer/main');
            $this->load->view('tracer/footer');
        } else {
            redirect(base_url('tracer'));
        }
    }

    // public function ask_wajib() //Question 1
    // {
    //     if ($this->session->userdata('logged_in')) {
    //         $data['alumni'] = $this->db->get_where('tbl_alumni', ['npm' => $this->session->userdata('npm')])->row_array();
    //     } else {
    //         redirect(base_url('tracer'));
    //     }
    //     if (!empty($_REQUEST)) {
    //         $this->tracer_model->insert_data_wajib();
    //         redirect(base_url('tracer/ask1'));
    //     } else {
    //         $data['title'] = 'Question 1 | Tracer Study';
    //         $this->load->view('tracer/header', $data);
    //         $this->load->view('tracer/ask_wajib');
    //         $this->load->view('tracer/footer');
    //     }
    // }

    public function ask1() //Question 2
    {
        if ($this->session->userdata('logged_in')) {
            $data['alumni'] = $this->db->get_where('tbl_alumni', ['npm' => $this->session->userdata('npm')])->row_array();
            if ($data['alumni']['status'] !== '0') {
                $this->tracer_model->cek_status($data['alumni']['status']);
            }
        } else {
            redirect(base_url('tracer'));
        }

        if (!empty($_REQUEST)) {
            $this->tracer_model->insert_question_1();
            redirect(base_url('tracer/ask2'));
        } else {
            $data['title'] = 'Question 1 | Tracer Study';
            $this->load->view('tracer/header', $data);
            $this->load->view('tracer/1');
            $this->load->view('tracer/footer');
        }
    }

    public function ask2() //Question 3
    {
        if ($this->session->userdata('logged_in')) {
            $data['alumni'] = $this->db->get_where('tbl_alumni', ['npm' => $this->session->userdata('npm')])->row_array();
            if ($data['alumni']['status'] !== '1') {
                $this->tracer_model->cek_status($data['alumni']['status']);
            }
        } else {
            redirect(base_url('tracer'));
        }

        if (!empty($_REQUEST)) {
            $this->tracer_model->update_question_2();
            // redirect(base_url('tracer/ask3'));
        } else {
            $data['title'] = 'Question 2 | Tracer Study';
            $this->load->view('tracer/header', $data);
            $this->load->view('tracer/2');
            $this->load->view('tracer/footer');
        }
    }

    public function ask3() //Question 4
    {
        if ($this->session->userdata('logged_in')) {
            $data['alumni'] = $this->db->get_where('tbl_alumni', ['npm' => $this->session->userdata('npm')])->row_array();
            if ($data['alumni']['status'] !== '2') {
                $this->tracer_model->cek_status($data['alumni']['status']);
            }
        } else {
            redirect(base_url('tracer'));
        }

        if (!empty($_REQUEST)) {
            $f401 = $this->input->post("f401");
            $f402 = $this->input->post("f402");
            $f403 = $this->input->post("f403");
            $f404 = $this->input->post("f404");
            $f405 = $this->input->post("f405");
            $f406 = $this->input->post("f406");
            $f407 = $this->input->post("f407");
            $f408 = $this->input->post("f408");
            $f409 = $this->input->post("f409");
            $f410 = $this->input->post("f410");
            $f411 = $this->input->post("f411");
            $f412 = $this->input->post("f412");
            $f413 = $this->input->post("f413");
            $f414 = $this->input->post("f414");
            $f415 = $this->input->post("f415");
            $input = $this->input->post("input");
            if (empty($f401) && empty($f402) && empty($f403) && empty($f404) && empty($f405) && empty($f406) && empty($f407) && empty($f408) && empty($f409) && empty($f410) && empty($f411) && empty($f412) && empty($f413) && empty($f414) && empty($f415) && empty($input)) {
                $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert"><strong class="text-center"> Data Tidak Boleh Kosong ! !</strong></div>');
                redirect("tracer/ask3");
            }
            $this->tracer_model->update_question_3();
            redirect(base_url('tracer/ask4'));
        } else {
            $data['title'] = 'Question 3 | Tracer Study';
            // var_dump($data);
            $this->load->view('tracer/header', $data);
            $this->load->view('tracer/3');
            $this->load->view('tracer/footer');
        }
    }


    public function ask4()
    {
        if ($this->session->userdata('logged_in')) {
            $data['alumni'] = $this->db->get_where('tbl_alumni', ['npm' => $this->session->userdata('npm')])->row_array();
            if ($data['alumni']['status'] !== '3') {
                $this->tracer_model->cek_status($data['alumni']['status']);
            }
        } else {
            redirect(base_url('tracer'));
        }

        if (!empty($_REQUEST)) {
            $this->tracer_model->update_question_4();
            redirect(base_url('tracer/ask5'));
        } else {
            $data['title'] = 'Question 4 | Tracer Study';
            $this->load->view('tracer/header', $data);
            $this->load->view('tracer/4');
            $this->load->view('tracer/footer');
        }
    }

    public function ask5() //Question 5
    {
        if ($this->session->userdata('logged_in')) {
            $data['alumni'] = $this->db->get_where('tbl_alumni', ['npm' => $this->session->userdata('npm')])->row_array();
            if ($data['alumni']['status'] !== '4') {
                $this->tracer_model->cek_status($data['alumni']['status']);
            }
        } else {
            redirect(base_url('tracer'));
        }

        if (!empty($_REQUEST)) {
            $this->tracer_model->update_question_5();
            redirect(base_url('tracer/ask6'));
        } else {
            $data['title'] = 'Question 5 | Tracer Study';
            $this->load->view('tracer/header', $data);
            $this->load->view('tracer/5');
            $this->load->view('tracer/footer');
        }
    }

    public function ask6() //Question 6
    {
        if ($this->session->userdata('logged_in')) {
            $data['alumni'] = $this->db->get_where('tbl_alumni', ['npm' => $this->session->userdata('npm')])->row_array();
            if ($data['alumni']['status'] !== '5') {
                $this->tracer_model->cek_status($data['alumni']['status']);
            }
        } else {
            redirect(base_url('tracer'));
        }

        if (!empty($_REQUEST)) {
            $this->tracer_model->update_question_6();
            redirect(base_url('tracer/ask7'));
        } else {
            $data['title'] = 'Question 6 | Tracer Study';
            $this->load->view('tracer/header', $data);
            $this->load->view('tracer/6');
            $this->load->view('tracer/footer');
        }
    }

    public function ask7() //Question 7
    {
        if ($this->session->userdata('logged_in')) {
            $data['alumni'] = $this->db->get_where('tbl_alumni', ['npm' => $this->session->userdata('npm')])->row_array();
            if ($data['alumni']['status'] !== '6') {
                $this->tracer_model->cek_status($data['alumni']['status']);
            }
        } else {
            redirect(base_url('tracer'));
        }

        if (!empty($_REQUEST)) {
            $this->tracer_model->update_question_7();
            redirect(base_url('tracer/ask8'));
        } else {
            $data['title'] = 'Question 7 | Tracer Study';
            $this->load->view('tracer/header', $data);
            $this->load->view('tracer/7');
            $this->load->view('tracer/footer');
        }
    }


    public function ask8()
    {
        if ($this->session->userdata('logged_in')) {
            $data['alumni'] = $this->db->get_where('tbl_alumni', ['npm' => $this->session->userdata('npm')])->row_array();
            if ($data['alumni']['status'] !== '7') {
                $this->tracer_model->cek_status($data['alumni']['status']);
            }
        } else {
            redirect(base_url('tracer'));
        }

        if (!empty($_REQUEST)) {
            $this->tracer_model->update_question_8();
            redirect(base_url('tracer/ask9'));
        } else {
            $data['title'] = 'Question 8 | Tracer Study';
            $this->load->view('tracer/header', $data);
            $this->load->view('tracer/8');
            $this->load->view('tracer/footer');
        }
    }

    public function ask9() //Question 8
    {
        if ($this->session->userdata('logged_in')) {
            $data['alumni'] = $this->db->get_where('tbl_alumni', ['npm' => $this->session->userdata('npm')])->row_array();
            if ($data['alumni']['status'] !== '8') {
                $this->tracer_model->cek_status($data['alumni']['status']);
            }
        } else {
            redirect(base_url('tracer'));
        }

        if (!empty($_REQUEST)) {
            $f901 = $this->input->post("f901");
            $f902 = $this->input->post("f902");
            $f903 = $this->input->post("f903");
            $f904 = $this->input->post("f904");
            $f905 = $this->input->post("f905");
            $input = $this->input->post("input");
            if (empty($f901) && empty($f902) && empty($f903) && empty($f904) && empty($f905) && empty($input)) {
                $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert"><strong class="text-center"> Data Tidak Boleh Kosong ! !</strong></div>');
                redirect("tracer/ask9");
            }
            $this->tracer_model->update_question_9();
            redirect(base_url('tracer/ask10'));
        } else {
            $data['title'] = 'Question 9 | Tracer Study';
            $this->load->view('tracer/header', $data);
            $this->load->view('tracer/9');
            $this->load->view('tracer/footer');
        }
    }

    public function ask10() //Question 9
    {
        if ($this->session->userdata('logged_in')) {
            $data['alumni'] = $this->db->get_where('tbl_alumni', ['npm' => $this->session->userdata('npm')])->row_array();
            if ($data['alumni']['status'] !== '9') {
                $this->tracer_model->cek_status($data['alumni']['status']);
            }
        } else {
            redirect(base_url('tracer'));
        }

        if (!empty($_REQUEST)) {
            $this->tracer_model->update_question_10();
            // redirect(base_url('tracer/ask11'));
        } else {
            $data['title'] = 'Question 10 | Tracer Study';
            $this->load->view('tracer/header', $data);
            $this->load->view('tracer/10');
            $this->load->view('tracer/footer');
        }
    }

    public function ask11() //Question 10
    {
        if ($this->session->userdata('logged_in')) {
            $data['alumni'] = $this->db->get_where('tbl_alumni', ['npm' => $this->session->userdata('npm')])->row_array();
            if ($data['alumni']['status'] !== '10') {
                $this->tracer_model->cek_status($data['alumni']['status']);
            }
        } else {
            redirect(base_url('tracer'));
        }

        if (!empty($_REQUEST)) {
            $this->tracer_model->update_question_11();
            redirect(base_url('tracer/ask12'));
        } else {
            $data['title'] = 'Question 11 | Tracer Study';
            $this->load->view('tracer/header', $data);
            $this->load->view('tracer/11');
            $this->load->view('tracer/footer');
        }
    }



    public function ask12()
    {
        if ($this->session->userdata('logged_in')) {
            $data['alumni'] = $this->db->get_where('tbl_alumni', ['npm' => $this->session->userdata('npm')])->row_array();
            if ($data['alumni']['status'] !== '11') {
                $this->tracer_model->cek_status($data['alumni']['status']);
            }
        } else {
            redirect(base_url('tracer'));
        }

        if (!empty($_REQUEST)) {
            $this->tracer_model->update_question_12();
            redirect(base_url('tracer/ask13'));
        } else {
            $data['title'] = 'Question 12 | Tracer Study';
            $this->load->view('tracer/header', $data);
            $this->load->view('tracer/12');
            $this->load->view('tracer/footer');
        }
    }
    public function ask13()
    {
        if ($this->session->userdata('logged_in')) {
            $data['alumni'] = $this->db->get_where('tbl_alumni', ['npm' => $this->session->userdata('npm')])->row_array();
            if ($data['alumni']['status'] !== '12') {
                $this->tracer_model->cek_status($data['alumni']['status']);
            }
        } else {
            redirect(base_url('tracer'));
        }

        if (!empty($_REQUEST)) {
            $this->tracer_model->update_question_13();
            redirect(base_url('tracer/ask14'));
        } else {
            $data['title'] = 'Question 13 | Tracer Study';
            $this->load->view('tracer/header', $data);
            $this->load->view('tracer/13');
            $this->load->view('tracer/footer');
        }
    }
    public function ask14()
    {
        if ($this->session->userdata('logged_in')) {
            $data['alumni'] = $this->db->get_where('tbl_alumni', ['npm' => $this->session->userdata('npm')])->row_array();
            if ($data['alumni']['status'] !== '13') {
                $this->tracer_model->cek_status($data['alumni']['status']);
            }
        } else {
            redirect(base_url('tracer'));
        }

        if (!empty($_REQUEST)) {
            $this->tracer_model->update_question_14();
            redirect(base_url('tracer/ask15'));
        } else {
            $data['title'] = 'Question 14 | Tracer Study';
            $this->load->view('tracer/header', $data);
            $this->load->view('tracer/14');
            $this->load->view('tracer/footer');
        }
    }
    public function ask15()
    {
        if ($this->session->userdata('logged_in')) {
            $data['alumni'] = $this->db->get_where('tbl_alumni', ['npm' => $this->session->userdata('npm')])->row_array();
            if ($data['alumni']['status'] !== '14') {
                $this->tracer_model->cek_status($data['alumni']['status']);
            }
        } else {
            redirect(base_url('tracer'));
        }

        if (!empty($_REQUEST)) {
            $this->tracer_model->update_question_15();
            redirect(base_url('tracer/ask16'));
        } else {
            $data['title'] = 'Question 15 | Tracer Study';
            $this->load->view('tracer/header', $data);
            $this->load->view('tracer/15');
            $this->load->view('tracer/footer');
        }
    }

    public function ask16() //Question 11
    {
        if ($this->session->userdata('logged_in')) {
            $data['alumni'] = $this->db->get_where('tbl_alumni', ['npm' => $this->session->userdata('npm')])->row_array();
            if ($data['alumni']['status'] !== '15') {
                $this->tracer_model->cek_status($data['alumni']['status']);
            }
        } else {
            redirect(base_url('tracer'));
        }

        if (!empty($_REQUEST)) {
            $f1601 = $this->input->post("f1601");
            $f1602 = $this->input->post("f1602");
            $f1603 = $this->input->post("f1603");
            $f1604 = $this->input->post("f1604");
            $f1605 = $this->input->post("f1605");
            $f1606 = $this->input->post("f1606");
            $f1607 = $this->input->post("f1607");
            $f1608 = $this->input->post("f1608");
            $f1609 = $this->input->post("f1609");
            $f1610 = $this->input->post("f1610");
            $f1611 = $this->input->post("f1611");
            $f1612 = $this->input->post("f1612");
            $f1613 = $this->input->post("f1613");
            $input = $this->input->post("input");
            if (empty($f1601) && empty($f1602) && empty($f1603) && empty($f1604) && empty($f1605) && empty($f1606) && empty($f1607) && empty($f1608) && empty($f1609) && empty($f1610) && empty($f1611) && empty($f1612) && empty($f1613) && empty($input)) {
                $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert"><strong class="text-center"> Data Tidak Boleh Kosong ! !</strong></div>');
                redirect("tracer/ask16");
            }
            $this->tracer_model->update_question_11();
            redirect(base_url('tracer/ask17'));
        } else {
            $data['title'] = 'Question 16 | Tracer Study';
            $this->load->view('tracer/header', $data);
            $this->load->view('tracer/16');
            $this->load->view('tracer/footer');
        }
    }

    public function ask17() //Question 12
    {
        if ($this->session->userdata('logged_in')) {
            $data['alumni'] = $this->db->get_where('tbl_alumni', ['npm' => $this->session->userdata('npm')])->row_array();
            if ($data['alumni']['status'] !== '16') {
                $this->tracer_model->cek_status($data['alumni']['status']);
            }
        } else {
            redirect(base_url('tracer'));
        }

        if (!empty($_REQUEST)) {
            $this->tracer_model->update_question_12();
            redirect(base_url('tracer/ask18'));
        } else {
            $data['title'] = 'Question 17 | Tracer Study';
            $this->load->view('tracer/header', $data);
            $this->load->view('tracer/17');
            $this->load->view('tracer/footer');
        }
    }

    public function ask18() //Question 13
    {
        if ($this->session->userdata('logged_in')) {
            $data['alumni'] = $this->db->get_where('tbl_alumni', ['npm' => $this->session->userdata('npm')])->row_array();
            if ($data['alumni']['status'] !== '17') {
                $this->tracer_model->cek_status($data['alumni']['status']);
            }
        } else {
            redirect(base_url('tracer'));
        }

        if (!empty($_REQUEST)) {
            $this->tracer_model->update_question_13();
            redirect(base_url('tracer/finish'));
        } else {
            $data['title'] = 'Question 18 | Tracer Study';
            $this->load->view('tracer/header', $data);
            $this->load->view('tracer/18');
            $this->load->view('tracer/footer');
        }
    }

    public function finish()
    {
        if ($this->session->userdata('logged_in')) {
            $data['alumni'] = $this->db->get_where('tbl_alumni', ['npm' => $this->session->userdata('npm')])->row_array();
            if ($data['alumni']['status'] !== '18') {
                $this->tracer_model->cek_status($data['alumni']['status']);
            }
        } else {
            redirect(base_url('tracer'));
        }

        $data['title'] = 'Finish | Tracer Study';
        $this->load->view('tracer/header', $data);
        $this->load->view('tracer/finish');
        $this->load->view('tracer/footer');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('welcome');
    }
}
