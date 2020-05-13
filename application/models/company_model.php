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
                        'kode' => $cek_company['kode_pt'],
                        'nama' => $cek_company['nama_pt'],
                        'jenis' => $cek_company['jenis_pt'],
                        'email' => $cek_company['email_pt'],
                        'deskripsi' => $cek_company['deskripsi'],
                        'date_input' => $cek_company['date_input'],
                        'logged_in' => TRUE,
                    );
                    $this->session->set_userdata($sess_data);
                    redirect('backend/Company', $sess_data);
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

    public function get_image($data, $table)
    {
        $this->db->select('image');
        return $this->db->get_where($table, $data);
    }

    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function get_data($table)
    {
        return $this->db->get($table);
    }

    public function get_data_by_id($data, $table)
    {
        return $this->db->get_where($table, $data);
    }

    public function delete_data_by_id($data, $table)
    {
        return $this->db->delete($table, $data);
    }

    public function get_total_vacancy($data, $table)
    {
        $this->db->get_where($table, $data);
        return $this->db->count_all_results();
    }

    public function get_total_apply($data, $table)
    {
        $this->db->get_where($table, $data);
        return $this->db->count_all_results();
    }

    public function get_latest_vacancy($data, $table)
    {
        // return $this->db->query("SELECT * FROM $table WHERE kode_pt='3' ORDER BY ID DESC LIMIT 1");
        $this->db->select('job_title');
        $this->db->order_by('id', 'DESC');
        $this->db->limit(1);
        return $this->db->get_where($table, $data);
    }
}
