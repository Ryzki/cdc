<?php

class Pages extends CI_Controller
{
    public function pagesDetil()
    {
        if (isset($_GET['seq'])) {
            $where = array(
                'id' => $_GET['seq'],
            );

            $data['title'] = "Pages Detail | Universitas Kanjuruhan Malang";
            $data['pages'] = $this->Landing_page_model->get_data_by_id($where, 'tbl_artikel')->result();
            $data['footer'] = $this->Landing_page_model->getKaki('tbl_footer')->result();
            // $this->load->view('tracer/header', $data);
            $this->load->view('landing-page/header_blog', $data);
            $this->load->view('landing-page/blogDetil');
            $this->load->view('landing-page/footer');
        }
    }
}
