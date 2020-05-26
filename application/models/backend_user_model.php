<?php

class Backend_user_model extends CI_Model
{
    // function __construct()
    // {
    //     parent::__construct();

    //     if (!isset($this->session->userdata['username'])) {
    //         $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    //             Anda belum login!
    //             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    //               <span aria-hidden="true">&times;</span>
    //             </button>
    //           </div>');
    //         redirect('backend/dashboard/login');
    //     }
    // }

    public function getLoginData($user, $pass)
    {
        $u = $user;
        $p = $pass;

        $userdata = $this->db->get_where('user', ['username' => $u])->row_array();
        if ($userdata) {
            if (password_verify($p, $userdata['password'])) {
                $sess_data = [
                    'logged_in' => TRUE,
                    'username' => $userdata['username'],
                    'password' => $userdata['password'],
                    'level' => $userdata['level'],
                    'image' => $userdata['image'],
                ];
                $this->session->set_userdata($sess_data);
                redirect('backend/dashboard/admin');
            }
        }

        // if (count($userdata->result()) > 0) {
        //     foreach ($userdata->result() as $qck) {
        //         foreach ($userdata->result() as $ck) {
        //             $sess_data['logged_in'] = TRUE;
        //             $sess_data['username'] = $ck->username;
        //             $sess_data['password'] = $ck->password;
        //             $sess_data['level'] = $ck->level;
        //             $this->session->set_userdata($sess_data);
        //         }
        //         redirect('administrator/dashboard');
        //     }
        // }
        else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('backend/login');
        }
    }

    public function tampil_data($table)
    {
        return $this->db->get($table);
    }

    public function tampil_data_aksi($where, $table)
    {

        return $this->db->get_where($table, $where);
    }

    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function update_data($where, $data, $table)
    {

        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function hapus_all()
    {
        $delete_data = $this->db->query('delete from tbl_testimoni');
        if ($delete_data) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function hapus_logo()
    {
        $delete_data = $this->db->query('delete from tbl_logo');
        if ($delete_data) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function hapus_submenu($id)
    {
        $delete_data = $this->db->query('delete from tbl_submenu where link like "%seq=' . $id . '%"');
        if ($delete_data) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function tambah_user()
    {
        //ambil nama file
        $temp_filename = basename($_FILES["user"]["name"]);

        $config['upload_path']          = './assets/images/user/';
        $config['allowed_types']        = 'jpg|png|gif';
        $config['file_name']            = $temp_filename;
        $config['overwrite']            = true;
        $config['max_size']             = 0; // unlimited
        $config['max_width']            = 0;
        $config['max_height']           = 0;

        $this->load->library('upload', $config);

        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $password1 = $this->input->post('password1');
        $password2 = $this->input->post('password2');

        //buat kondisi jika password1 dan 2 tidak sama maka eror
        if ($password1 <> $password2) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismiss text-center" role="alert">Password tidak sama</div>');
            redirect('backend/dashboard/user');
        }
        //buat kondisi jika username sudah pernah dipakai jangan lanjut
        $where = array('username' => $username);
        $double = $this->db->get_where('user', $where)->row_array();

        if ($double) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismiss text-center" role="alert">Username sudah ada didatabase</div>');
            redirect('backend/dashboard/user');
        }


        $data = array(
            'nama' => $nama,
            'username' => $username,
            'password' => password_hash($password1, PASSWORD_DEFAULT),
            'image' => $temp_filename,
            'email' => $email
        );
        $this->db->insert('user', $data);
        if (!$this->upload->do_upload('user')) {
            redirect('backend/dashboard/user');
        } else {
            redirect('backend/dashboard/user');
        }
    }

    public function update_upload($username, $data_update)
    {
        $this->db->where('username', $username);
        $this->db->update('user', $data_update);
    }

    public function get_total_data($table)
    {
        // $this->db->get_where($table, $data);
        // $this->db->where('id', $data);
        $this->db->from($table);
        return $this->db->count_all_results();
    }

    public function get_latest_vacancy($table)
    {
        // return $this->db->query("SELECT * FROM $table WHERE kode_pt='3' ORDER BY ID DESC LIMIT 1");
        $this->db->select('job_title');
        $this->db->order_by('id', 'DESC');
        $this->db->limit(1);
        return $this->db->get($table);
    }

    public function get_total_apply($table)
    {
        // $this->db->select('*');
        $this->db->from($table);
        // $this->db->where('kode_pt', $kode);
        return $this->db->count_all_results();
    }
}
