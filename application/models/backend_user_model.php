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
                ];
                $this->session->set_userdata($sess_data);
                redirect('backend/dashboard/profile');
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

    public function getMenuKaki($table)
    {
        return $this->db->get($table);
    }

    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
