<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tracer extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        // echo "aaaaa";
        $this->load->view('tracer/header');
        $this->load->view('tracer/main');
        $this->load->view('tracer/footer');
    }
    public function ask1()
    {
        // $this->form_validation->set_rules('opPerkuliahan', 'opPerkuliahan', 'required', [
        //     'required' => 'field is required.'
        // ]);
        // $this->form_validation->set_rules('opDemonstrasi', 'opDemonstrasi', 'required', [
        //     'required' => 'field is required.'
        // ]);
        // $this->form_validation->set_rules('opPartisipasi', 'opPartisipasi', 'required', [
        //     'required' => 'field is required.'
        // ]);
        // $this->form_validation->set_rules('opMagang', 'opMagang', 'required', [
        //     'required' => 'field is required.'
        // ]);
        // $this->form_validation->set_rules('opPraktikum', 'opPraktikum', 'required', [
        //     'required' => 'field is required.'
        // ]);
        // $this->form_validation->set_rules('opKerjaLapangan', 'opKerjaLapangan', 'required', [
        //     'required' => 'field is required.'
        // ]);
        // $this->form_validation->set_rules('opDiskusi', 'opDiskusi', 'required', [
        //     'required' => 'field is required.'
        // ]);

        if (!empty($_REQUEST)) {
            echo "PROSES";
            redirect(base_url('tracer/ask2'));
        } else {
            $this->load->view('tracer/header');
            $this->load->view('tracer/1');
            $this->load->view('tracer/footer');
        }


        // if ($this->form_validation->run() == TRUE) {
        //     redirect(base_url('tracer/ask2'));
        // } else {
        // }
    }
    public function ask2()
    {
        if (!empty($_REQUEST)) {
            echo "PROSES";
            redirect(base_url('tracer/ask3'));
        } else {
            $this->load->view('tracer/header');
            $this->load->view('tracer/2');
            $this->load->view('tracer/footer');
        }
    }
    public function ask3()
    {
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
            echo "PROSES";
            redirect(base_url('tracer/ask4'));
        } else {
            $this->load->view('tracer/header');
            $this->load->view('tracer/3');
            $this->load->view('tracer/footer');
        }
    }
    public function ask4()
    {
        if (!empty($_REQUEST)) {
            echo "PROSES";
            redirect(base_url('tracer/ask5'));
        } else {
            $this->load->view('tracer/header');
            $this->load->view('tracer/4');
            $this->load->view('tracer/footer');
        }
    }
    public function ask5()
    {
        if (!empty($_REQUEST)) {
            echo "PROSES";
            redirect(base_url('tracer/ask6'));
        } else {
            $this->load->view('tracer/header');
            $this->load->view('tracer/5');
            $this->load->view('tracer/footer');
        }
    }
    public function ask6()
    {
        if (!empty($_REQUEST)) {
            echo "PROSES";
            redirect(base_url('tracer/ask7'));
        } else {
            $this->load->view('tracer/header');
            $this->load->view('tracer/6');
            $this->load->view('tracer/footer');
        }
    }
    public function ask7()
    {
        if (!empty($_REQUEST)) {
            echo "PROSES";
            redirect(base_url('tracer/ask8'));
        } else {
            $this->load->view('tracer/header');
            $this->load->view('tracer/7');
            $this->load->view('tracer/footer');
        }
    }
    public function ask8()
    {
        if (!empty($_REQUEST)) {
            echo "PROSES";
            redirect(base_url('tracer/ask9'));
        } else {
            $this->load->view('tracer/header');
            $this->load->view('tracer/8');
            $this->load->view('tracer/footer');
        }
    }
    public function ask9()
    {
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
            echo "PROSES";
            redirect(base_url('tracer/ask10'));
        } else {
            $this->load->view('tracer/header');
            $this->load->view('tracer/9');
            $this->load->view('tracer/footer');
        }
    }
    public function ask10()
    {
        if (!empty($_REQUEST)) {
            echo "PROSES";
            redirect(base_url('tracer/ask11'));
        } else {
            $this->load->view('tracer/header');
            $this->load->view('tracer/10');
            $this->load->view('tracer/footer');
        }
    }
    public function ask11()
    {
        if (!empty($_REQUEST)) {
            echo "PROSES";
            redirect(base_url('tracer/ask12'));
        } else {
            $this->load->view('tracer/header');
            $this->load->view('tracer/11');
            $this->load->view('tracer/footer');
        }
    }
    public function ask12()
    {
        if (!empty($_REQUEST)) {
            echo "PROSES";
            redirect(base_url('tracer/ask13'));
        } else {
            $this->load->view('tracer/header');
            $this->load->view('tracer/12');
            $this->load->view('tracer/footer');
        }
    }
    public function ask13()
    {
        if (!empty($_REQUEST)) {
            echo "PROSES";
            redirect(base_url('tracer/ask14'));
        } else {
            $this->load->view('tracer/header');
            $this->load->view('tracer/13');
            $this->load->view('tracer/footer');
        }
    }
    public function ask14()
    {
        if (!empty($_REQUEST)) {
            echo "PROSES";
            redirect(base_url('tracer/ask15'));
        } else {
            $this->load->view('tracer/header');
            $this->load->view('tracer/14');
            $this->load->view('tracer/footer');
        }
    }
    public function ask15()
    {
        if (!empty($_REQUEST)) {
            echo "PROSES";
            redirect(base_url('tracer/ask16'));
        } else {
            $this->load->view('tracer/header');
            $this->load->view('tracer/15');
            $this->load->view('tracer/footer');
        }
    }
    public function ask16()
    {
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
            echo "PROSES";
            redirect(base_url('tracer/ask17'));
        } else {
            $this->load->view('tracer/header');
            $this->load->view('tracer/16');
            $this->load->view('tracer/footer');
        }
    }
    public function ask17()
    {
        if (!empty($_REQUEST)) {
            echo "PROSES";
            redirect(base_url('tracer/ask18'));
        } else {
            $this->load->view('tracer/header');
            $this->load->view('tracer/17');
            $this->load->view('tracer/footer');
        }
    }
    public function ask18()
    {
        if (!empty($_REQUEST)) {
            echo "PROSES";
            redirect(base_url('tracer/finish'));
        } else {
            $this->load->view('tracer/header');
            $this->load->view('tracer/18');
            $this->load->view('tracer/footer');
        }
    }
}
