<?php

defined('BASEPATH') or exit('No direct script access allowed');

class daftar_dosen extends CI_Controller
{

    public function index()
    {

        $data['daftar_dosen'] = $this->daftar_dosen_model->tampil_data()->result_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('template/header', $data);
        $this->load->view('Template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('user/daftar_dosen', $data);
        $this->load->view('template/footer');
    }

    public function input()
    {

        $data1['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data = array(
            'id_dosen' => set_value('id_dosen'),
            'kode_dosen' => set_value('kode_dosen'),
            'nama_dosen' => set_value('nama_dosen'),
            'nip_dosen' => set_value('nip_dosen'),
            'bidang_keahlian' => set_value('bidang_keahlian'),
            'no_hp' => set_value('no_hp')
        );

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data1);
        $this->load->view('user/daftar_dosen_form', $data);
        $this->load->view('template/footer');
    }

    public function input_aksi()
    {

        $this->_rules();
        if ($this->form_validation->run() == true) {
            $this->input();
        } else {
            $this->daftar_dosen_model->input_data();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show" role="alert"> <i class="fas fa-check"></i>
            Data dosen berhasil ditambahkan! <button type="button" class="close" data-dismiss="alert" aria-label="Close"> </button>
            </div>');
            redirect('daftar_dosen');
        }
    }


    public function _rules()
    {
        $this->form_validation->set_rules('kode_dosen', 'kode dosen', 'required', [
            'required' => 'Kode dosen wajib diisi'
        ]);
        $this->form_validation->set_rules('nama_dosen', 'nama dosen', 'required', [
            'required' => 'Nama dosen wajib diisi'
        ]);
        $this->form_validation->set_rules('nip', 'nip', 'required', [
            'required' => 'NIP dosen wajib diisi'
        ]);
        $this->form_validation->set_rules('image', 'image', 'required', [
            'required' => 'Foto dosen wajib diisi'
        ]);
        $this->form_validation->set_rules('bidang_keahlian', 'bidang keahlian', 'required', [
            'required' => 'Bidang keahlian wajib diisi'
        ]);
        $this->form_validation->set_rules('no_hp', 'no hp', 'required', [
            'required' => 'No hp wajib diisi'
        ]);
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }

    public function update($id)
    {

        $data1['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $where = array('id_dosen' => $id);
        $data['daftar_dosen'] = $this->daftar_dosen_model->edit_data($where, 'daftar_dosen')->result();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data1);
        $this->load->view('user/daftar_dosen_update', $data);
        $this->load->view('template/footer');
    }

    public function update_aksi()
    {
        $id = $this->input->post('id_dosen');
        $kode_dosen = $this->input->post('kode_dosen');
        $nama_dosen = $this->input->post('nama_dosen');
        $nip_dosen = $this->input->post('nip_dosen');
        $bidang_keahlian = $this->input->post('bidang_keahlian');
        $no_hp = $this->input->post('no_hp');

        $data = array(
            'kode_dosen' => $kode_dosen,
            'nama_dosen' => $nama_dosen,
            'nip_dosen' => $nip_dosen,
            'image' => $_FILES['image']['name'],
            'bidang_keahlian' => $bidang_keahlian,
            'no_hp' => $no_hp
        );

        $where = array(
            'id_dosen' => $id
        );

        $this->daftar_dosen_model->update_data($where, $data, 'daftar_dosen');
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show" role="alert" > <i class="fas fa-check"></i>
                        Data dosen berhasil di update ! <button type="button" class="close" data-dismiss="alert" aria-label="Close"> </button></div>');
        redirect('daftar_dosen', 'refresh');
    }



    public function delete($id)
    {
        $where = array('id_dosen' => $id);
        $data['daftar_dosen'] = $this->daftar_dosen_model->hapus_data($where, 'daftar_dosen');

        $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissable fade show" role="alert" > <i class="fas fa-check"></i>
        Data dosen berhasil di hapus ! <button type="button" class="close" data-dismiss="alert" aria-label="Close"> </button></div>');
        redirect('daftar_dosen', 'refresh');

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('user/daftar_dosen_update', $data);
        $this->load->view('template/footer');
    }

    public function data_dosen()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/header', $data);
        $this->load->view('Template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('admin/data_dosen_admin', $data);
        $this->load->view('template/footer');
    }
}

/* End of file daftar_dosen.php */
