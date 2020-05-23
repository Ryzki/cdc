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

    public function getKaki($table)
    {
        return $this->db->get($table);
    }

    public function get_data($table)
    {

        return $this->db->get($table);
    }

    public function get_galeri_gb($table)
    {
        $this->db->distinct();
        $this->db->select('menu');
        return $this->db->get($table);
    }

    public function get_data_vacancy($table)
    {
        $this->db->select('v.kode_pt kode_pt, v.id id, v.nama_pt nama_pt, v.due_date due_date, v.position position, v.location location, v.requirement requirement, v.date_posted date_posted, m.image image, m.deskripsi deskripsi');
        $this->db->from($table . ' v');
        $this->db->join('mst_company m', 'v.kode_pt = m.kode_pt');
        $this->db->order_by('v.date_posted', 'DESC');
        $this->db->limit(4);
        return $this->db->get();
    }

    public function get_data_by_id($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function get_job_by_due_date($table)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where('due_date >= "' . date('Y-m-d') . '"');
        $this->db->order_by('due_date', 'DESC');
        return $this->db->get();
    }

    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }
}
