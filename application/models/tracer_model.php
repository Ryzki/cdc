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
                'email' => $cek_alumni['email'],
                'status' => $cek_alumni['status'],
                'logged_in' => TRUE,
            ];
            $this->session->set_userdata($sess_data);
            $status_tracer = $this->session->userdata('status');
            if ($status_tracer == 0) {
                redirect('tracer/sambutan', $sess_data);
            } elseif ($status_tracer == 1) {
                redirect('tracer/ask_wajib', $sess_data);
            } elseif ($status_tracer == 2) {
                redirect('tracer/ask1', $sess_data);
            } elseif ($status_tracer == 3) {
                redirect('tracer/ask2', $sess_data);
            } elseif ($status_tracer == 4) {
                redirect('tracer/ask3', $sess_data);
            } elseif ($status_tracer == 5) {
                redirect('tracer/ask5', $sess_data);
            } elseif ($status_tracer == 6) {
                redirect('tracer/ask6', $sess_data);
            } elseif ($status_tracer == 7) {
                redirect('tracer/ask7', $sess_data);
            } elseif ($status_tracer == 8) {
                redirect('tracer/ask9', $sess_data);
            } elseif ($status_tracer == 9) {
                redirect('tracer/ask10', $sess_data);
            } elseif ($status_tracer == 10) {
                redirect('tracer/ask11', $sess_data);
            } elseif ($status_tracer == 11) {
                redirect('tracer/ask16', $sess_data);
            } elseif ($status_tracer == 12) {
                redirect('tracer/ask17', $sess_data);
            } elseif ($status_tracer == 13) {
                redirect('tracer/ask18', $sess_data);
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Pastikan Data Alumni Sesuai!</div>');
            redirect('tracer');
        }
    }

    public function insert_data_wajib()
    {
        $data = array(
            'npm' => $this->session->userdata('npm'),
            'kode_pt' => $this->session->userdata('kode_pt'),
            'tahun_lulus' => $this->session->userdata('tahun_lulus'),
            'kode_prodi' => $this->session->userdata('kode_prodi'),
            'nama' => $this->session->userdata('nama'),
            'telp' => $this->session->userdata('telp'),
            'email' => $this->session->userdata('email'),
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

        $npm = $this->session->userdata('npm');
        $data_update = array(
            'status' => '1',
        );
        $this->db->where('npm', $npm);
        $this->db->update('tbl_alumni', $data_update);
    }

    public function update_question_2()
    {
        $npm = $this->session->userdata('npm');
        $data = array(
            'f21' => $this->input->post('f21'),
            'f22' => $this->input->post('f22'),
            'f23' => $this->input->post('f23'),
            'f24' => $this->input->post('f24'),
            'f25' => $this->input->post('f25'),
            'f26' => $this->input->post('f26'),
            'f27' => $this->input->post('f27'),
        );
        $this->db->where('npm', $npm);
        $this->db->update('tbl_tracer', $data);

        $data_update = array(
            'status' => '2',
        );
        $this->db->where('npm', $npm);
        $this->db->update('tbl_alumni', $data_update);
    }

    public function update_question_3()
    {
        $npm = $this->session->userdata('npm');
        $data = array(
            'f301' => $this->input->post('f301'),
            'f302' => $this->input->post('f302'),
            'f303' => $this->input->post('f303'),
        );
        $this->db->where('npm', $npm);
        $this->db->update('tbl_tracer', $data);

        $data_update = array(
            'status' => '3',
        );
        $this->db->where('npm', $npm);
        $this->db->update('tbl_alumni', $data_update);
    }

    public function update_question_4()
    {
        $npm = $this->session->userdata('npm');
        $data = array(
            'f401' => $this->input->post('f401'),
            'f402' => $this->input->post('f402'),
            'f403' => $this->input->post('f403'),
            'f404' => $this->input->post('f404'),
            'f405' => $this->input->post('f405'),
            'f406' => $this->input->post('f406'),
            'f407' => $this->input->post('f407'),
            'f408' => $this->input->post('f408'),
            'f409' => $this->input->post('f409'),
            'f4010' => $this->input->post('f4010'),
            'f4011' => $this->input->post('f4011'),
            'f4012' => $this->input->post('f4012'),
            'f4013' => $this->input->post('f4013'),
            'f4014' => $this->input->post('f4014'),
            'f4015' => $this->input->post('f4015'),
            'f4016' => $this->input->post('f4016'),
        );
        $this->db->where('npm', $npm);
        $this->db->update('tbl_tracer', $data);

        $data_update = array(
            'status' => '4',
        );
        $this->db->where('npm', $npm);
        $this->db->update('tbl_alumni', $data_update);
    }

    public function update_question_5()
    {
        $npm = $this->session->userdata('npm');
        $data = array(
            'f6' => $this->input->post('f6'),
        );
        $this->db->where('npm', $npm);
        $this->db->update('tbl_tracer', $data);

        $data_update = array(
            'status' => '5',
        );
        $this->db->where('npm', $npm);
        $this->db->update('tbl_alumni', $data_update);
    }

    public function update_question_6()
    {
        $npm = $this->session->userdata('npm');
        $data = array(
            'f7' => $this->input->post('f7'),
        );
        $this->db->where('npm', $npm);
        $this->db->update('tbl_tracer', $data);

        $data_update = array(
            'status' => '6',
        );
        $this->db->where('npm', $npm);
        $this->db->update('tbl_alumni', $data_update);
    }

    public function update_question_7()
    {
        $npm = $this->session->userdata('npm');
        $data = array(
            'f7a' => $this->input->post('f7a'),
        );
        $this->db->where('npm', $npm);
        $this->db->update('tbl_tracer', $data);

        $data_update = array(
            'status' => '7',
        );
        $this->db->where('npm', $npm);
        $this->db->update('tbl_alumni', $data_update);
    }

    public function update_question_8()
    {
        $npm = $this->session->userdata('npm');
        $data = array(
            'f901' => $this->input->post('f901'),
            'f902' => $this->input->post('f902'),
            'f903' => $this->input->post('f903'),
            'f904' => $this->input->post('f904'),
            'f905' => $this->input->post('f905'),
            'f906' => $this->input->post('f906'),
        );
        $this->db->where('npm', $npm);
        $this->db->update('tbl_tracer', $data);

        $data_update = array(
            'status' => '8',
        );
        $this->db->where('npm', $npm);
        $this->db->update('tbl_alumni', $data_update);
    }

    public function update_question_9()
    {
        $npm = $this->session->userdata('npm');
        $data = array(
            'f1001' => $this->input->post('f1001'),
            'f1002' => $this->input->post('f1002'),
        );
        $this->db->where('npm', $npm);
        $this->db->update('tbl_tracer', $data);

        $data_update = array(
            'status' => '9',
        );
        $this->db->where('npm', $npm);
        $this->db->update('tbl_alumni', $data_update);

        if ($this->input->post('f1001') !== "1") {
            redirect('tracer/ask17');
        } else {
            redirect('tracer/ask11');
        }
    }

    public function update_question_10()
    {
        $npm = $this->session->userdata('npm');
        $data = array(
            'f1101' => $this->input->post('f1101'),
            'f1102' => $this->input->post('f1102'),
        );
        $this->db->where('npm', $npm);
        $this->db->update('tbl_tracer', $data);

        $data_update = array(
            'status' => '10',
        );
        $this->db->where('npm', $npm);
        $this->db->update('tbl_alumni', $data_update);
    }

    public function update_question_11()
    {
        $npm = $this->session->userdata('npm');
        $data = array(
            'f1601' => $this->input->post('f1601'),
            'f1602' => $this->input->post('f1602'),
            'f1603' => $this->input->post('f1603'),
            'f1604' => $this->input->post('f1604'),
            'f1605' => $this->input->post('f1605'),
            'f1606' => $this->input->post('f1606'),
            'f1607' => $this->input->post('f1607'),
            'f1608' => $this->input->post('f1608'),
            'f1609' => $this->input->post('f1609'),
            'f1610' => $this->input->post('f1610'),
            'f1611' => $this->input->post('f1611'),
            'f1612' => $this->input->post('f1612'),
            'f1613' => $this->input->post('f1613'),
            'f1614' => $this->input->post('f1614'),
        );
        $this->db->where('npm', $npm);
        $this->db->update('tbl_tracer', $data);

        $data_update = array(
            'status' => '11',
        );
        $this->db->where('npm', $npm);
        $this->db->update('tbl_alumni', $data_update);
    }

    public function update_question_12()
    {
        $npm = $this->session->userdata('npm');
        $data = array(
            'f171' => $this->input->post('f171'),
            'f173' => $this->input->post('f173'),
            'f175' => $this->input->post('f175'),
            'f175a' => $this->input->post('f175a'),
            'f177' => $this->input->post('f177'),
            'f179' => $this->input->post('f179'),
            'f1711' => $this->input->post('f1711'),
            'f1713' => $this->input->post('f1713'),
            'f1715' => $this->input->post('f1715'),
            'f1717' => $this->input->post('f1717'),
            'f1719' => $this->input->post('f1719'),
            'f1721' => $this->input->post('f1721'),
            'f1723' => $this->input->post('f1723'),
            'f1725' => $this->input->post('f1725'),
            'f1727' => $this->input->post('f1727'),
            'f1729' => $this->input->post('f1729'),
            'f1731' => $this->input->post('f1731'),
            'f1733' => $this->input->post('f1733'),
            'f1735' => $this->input->post('f1735'),
            'f1737' => $this->input->post('f1737'),
            'f1737a' => $this->input->post('f1737a'),
            'f1739' => $this->input->post('f1739'),
            'f1741' => $this->input->post('f1741'),
            'f1743' => $this->input->post('f1743'),
            'f1745' => $this->input->post('f1745'),
            'f1747' => $this->input->post('f1747'),
            'f1749' => $this->input->post('f1749'),
            'f1751' => $this->input->post('f1751'),
            'f1753' => $this->input->post('f1753'),
        );
        $this->db->where('npm', $npm);
        $this->db->update('tbl_tracer', $data);

        $data_update = array(
            'status' => '12',
        );
        $this->db->where('npm', $npm);
        $this->db->update('tbl_alumni', $data_update);
    }
    public function update_question_13()
    {
        $npm = $this->session->userdata('npm');
        $data = array(
            'f172b' => $this->input->post('f172b'),
            'f174b' => $this->input->post('f174b'),
            'f176b' => $this->input->post('f176b'),
            'f176ba' => $this->input->post('f176ba'),
            'f178b' => $this->input->post('f178b'),
            'f1710b' => $this->input->post('f1710b'),
            'f1712b' => $this->input->post('f1712b'),
            'f1714b' => $this->input->post('f1714b'),
            'f1716b' => $this->input->post('f1716b'),
            'f1718b' => $this->input->post('f1718b'),
            'f1720b' => $this->input->post('f1720b'),
            'f1722b' => $this->input->post('f1722b'),
            'f1724b' => $this->input->post('f1724b'),
            'f1726b' => $this->input->post('f1726b'),
            'f1728b' => $this->input->post('f1728b'),
            'f1730b' => $this->input->post('f1730b'),
            'f1732b' => $this->input->post('f1732b'),
            'f1734b' => $this->input->post('f1734b'),
            'f1736b' => $this->input->post('f1736b'),
            'f1738b' => $this->input->post('f1738b'),
            'f1738ba' => $this->input->post('f1738ba'),
            'f1740b' => $this->input->post('f1740b'),
            'f1742b' => $this->input->post('f1742b'),
            'f1744b' => $this->input->post('f1744b'),
            'f1746b' => $this->input->post('f1746b'),
            'f1748b' => $this->input->post('f1748b'),
            'f1750b' => $this->input->post('f1750b'),
            'f1752b' => $this->input->post('f1752b'),
            'f1754b' => $this->input->post('f1754b'),
        );
        $this->db->where('npm', $npm);
        $this->db->update('tbl_tracer', $data);

        $data_update = array(
            'status' => '13',
        );
        $this->db->where('npm', $npm);
        $this->db->update('tbl_alumni', $data_update);
    }
}
