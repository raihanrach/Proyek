<?php

defined('BASEPATH') or exit('No direct script access allowed');

class tugas_akhir_user extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Tugas Akhir';
        $data['tugas_akhir'] = $this->tugas_akhir_user_model->tampil_data()->result_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('template/header', $data);
        $this->load->view('Template/sidebar_user', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('user/tugas_akhir_user', $data);
        $this->load->view('template/footer');
    }
}

/* End of file tugas_akhir_user.php */
