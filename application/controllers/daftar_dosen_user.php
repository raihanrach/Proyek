<?php

defined('BASEPATH') or exit('No direct script access allowed');

class daftar_dosen_user extends CI_Controller
{

    public function index()
    {

        $data['daftar_dosen'] = $this->daftar_dosen_model_user->tampil_data()->result_array();
        $data1['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('template/header', $data);
        $this->load->view('Template/sidebar_user', $data);
        $this->load->view('template/topbar', $data1);
        $this->load->view('user/daftar_dosen_user', $data);
        $this->load->view('template/footer');
    }

    public function data_dosen()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/header', $data);
        $this->load->view('Template/sidebar_user', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('user/data_dosen', $data);
        $this->load->view('template/footer');
    }

    public function detail($id_dosen)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['daftar_dosen'] = $this->detail_model->tampil_data('daftar_dosen')->result_array();
        $data['detail'] = $this->detail_model->ambil_id_daftar_dosen($id_dosen);


        $this->load->view('template/header', $data);
        $this->load->view('Template/sidebar_user', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('user/daftar_dosen_detail', $data);
        $this->load->view('template/footer');
    }
}
