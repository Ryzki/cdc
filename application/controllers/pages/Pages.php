<?php

class Pages extends CI_Controller
{
    public function pagesDetil()
    {
        if (isset($_GET['seq'])) {
            $where = array(
                'id' => $_GET['seq'],
            );
            $data['logo'] = $this->Backend_user_model->tampil_data('tbl_logo')->result();
            $data['menu'] = $this->Landing_page_model->getMenu();
            $data['submenu'] = $this->Landing_page_model->getSubMenu();
            $data['title'] = "Pages Detail | Universitas Kanjuruhan Malang";
            $data['pages'] = $this->Landing_page_model->get_data_by_id($where, 'tbl_artikel')->result();
            $data['footer'] = $this->Landing_page_model->getKaki('tbl_footer')->result();
            // $this->load->view('tracer/header', $data);
            $this->load->view('landing-page/header_blog', $data);
            $this->load->view('landing-page/blogDetil');
            $this->load->view('landing-page/footer_minimalis');
        }
    }

    public function listArtikel()
    {
        $data['title'] = "Artikel | Universitas Kanjuruhan Malang";
        $data['menu'] = $this->Landing_page_model->getMenu();
        $data['submenu'] = $this->Landing_page_model->getSubMenu();
        $data['logo'] = $this->Backend_user_model->tampil_data('tbl_logo')->result();
        $data['artikel'] = $this->Landing_page_model->get_data('tbl_artikel')->result();
        $data['footer'] = $this->Landing_page_model->getKaki('tbl_footer')->result();

        $this->load->view('landing-page/header_blog', $data);
        $this->load->view('landing-page/blog');
        $this->load->view('landing-page/footer');
    }
}
