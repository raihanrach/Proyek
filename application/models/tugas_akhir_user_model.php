<?php

defined('BASEPATH') or exit('No direct script access allowed');

class tugas_akhir_user_model extends CI_Model
{

    public function tampil_data()
    {
        return $this->db->get('tugas_akhir');
    }
}

/* End of file tugas_akhir_user_model.php */
