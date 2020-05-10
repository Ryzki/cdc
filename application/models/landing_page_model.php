<?php

class Landing_page_model extends CI_Model
{
    public function getMenu()
    {
        return $data['menu'] = $this->db->get('tbl_menu')->result();
    }

    public function getSubMenu()
    {
        return $data['submenu'] = $this->db->get('tbl_submenu')->result();
    }
}
