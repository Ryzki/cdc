<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tracer extends CI_Controller
{
    public function index()
    {
        // echo "aaaaa";
        $this->load->view('tracer/header');
        $this->load->view('tracer/main');
        $this->load->view('tracer/footer');
    }
}
