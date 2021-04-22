<?php
defined('BASEPATH') or exit('No direct script access allowed');

class user extends CI_Controller
{
    // public function __construct()
    // {
    //     parent::__construct();
    //     $this->load->models('upload_file_model');
    // }

    public function index()
    {
        $data['title'] = 'Profil Saya';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('template/header', $data);
        $this->load->view('Template/sidebar_user', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('template/footer');
    }

    public function edit_profil()
    {
        $data['title'] = 'Edit Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('name', 'Nama Lengkap', 'required|trim', [
            'required' => 'Nama lengkap harus diisi'
        ]);
        if ($this->form_validation->run() == false) {

            $this->load->view('template/header', $data);
            $this->load->view('Template/sidebar_user', $data);
            $this->load->view('template/topbar', $data);
            $this->load->view('user/edit_profile', $data);
            $this->load->view('template/footer');
        } else {
            $name = $this->input->post('name');
            $email = $this->input->post('email');

            //CEK JIKA ADA GAMBARNYA YANG MAU DI UPLOAD
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'GIF|JPG|PNG';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/profile/';

                $this->load->library('upload', $config);

                $this->upload->do_upload('image');
                $new_image = $this->upload->data('file_name');
                $this->db->set('image', $upload_image);
            }

            $this->db->set('name', $name);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Profil anda berhasil di update ! </div>');
            redirect('profil_saya');
        }
    }

    public function tugas_akhir_user()
    {
        $data['title'] = 'Tugas Akhir';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('template/header', $data);
        $this->load->view('Template/sidebar_user', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('user/tugas_akhir_user', $data);
        $this->load->view('template/footer');
    }

    public function laporan_pdf()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->library('pdf');
        $data['tugas_akhir'] = $this->cetak_model->view();
        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "Tugas-akhir.pdf";
        $this->pdf->load_view('user/cetak_pdf', $data);
    }
}
