<?php

defined('BASEPATH') or exit('No direct script access allowed');

class tugas_akhir_model extends CI_Model
{

    public function tampil_data()
    {
        return $this->db->get('tugas_akhir');
    }

    public function input_data()
    {
        $data = array(
            'judul' => $this->input->post('judul', TRUE),
            'file' => $this->input->post('file', TRUE),
            'nama_mahasiswa' => $this->input->post('nama_mahasiswa', TRUE),
            'nama_pembimbing1' => $this->input->post('nama_pembimbing1', TRUE),
            'nama_pembimbing2' => $this->input->post('nama_pembimbing2', TRUE),
        );
        $this->db->insert('tugas_akhir', $data);
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

/* End of file tugas_akhir_model.php */
