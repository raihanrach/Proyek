<?php

defined('BASEPATH') or exit('No direct script access allowed');

class tugas_akhir extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Tugas Akhir';
        $data['tugas_akhir'] = $this->tugas_akhir_model->tampil_data()->result_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('template/header', $data);
        $this->load->view('Template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('admin/tugas_akhir', $data);
        $this->load->view('template/footer');
    }

    public function input()
    {

        $data1['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data = array(
            'id' => set_value('id'),
            'judul' => set_value('judul'),
            'file' => set_value('file'),
            'nama_mahasiswa' => set_value('nama_mahasiswa'),
            'nama_pembimbing1' => set_value('nama_pembimbing1'),
            'nama_pembimbing2' => set_value('nama_pembimbing2'),
        );

        $upload_file = ['file'];
        if ($upload_file) {
            $config['allowed_types'] = 'docx|JPG|PNG';
            $config['max_size'] = '2048';
            $config['upload_path'] = './assets/file/';

            $this->load->library('upload', $config);

            $this->upload->do_upload('file');
            $new_file = $this->upload->data('file_name');
            $this->db->set('file', $upload_file);
        }

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data1);
        $this->load->view('admin/tugas_akhir_form', $data);
        $this->load->view('template/footer');
    }

    public function input_aksi()
    {

        $this->_rules();
        if ($this->form_validation->run() == false) {
            $this->input();
        } else {
            $this->tugas_akhir_model->input_data();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show" role="alert"> <i class="fas fa-check"></i>
            Tugas Akhir berhasil ditambahkan! <button type="button" class="close" data-dismiss="alert" aria-label="Close"> </button>
            </div>');
            redirect('tugas_akhir');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('judul', 'Judul', 'required', [
            'required' => 'Judul wajib diisi'
        ]);
        $this->form_validation->set_rules('file', 'File', 'required', [
            'required' => 'File wajib diisi'
        ]);
        $this->form_validation->set_rules('nama_mahasiswa', 'Nama Mahasiswa', 'required', [
            'required' => 'Nama Mahasiswa wajib diisi'
        ]);
        $this->form_validation->set_rules('nama_pembimbing1', 'Nama Pembimbing 1', 'required', [
            'required' => 'Nama Dosen Pembimbing 1 wajib diisi'
        ]);
        $this->form_validation->set_rules('nama_pembimbing2', 'Nama Pembimbing 2', 'required', [
            'required' => 'Nama Dosen Pembimbing 2 wajib diisi'
        ]);

        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }

    public function update($id)
    {

        $data1['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $where = array('id' => $id);
        $data['tugas_akhir'] = $this->tugas_akhir_model->edit_data($where, 'tugas_akhir')->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data1);
        $this->load->view('admin/tugas_akhir_update', $data);
        $this->load->view('template/footer');
    }

    public function update_aksi()
    {
        $id = $this->input->post('id');
        $judul = $this->input->post('judul');
        $file = $this->input->post('file');
        $nama_mahasiswa = $this->input->post('nama_mahasiswa');
        $nama_pembimbing1 = $this->input->post('nama_pembimbing1');
        $nama_pembimbing2 = $this->input->post('nama_pembimbing2');

        $data = array(
            'id' => $id,
            'judul' => $judul,
            'file' => $file,
            'nama_mahasiswa' => $nama_mahasiswa,
            'nama_pembimbing1' => $nama_pembimbing1,
            'nama_pembimbing2' => $nama_pembimbing2
        );

        $where = array(
            'id' => $id
        );

        $this->tugas_akhir_model->update_data($where, $data, 'tugas_akhir');
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show" role="alert" > <i class="fas fa-check"></i>
                        Data TA berhasil di update ! <button type="button" class="close" data-dismiss="alert" aria-label="Close"> </button></div>');
        redirect('tugas_akhir', 'refresh');
    }


    public function delete($id)
    {
        $where = array('id' => $id);
        $data['tugas_akhir'] = $this->tugas_akhir_model->hapus_data($where, 'tugas_akhir');

        $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissable fade show" role="alert" > <i class="fas fa-check"></i>
        Data TA berhasil di hapus ! <button type="button" class="close" data-dismiss="alert" aria-label="Close"> </button></div>');
        redirect('tugas_akhir', 'refresh');

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('admin/tugas_akhir_update', $data);
        $this->load->view('template/footer');
    }
}

/* End of file tugas_akhir_admin.php */
