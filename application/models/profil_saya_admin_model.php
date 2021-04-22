<?php

defined('BASEPATH') or exit('No direct script access allowed');

class profil_saya_admin_model extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('user');
    }

    public function update_data($where, $data, $table)
    {

        $this->db->where($where);
        $this->db->update($table, $data);
    }
}

/* End of file profil_saya_admin_model.php */
