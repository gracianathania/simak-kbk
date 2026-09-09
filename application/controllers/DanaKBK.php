<?php
defined('BASEPATH') or exit('No direct script access allowed');
class DanaKBK extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('DanaKBK_model');
        $this->load->model('kbk_model');
    }

    public function index()
    {
        $data['judul'] = "Halaman Manajemen Dana KBK";
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
        $data['DanaKBK'] = $this->DanaKBK_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("menu/vw_DanaKBK", $data);
        $this->load->view("layout/footer", $data);
    }

    public function create()
    {
        $data = [
            'jumlah_dana' => $this->input->post('jumlah_dana'),
            'tanggal_pengajuan' => $this->input->post('tanggal_pengajuan'),
            'keterangan' => $this->input->post('keterangan'),
            'file_dana' => $this->input->post('file_dana'),
            'id_kbk' => $this->input->post('id_kbk'),
        ];

        $upload_file = $_FILES['file_dana']['name'];

        if ($upload_file) {
            $config['allowed_types'] = 'pdf|doc|docx';
            $config['max_size'] = '10240';
            $config['upload_path'] = './assets/uploads/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('file_dana')) {
                $new_file = $this->upload->data('file_name');
                $data['file_dana'] = $new_file;
            } else {
                echo $this->upload->display_errors();
            }
        }

        // Memanggil model untuk menyimpan data ke database
        $this->DanaKBK_model->insert($data);

        // Menetapkan pesan flashdata untuk notifikasi
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Dana KBK Berhasil Ditambah!</div>');

        // Mengarahkan pengguna ke halaman DanaKBK setelah menambah data
        redirect('DanaKBK');
    }

    public function update()
    {
        $data = [
            'jumlah_dana' => $this->input->post('jumlah_dana'),
            'tanggal_pengajuan' => $this->input->post('tanggal_pengajuan'),
            'keterangan' => $this->input->post('keterangan'),
            'file_dana' => $this->input->post('file_dana'),
            'id_kbk' => $this->input->post('id_kbk'),
        ];

        $id = $this->input->post('id_dana');

        // Mengecek apakah ada file yang diunggah
        $upload_file = $_FILES['file_dana']['name'];

        if ($upload_file) {
            $config['allowed_types'] = 'pdf|doc|docx';
            $config['max_size'] = '10240';
            $config['upload_path'] = './assets/uploads/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('file_dana')) {
                // Menghapus file lama jika tidak menggunakan default.docx
                $old_file = $data['DanaKBK']['file_dana'];
                if ($old_file != 'default.docx') {
                    unlink(FCPATH . 'assets/uploads/' . $old_file);
                }

                // Mendapatkan nama file yang baru diunggah
                $new_file = $this->upload->data('file_name');
                // $this->db->set('file_dana', $new_file);
                $data['file_dana'] = $new_file;
            } else {
                echo $this->upload->display_errors();
            }
        }

        // Memanggil model untuk melakukan update data ke database
        $this->DanaKBK_model->update(['id_dana' => $id], $data);

        // Menetapkan pesan flashdata untuk notifikasi
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Dana KBK Berhasil Diubah!</div>');

        // Mengarahkan pengguna ke halaman DanaKBK setelah mengubah data
        redirect('DanaKBK');
    }

    public function delete($id)
    {
        $this->DanaKBK_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Dana Berhasil Dihapus!</div>');
        redirect('DanaKBK');
    }
}
