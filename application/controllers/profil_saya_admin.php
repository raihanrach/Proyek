<?php

defined('BASEPATH') or exit('No direct script access allowed');

class profil_saya_admin extends CI_Controller
{
    public function index()
    {
        $data['title'] = '<b>Profil Saya</b>';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('template/header', $data);
        $this->load->view('Template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('admin/profil_saya_admin', $data);
        $this->load->view('template/footer');
    }
}

/* End of file profil_saya.php */
