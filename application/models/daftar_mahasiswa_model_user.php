<?php

defined('BASEPATH') or exit('No direct script access allowed');

class daftar_mahasiswa_model_user extends CI_Model
{

    public function tampil_data()
    {
        return $this->db->get('daftar_mahasiswa');
    }
}
    
    /* End of file daftar_mahasiswa_model.php */
