<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Master extends CI_Model
{
   public function getallwilayah()
    {
        return $this->db->get('master_cabang');
    }
    public function cariData()
    {
        $keyword = $this->input->post('keyword');
        $this->db->like('name_cabang', $keyword);
        $this->db->or_like('id_cabang', $keyword);
        return $this->db->get('master_cabang')->result_array();
    }
}
