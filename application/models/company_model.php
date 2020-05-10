<?php

class Company_model extends CI_Model
{
    public function sign_up()
    {
        $nama = $this->input->post('nama_perusahaan');
        $jenis = $this->input->post('jenis_perusahaan');
        $email = $this->input->post('email_perusahaan');
        $password_1 = $this->input->post('password_1');

        $data = array(
            'nama_pt' => $nama,
            'jenis_pt' => $jenis,
            'email_pt' => $email,
            'password' => password_hash($password_1, PASSWORD_DEFAULT),
        );
        $this->db->insert('mst_company', $data);
    }

    public function sign_in()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $cek_company = $this->db->get_where('mst_company', ['email_pt' => $email])->row_array();
        if ($cek_company) {
            if (password_verify($password, $cek_company['password'])) {
                if ($cek_company['is_active'] == 0) {
                    $this->session->set_flashdata('message', '<div class="alert alert-warning text-center" role="alert">User Is Not Active !, Please Call Our Support</div>');
                    redirect('login/perusahaan');
                } else {
                    $sess_data = array(
                        'email' => $cek_company['email_pt'],
                        'nama' => $cek_company['nama_pt'],
                        'jenis' => $cek_company['jenis_pt'],
                        'logged_in' => TRUE,
                    );
                    $this->session->set_userdata($sess_data);
                    redirect('backend/Dashboard/company', $sess_data);
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">Password Incorrect!</div>');
                redirect('login/perusahaan');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">Email Not Found!</div>');
            redirect('login/perusahaan');
        }
    }
}
