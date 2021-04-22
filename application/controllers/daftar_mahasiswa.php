<?php

defined('BASEPATH') or exit('No direct script access allowed');

class daftar_mahasiswa extends CI_Controller
{

    public function index()
    {
        // $data['title'] = 'Profil Saya';
        $data['daftar_mahasiswa'] = $this->daftar_mahasiswa_model->tampil_data()->result_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('template/header', $data);
        $this->load->view('Template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('user/daftar_mahasiswa', $data);
        $this->load->view('template/footer');
    }

    public function input()
    {
        // $data['title'] = 'Siakad TK';
        $data1['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data = array(
            'id_mahasiswa' => set_value('id_mahasiswa'),
            'kode_mahasiswa' => set_value('kode_mahasiswa'),
            'nama_mahasiswa' => set_value('nama_mahasiswa'),
            'nim_mahasiswa' => set_value('nim_mahasiswa')
        );

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data1);
        $this->load->view('user/daftar_mahasiswa_form', $data);
        $this->load->view('template/footer');
    }

    public function input_aksi()
    {

        $this->_rules();
        if ($this->form_validation->run() == true) {
            $this->input();
        } else {
            $this->daftar_mahasiswa_model->input_data();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show" role="alert" >
                        Data mahasiswa berhasil ditambahkan! <button type="button" class="close" data-dismiss="alert" aria-label="Close"> </button></div>');
            redirect('daftar_mahasiswa');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('kode_mahasiswa', 'kode mahasiswa', 'required', [
            'required' => 'Kode mahasiswa wajib diisi'
        ]);
        $this->form_validation->set_rules('nama_mahasiswa', 'nama mahasiswa', 'required', [
            'required' => 'Nama mahasiswa wajib diisi'
        ]);
        $this->form_validation->set_rules('nim', 'nim', 'required', [
            'required' => 'NIM mahasiswa wajib diisi'
        ]);
        $this->form_validation->set_rules('image', 'image', 'required', [
            'required' => 'Foto mahasiswa wajib diisi'
        ]);
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }

    public function update($id)
    {
        // $data['title'] = 'Siakad TK';
        $data1['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $where = array('id_mahasiswa' => $id);
        $data['daftar_mahasiswa'] = $this->daftar_mahasiswa_model->edit_data($where, 'daftar_mahasiswa')->result();


        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data1);
        $this->load->view('user/daftar_mahasiswa_update', $data);
        $this->load->view('template/footer');
    }

    public function update_aksi()
    {
        $id = $this->input->post('id_mahasiswa');
        $kode_mahasiswa = $this->input->post('kode_mahasiswa');
        $nama_mahasiswa = $this->input->post('nama_mahasiswa');
        $nim_mahasiswa = $this->input->post('nim_mahasiswa');

        $data = array(
            'kode_mahasiswa' => $kode_mahasiswa,
            'nama_mahasiswa' => $nama_mahasiswa,
            'nim_mahasiswa' => $nim_mahasiswa,
            'image' => $_FILES['image']['name']
        );

        $where = array(
            'id_mahasiswa' => $id
        );

        $this->daftar_mahasiswa_model->update_data($where, $data, 'daftar_mahasiswa');
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show" role="alert" >
                        Data mahasiswa berhasil di update ! <button type="button" class="close" data-dismiss="alert" aria-label="Close"> </button></div>');
        redirect('daftar_mahasiswa', 'refresh');
    }

    public function delete($id)
    {
        $where = array('id_mahasiswa' => $id);
        $data['daftar_mahasiswa'] = $this->daftar_mahasiswa_model->hapus_data($where, 'daftar_mahasiswa');

        $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissable fade show" role="alert" >
        Data mahasiswa berhasil di hapus ! <button type="button" class="close" data-dismiss="alert" aria-label="Close"> </button></div>');
        redirect('daftar_mahasiswa', 'refresh');

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('user/daftar_mahasiswa_update', $data);
        $this->load->view('template/footer');
    }
}

/* End of file daftar_mahasiswa.php */
