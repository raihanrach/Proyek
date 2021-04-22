<?php

defined('BASEPATH') or exit('No direct script access allowed');

class daftar_mahasiswa_model extends CI_Model
{

    public function tampil_data()
    {
        return $this->db->get('daftar_mahasiswa');
    }

    public function input_data()
    {

        $data = array(
            'kode_mahasiswa' => $this->input->post('kode_mahasiswa', TRUE),
            'nama_mahasiswa' => $this->input->post('nama_mahasiswa', TRUE),
            'nim_mahasiswa' => $this->input->post('nim', TRUE),
            'image' => $_FILES['image']['name']
        );
        $this->db->insert('daftar_mahasiswa', $data);
    }

    public function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table)
    {

        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
    
    /* End of file daftar_mahasiswa_model.php */
