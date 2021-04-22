<?php

defined('BASEPATH') or exit('No direct script access allowed');

class mahasiswa_bimbingan extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Mahasiswa Bimbingan';
        $data['daftar_mahasiswa'] = $this->daftar_mahasiswa_model_user->tampil_data()->result_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $data['si'] = $this->db->get_where('daftar_dosen', ['bidang_keahlian' => 'sistem informasi'])->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('admin/mahasiswa_bimbingan', $data);
        $this->load->view('template/footer');
    }
}

/* End of file mahasiswa_bimbingan.php */
