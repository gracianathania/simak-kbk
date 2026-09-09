<?php
defined('BASEPATH') or exit('No direct script access allowed');
class RisetKBK extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('RisetKBK_model');
        $this->load->model('kbk_model');
    }

    public function index()
    {
        $data['judul'] = "Halaman Manajemen Riset KBK";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        if (!$data['user']) {
            $data['user'] = [
                'nama' => 'Guest Visitor',
                'email' => 'admin@gmail.com',
                'role' => 'Admin',
                'gambar' => 'Admin-Profile-PNG-Isolated-Photo.png'
            ];
        }
        $data['kbk'] = $this->kbk_model->get();
        $data['RisetKBK'] = $this->RisetKBK_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("menu/vw_RisetKBK", $data);
        $this->load->view("layout/footer", $data);
    }

    public function create()
    {
        $data = [
            'judul_riset' => $this->input->post('judul_riset'),
            'peneliti' => $this->input->post('peneliti'),
            'tanggal_riset' => $this->input->post('tanggal_riset'),
            'tanggal_selesai' => $this->input->post('tanggal_selesai'),
            'deskripsi_riset' => $this->input->post('deskripsi_riset'),
            'file_riset' => $this->input->post('file_riset'),
            'id_kbk' => $this->input->post('id_kbk'),
        ];

        $upload_file = $_FILES['file_riset']['name'];

        if ($upload_file) {
            $config['allowed_types'] = 'pdf|doc|docx';
            $config['max_size'] = '10240';
            $config['upload_path'] = './assets/uploads/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('file_riset')) {
                $new_file = $this->upload->data('file_name');
                $data['file_riset'] = $new_file;
            } else {
                echo $this->upload->display_errors();
            }
        }

        // Memanggil model untuk menyimpan data ke database
        $this->RisetKBK_model->insert($data);

        // Menetapkan pesan flashdata untuk notifikasi
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Riset KBK Berhasil Ditambah!</div>');

        // Mengarahkan pengguna ke halaman DanaKBK setelah menambah data
        redirect('RisetKBK');
    }

    public function update()
    {
        $data = [
            'judul_riset' => $this->input->post('judul_riset'),
            'peneliti' => $this->input->post('peneliti'),
            'tanggal_mulai' => $this->input->post('tanggal_mulai'),
            'tanggal_selesai' => $this->input->post('tanggal_selesai'),
            'deskripsi_riset' => $this->input->post('deskripsi_riset'),
            'file_riset' => $this->input->post('file_riset'),
            'id_kbk' => $this->input->post('id_kbk'),
        ];

        $id = $this->input->post('id_riset');

        // Mengecek apakah ada file yang diunggah
        $upload_file = $_FILES['file_riset']['name'];

        if ($upload_file) {
            $config['allowed_types'] = 'pdf|doc|docx';
            $config['max_size'] = '10240';
            $config['upload_path'] = './assets/uploads/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('file_riset')) {
                // Menghapus file lama jika tidak menggunakan default.docx
                $old_file = $data['RisetKBK']['file_riset'];
                if ($old_file != 'default.docx') {
                    unlink(FCPATH . 'assets/uploads/' . $old_file);
                }

                // Mendapatkan nama file yang baru diunggah
                $new_file = $this->upload->data('file_name');
                // $this->db->set('file_riset', $new_file);
                $data['file_riset'] = $new_file;
            } else {
                echo $this->upload->display_errors();
            }
        }

        // Memanggil model untuk melakukan update data ke database
        $this->RisetKBK_model->update(['id_riset' => $id], $data);

        // Menetapkan pesan flashdata untuk notifikasi
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Riset KBK Berhasil Diubah!</div>');

        // Mengarahkan pengguna ke halaman RisetKBK setelah mengubah data
        redirect('RisetKBK');
    }

    public function delete($id)
    {
        $this->RisetKBK_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Riset Berhasil Dihapus!</div>');
        redirect('RisetKBK');
    }
}
