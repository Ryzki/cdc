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
        $this->form_validation->set_rules('opPerkuliahan', 'opPerkuliahan', 'required', [
            'required' => 'field is required.'
        ]);
        $this->form_validation->set_rules('opDemonstrasi', 'opDemonstrasi', 'required', [
            'required' => 'field is required.'
        ]);
        $this->form_validation->set_rules('opPartisipasi', 'opPartisipasi', 'required', [
            'required' => 'field is required.'
        ]);
        $this->form_validation->set_rules('opMagang', 'opMagang', 'required', [
            'required' => 'field is required.'
        ]);
        $this->form_validation->set_rules('opPraktikum', 'opPraktikum', 'required', [
            'required' => 'field is required.'
        ]);
        $this->form_validation->set_rules('opKerjaLapangan', 'opKerjaLapangan', 'required', [
            'required' => 'field is required.'
        ]);
        $this->form_validation->set_rules('opDiskusi', 'opDiskusi', 'required', [
            'required' => 'field is required.'
        ]);

        if ($this->form_validation->run() == TRUE) {
            redirect('Tracer/ask2');
        } else {
            $this->load->view('tracer/header');
            $this->load->view('tracer/satu');
            $this->load->view('tracer/footer');
        }
    }
    public function ask2()
    {
        $this->form_validation->set_rules('opCariKerja', 'opCariKerja', 'required', [
            'required' => 'field is required.'
        ]);
        if ($this->form_validation->run() == TRUE) {
            redirect('Tracer/ask3');
        } else {
            $this->load->view('tracer/header');
            $this->load->view('tracer/dua');
            $this->load->view('tracer/footer');
        }
    }
    public function ask3()
    {
        $this->load->view('tracer/header');
        $this->load->view('tracer/tiga');
        $this->load->view('tracer/footer');
    }
}
