<?php

defined('BASEPATH') or exit('No direct script access allowed');

class si extends CI_Controller
{

    public function index()
    {
        $data1['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['si'] = $this->db->get_where('daftar_dosen', ['bidang_keahlian' => 'sistem informasi'])->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar_user', $data);
        $this->load->view('template/topbar', $data1);
        $this->load->view('user/si', $data);
        $this->load->view('template/footer');
    }

    public function jarkom()
    {
        $data1['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['si'] = $this->db->get_where('daftar_dosen', ['bidang_keahlian' => 'jarkom'])->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar_user', $data);
        $this->load->view('template/topbar', $data1);
        $this->load->view('user/si', $data);
        $this->load->view('template/footer');
    }

    public function sistem_cerdas()
    {
        $data1['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['si'] = $this->db->get_where('daftar_dosen', ['bidang_keahlian' => 'sistem cerdas'])->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar_user', $data);
        $this->load->view('template/topbar', $data1);
        $this->load->view('user/si', $data);
        $this->load->view('template/footer');
    }

    public function pengolahan_citra_digital()
    {
        $data1['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['si'] = $this->db->get_where('daftar_dosen', ['bidang_keahlian' => 'pengolahan citra digital'])->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar_user', $data);
        $this->load->view('template/topbar', $data1);
        $this->load->view('user/si', $data);
        $this->load->view('template/footer');
    }

    public function gis()
    {
        $data1['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['si'] = $this->db->get_where('daftar_dosen', ['bidang_keahlian' => 'gis '])->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar_user', $data);
        $this->load->view('template/topbar', $data1);
        $this->load->view('user/si', $data);
        $this->load->view('template/footer');
    }

    public function data_mining()
    {
        $data1['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['si'] = $this->db->get_where('daftar_dosen', ['bidang_keahlian' => 'data mining '])->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar_user', $data);
        $this->load->view('template/topbar', $data1);
        $this->load->view('user/si', $data);
        $this->load->view('template/footer');
    }

    public function web_service()
    {
        $data1['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['si'] = $this->db->get_where('daftar_dosen', ['bidang_keahlian' => 'web service '])->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar_user', $data);
        $this->load->view('template/topbar', $data1);
        $this->load->view('user/si', $data);
        $this->load->view('template/footer');
    }

    public function ebisnis()
    {
        $data1['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['si'] = $this->db->get_where('daftar_dosen', ['bidang_keahlian' => 'ebisnis '])->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar_user', $data);
        $this->load->view('template/topbar', $data1);
        $this->load->view('user/si', $data);
        $this->load->view('template/footer');
    }

    public function ar()
    {
        $data1['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['si'] = $this->db->get_where('daftar_dosen', ['bidang_keahlian' => 'ar '])->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar_user', $data);
        $this->load->view('template/topbar', $data1);
        $this->load->view('user/si', $data);
        $this->load->view('template/footer');
    }


    public function multimedia()
    {
        $data1['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['si'] = $this->db->get_where('daftar_dosen', ['bidang_keahlian' => 'multimedia'])->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar_user', $data);
        $this->load->view('template/topbar', $data1);
        $this->load->view('user/si', $data);
        $this->load->view('template/footer');
    }

    public function spk()
    {
        $data1['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['si'] = $this->db->get_where('daftar_dosen', ['bidang_keahlian' => 'spk '])->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar_user', $data);
        $this->load->view('template/topbar', $data1);
        $this->load->view('user/si', $data);
        $this->load->view('template/footer');
    }

    public function aplikasi_mobile()
    {
        $data1['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['si'] = $this->db->get_where('daftar_dosen', ['bidang_keahlian' => 'aplikasi mobile '])->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar_user', $data);
        $this->load->view('template/topbar', $data1);
        $this->load->view('user/si', $data);
        $this->load->view('template/footer');
    }

    public function teknik_wireless()
    {
        $data1['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['si'] = $this->db->get_where('daftar_dosen', ['bidang_keahlian' => 'teknik wireless '])->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar_user', $data);
        $this->load->view('template/topbar', $data1);
        $this->load->view('user/si', $data);
        $this->load->view('template/footer');
    }

    public function tes_prosesing()
    {
        $data1['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['si'] = $this->db->get_where('daftar_dosen', ['bidang_keahlian' => 'tes prosesing '])->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar_user', $data);
        $this->load->view('template/topbar', $data1);
        $this->load->view('user/si', $data);
        $this->load->view('template/footer');
    }

    public function pararel_computing()
    {
        $data1['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['si'] = $this->db->get_where('daftar_dosen', ['bidang_keahlian' => 'pararel computing '])->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar_user', $data);
        $this->load->view('template/topbar', $data1);
        $this->load->view('user/si', $data);
        $this->load->view('template/footer');
    }
}
