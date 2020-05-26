<?php

class Company_model extends CI_Model
{
    public function sign_up()
    {
        $nama = $this->input->post('nama_perusahaan');
        $jenis = $this->input->post('jenis_perusahaan');
        $email = $this->input->post('email_perusahaan');
        $password_1 = $this->input->post('password_1');

        $kode = $this->db->select('kode_pt')->from('mst_company')->limit(1)->order_by('id', 'DESC')->get()->row_array();
        $kode_pt = "CP" . (substr($kode['kode_pt'], 2) + 1);

        $data = array(
            'kode_pt' => $kode_pt,
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
                } elseif ($cek_company['is_active'] == 1) {
                    if (!empty($cek_company['file_mou'])) {
                        $this->session->set_flashdata('message', '<div class="alert alert-warning text-center" role="alert">MOU Are Already Uploaded!, Please Wait Or Call Our Support</div>');
                        redirect('login/perusahaan');
                    }
                    $sess_data = array(
                        'kode' => $cek_company['kode_pt'],
                        'nama' => $cek_company['nama_pt'],
                        'jenis' => $cek_company['jenis_pt'],
                        'email' => $cek_company['email_pt'],
                        'deskripsi' => $cek_company['deskripsi'],
                        'date_input' => $cek_company['date_input'],
                        'image' => $cek_company['image'],
                        'logged_in' => TRUE,
                    );
                    $this->session->set_userdata($sess_data);
                    redirect('login/mou', $sess_data);
                } else {
                    $sess_data = array(
                        'kode' => $cek_company['kode_pt'],
                        'nama' => $cek_company['nama_pt'],
                        'jenis' => $cek_company['jenis_pt'],
                        'email' => $cek_company['email_pt'],
                        'deskripsi' => $cek_company['deskripsi'],
                        'date_input' => $cek_company['date_input'],
                        'image' => $cek_company['image'],
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

    public function get_data_by_kode($data, $table)
    {
        $this->db->order_by('id', 'DESC');
        return $this->db->get_where($table, $data);
    }

    public function get_data_by_id($data, $table)
    {
        return $this->db->get_where($table, $data);
    }

    public function delete_data_by_id($data, $table)
    {
        return $this->db->delete($table, $data);
    }

    public function get_total_data($data, $table)
    {
        // $this->db->get_where($table, $data);
        $this->db->where('kode_pt', $data);
        $this->db->from($table);
        return $this->db->count_all_results();
    }

    public function get_total_apply($kode, $table)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where('kode_pt', $kode);
        return $this->db->count_all_results();
    }

    public function get_apply_per_month($kode, $table)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->join('tbl_vacancy', $table . '.id_vacancy = tbl_vacancy.id');
        $this->db->where('kode_pt', $kode);
        $this->db->where('MONTH(date_apply)', date('m'));
        $this->db->where('YEAR(date_apply)', date('Y'));
        $this->db->order_by('id', 'DESC');
        return $this->db->count_all_results();;
    }

    public function get_latest_vacancy($data, $table)
    {
        // return $this->db->query("SELECT * FROM $table WHERE kode_pt='3' ORDER BY ID DESC LIMIT 1");
        $this->db->select('job_title');
        $this->db->order_by('id', 'DESC');
        $this->db->limit(1);
        return $this->db->get_where($table, $data);
    }

    public function get_data_apply($kode_pt, $table)
    {
        $this->db->select('v.job_title job_title, a.id id, a.nama nama, a.email email, a.jenis_kelamin jenis_kelamin, a.posisi posisi, a.cv cv, a.date_apply date_apply, a.status status');
        $this->db->from($table . ' a');
        $this->db->join('tbl_vacancy v', 'a.id_vacancy = v.id');
        $this->db->where('a.kode_pt', $kode_pt);
        $this->db->order_by('a.id', 'DESC');
        return $this->db->get();
    }

    public function get_data_apply_per_status($kode_pt, $status, $table)
    {
        // $this->db->select('*');
        // $this->db->from($table);
        // $this->db->join('tbl_vacancy', $table . '.id_vacancy = tbl_vacancy.id');
        // $this->db->where($table . '.kode_pt', $kode_pt);
        // $this->db->where('status', $status);
        // $this->db->order_by($table . '.id', 'DESC');

        $this->db->select('v.job_title job_title, a.id id, a.nama nama, a.email email, a.jenis_kelamin jenis_kelamin, a.posisi posisi, a.cv cv, a.date_apply date_apply, a.status status');
        $this->db->from($table . ' a');
        $this->db->join('tbl_vacancy v', 'a.id_vacancy = v.id');
        $this->db->where('a.kode_pt', $kode_pt);
        $this->db->where('a.status', $status);
        $this->db->order_by('a.id', 'DESC');
        return $this->db->get();
    }


    public function get_data_apply_by_id($id, $table)
    {
        $this->db->select('v.job_title job_title, a.id id, a.nama nama, a.email email, a.jenis_kelamin jenis_kelamin, a.posisi posisi, a.cv cv, a.date_apply date_apply, a.status status, a.pesan pesan');
        $this->db->from($table . ' a');
        $this->db->join('tbl_vacancy v', 'a.id_vacancy = v.id');
        $this->db->where('a.id', $id);
        $this->db->order_by('a.id', 'DESC');
        return $this->db->get();
    }

    public function update_data_by_kode($kode, $data, $table)
    {
        $this->db->where('kode_pt', $kode);
        $update_data = $this->db->update($table, $data);
        return ($update_data) ? TRUE : FALSE;
    }

    public function update_data_by_id($id, $data, $table)
    {
        $this->db->where('id', $id);
        $update_data = $this->db->update($table, $data);
        return ($update_data) ? "200" : "100";
    }

    public function update_upload($kode, $data_update)
    {
        $this->db->where('kode_pt', $kode);
        $this->db->update('mst_company', $data_update);
    }
}
