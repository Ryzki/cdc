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
            redirect(base_url('tracer/ask2'));
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
            redirect('tracer/ask3');
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
    public function ask4()
    {
        $this->load->view('tracer/header');
        $this->load->view('tracer/empat');
        $this->load->view('tracer/footer');
    }
    public function ask5()
    {
        $this->load->view('tracer/header');
        $this->load->view('tracer/lima');
        $this->load->view('tracer/footer');
    }
    public function ask6()
    {
        $this->load->view('tracer/header');
        $this->load->view('tracer/enam');
        $this->load->view('tracer/footer');
    }
    public function ask7()
    {
        $this->load->view('tracer/header');
        $this->load->view('tracer/tujuh');
        $this->load->view('tracer/footer');
    }
    public function ask8()
    {
        $this->load->view('tracer/header');
        $this->load->view('tracer/delapan');
        $this->load->view('tracer/footer');
    }
    public function ask9()
    {
        $this->load->view('tracer/header');
        $this->load->view('tracer/sembilan');
        $this->load->view('tracer/footer');
    }
    public function ask10()
    {
        $this->load->view('tracer/header');
        $this->load->view('tracer/sepuluh');
        $this->load->view('tracer/footer');
    }
    public function ask11()
    {
        $this->load->view('tracer/header');
        $this->load->view('tracer/sebelas');
        $this->load->view('tracer/footer');
    }
    public function ask12()
    {
        $this->load->view('tracer/header');
        $this->load->view('tracer/duabelas');
        $this->load->view('tracer/footer');
    }
    public function ask13()
    {
        $this->load->view('tracer/header');
        $this->load->view('tracer/tigabelas');
        $this->load->view('tracer/footer');
    }
    public function ask14()
    {
        $this->load->view('tracer/header');
        $this->load->view('tracer/empatbelas');
        $this->load->view('tracer/footer');
    }
    public function ask15()
    {
        $this->load->view('tracer/header');
        $this->load->view('tracer/limabelas');
        $this->load->view('tracer/footer');
    }
    public function ask16()
    {
        $this->load->view('tracer/header');
        $this->load->view('tracer/enambelas');
        $this->load->view('tracer/footer');
    }
    public function ask17()
    {
        $this->load->view('tracer/header');
        $this->load->view('tracer/tujuhbelas');
        $this->load->view('tracer/footer');
    }
    public function ask18()
    {
        $this->load->view('tracer/header');
        $this->load->view('tracer/delapanbelas');
        $this->load->view('tracer/footer');
    }
}
