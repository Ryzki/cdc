<?php

class Tracer_model extends CI_Model
{
    public function login()
    {
        $npm = $this->input->post('npm');
        $telp = $this->input->post('phone');
        $email = $this->input->post('email');

        $cek_alumni = $this->db->get_where('tbl_alumni', ['npm' => $npm, 'telp' => $telp, 'email' => $email])->row_array();
        if ($cek_alumni) {
            $sess_data = [
                'npm' => $cek_alumni['npm'],
                'tahun_lulus' => $cek_alumni['tahun_lulus'],
                'kode_prodi' => $cek_alumni['kode_prodi'],
                'nama' => $cek_alumni['nama'],
                'telp' => $cek_alumni['telp'],
                'email' => $cek_alumni['email']
            ];
            $this->session->set_userdata($sess_data);
            redirect('tracer/sambutan', $sess_data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Pastikan Data Alumni Sesuai!</div>');
            redirect('tracer');
        }
    }

    public function insert_data_wajib()
    {
        $data = array(
            'npm' => $this->input->post(''),
            'kode_pt' => $this->input->post(''),
            'tahun_lulus' => $this->input->post(''),
            'kode_prodi' => $this->input->post(''),
            'nama' => $this->input->post(''),
            'telp' => $this->input->post(''),
            'email' => $this->input->post(''),
            'f501' => $this->input->post('f501'),
            'f502' => $this->input->post('f502'),
            'f503' => $this->input->post('f503'),
            'f1201' => $this->input->post('f1201'),
            'f1202' => $this->input->post('f1202'),
            'f8' => $this->input->post('f8'),
            'f14' => $this->input->post('f14'),
            'f15' => $this->input->post('f15'),
            'f1301' => $this->input->post('f1301'),
            'f1302' => $this->input->post('f1302'),
            'f1303' => $this->input->post('f1303'),
        );
        $this->db->insert('tbl_tracer', $data);
    }
}
