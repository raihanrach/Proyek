<?php

defined('BASEPATH') or exit('No direct script access allowed');

class detail_model extends CI_Model
{

    public function tampil_data($table)
    {
        return $this->db->get($table);
    }

    public function ambil_id_daftar_dosen($id_dosen)
    {
        // $id_dosen = $this->input->post('id', true);
        $hasil = $this->db->where('id_dosen', $id_dosen)->get('daftar_dosen');

        return $hasil->result_array();
    }
}

/* End of file detail_model.php */
