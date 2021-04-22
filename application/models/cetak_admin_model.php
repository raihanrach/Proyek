<?php

defined('BASEPATH') or exit('No direct script access allowed');

class cetak_admin_model extends CI_Model
{
    public function view()
    {
        $this->db->select('judul,file,nama_mahasiswa,nama_pembimbing1,nama_pembimbing2');
        $query = $this->db->get('tugas_akhir');
        return $query->result();
    }
}


/* End of file cetak_model.php */
