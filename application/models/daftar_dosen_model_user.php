<?php

defined('BASEPATH') or exit('No direct script access allowed');

class daftar_dosen_model_user extends CI_Model
{

    public function tampil_data()
    {
        return $this->db->get('daftar_dosen');
    }

    public function input_data()
    {

        $data = array(
            'kode_dosen' => $this->input->post('kode_dosen', TRUE),
            'nama_dosen' => $this->input->post('nama_dosen', TRUE),
            'nip_dosen' => $this->input->post('nip', TRUE),
            'image' => $_FILES['image']['name'],
            'bidang_keahlian' => $this->input->post('bidang_keahlian', TRUE),
            'no_hp' => $this->input->post('no_hp', TRUE)
        );
        $this->db->insert('daftar_dosen', $data);
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
