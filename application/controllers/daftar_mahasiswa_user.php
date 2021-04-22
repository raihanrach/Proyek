<?php

defined('BASEPATH') or exit('No direct script access allowed');

class daftar_mahasiswa_user extends CI_Controller
{

    public function index()
    {
        // $data['title'] = 'Profil Saya';
        $data['daftar_mahasiswa'] = $this->daftar_mahasiswa_model_user->tampil_data()->result_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('template/header', $data);
        $this->load->view('Template/sidebar_user', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('user/daftar_mahasiswa_user', $data);
        $this->load->view('template/footer');
    }

    public function detail($id_mahasiswa)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['daftar_mahasiswa'] = $this->detail_mahasiswa_model->tampil_data('daftar_mahasiswa')->result_array();


        $this->load->view('template/header', $data);
        $this->load->view('Template/sidebar_user', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('user/daftar_mahasiswa_user', $data);
        $this->load->view('template/footer');
    }
}

/* End of file daftar_mahasiswa.php */
