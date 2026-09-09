<?php
defined('BASEPATH') or exit('No direct script access allowed');
class EventKBK extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('EventKBK_model');
        $this->load->model('kbk_model');
    }

    public function index()
    {
        $data['judul'] = "Halaman Manajemen Event KBK";
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
        $data['EventKBK'] = $this->EventKBK_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("menu/vw_EventKBK", $data);
        $this->load->view("layout/footer", $data);
    }

    public function create()
    {
        $data = [
            'nama_event' => $this->input->post('nama_event'),
            'tanggal_event' => $this->input->post('tanggal_event'),
            'lokasi_event' => $this->input->post('lokasi_event'),
            'deskripsi_event' => $this->input->post('deskripsi_event'),
            'file_event' => $this->input->post('file_event'),
            'id_kbk' => $this->input->post('id_kbk'),
        ];

        $upload_file = $_FILES['file_event']['name'];

        if ($upload_file) {
            $config['allowed_types'] = 'pdf|doc|docx';
            $config['max_size'] = '10240';
            $config['upload_path'] = './assets/uploads/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('file_event')) {
                $new_file = $this->upload->data('file_name');
                $data['file_event'] = $new_file;
            } else {
                echo $this->upload->display_errors();
            }
        }

        // Memanggil model untuk menyimpan data ke database
        $this->EventKBK_model->insert($data);

        // Menetapkan pesan flashdata untuk notifikasi
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Event KBK Berhasil Ditambah!</div>');

        // Mengarahkan pengguna ke halaman EventKBK setelah menambah data
        redirect('EventKBK');
    }

    // public function update()
    // {
    //     $data = [
    //         'nama_event' => $this->input->post('nama_event'),
    //         'tanggal_event' => $this->input->post('tanggal_event'),
    //         'lokasi_event' => $this->input->post('lokasi_event'),
    //         'deskripsi_event' => $this->input->post('deskripsi_event'),
    //         'file_event' => $this->input->post('file_event'),
    //         'id_kbk' => $this->input->post('id_kbk'),
    //     ];
    //     $id = $this->input->post('id_event');
    //     $this->EventKBK_model->update(['id_event' => $id], $data);
    //     redirect('EventKBK');
    // }
    public function update()
    {
        $data = [
            'nama_event' => $this->input->post('nama_event'),
            'tanggal_event' => $this->input->post('tanggal_event'),
            'lokasi_event' => $this->input->post('lokasi_event'),
            'deskripsi_event' => $this->input->post('deskripsi_event'),
            'file_event' => $this->input->post('file_event'),
            'id_kbk' => $this->input->post('id_kbk'),
        ];

        $id = $this->input->post('id_event');

        // Mengecek apakah ada file yang diunggah
        $upload_file = $_FILES['file_event']['name'];

        if ($upload_file) {
            $config['allowed_types'] = 'pdf|doc|docx';
            $config['max_size'] = '10240';
            $config['upload_path'] = './assets/uploads/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('file_event')) {
                // Menghapus file lama jika tidak menggunakan default.docx
                $old_file = $data['EventKBK']['file_event'];
                if ($old_file != 'default.docx') {
                    unlink(FCPATH . 'assets/uploads/' . $old_file);
                }

                // Mendapatkan nama file yang baru diunggah
                $new_file = $this->upload->data('file_name');
                // $this->db->set('file_event', $new_file);
                $data['file_event'] = $new_file;
            } else {
                echo $this->upload->display_errors();
            }
        }

        // Memanggil model untuk melakukan update data ke database
        $this->EventKBK_model->update(['id_event' => $id], $data);
        
        // Menetapkan pesan flashdata untuk notifikasi
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Event KBK Berhasil Diubah!</div>');

        // Mengarahkan pengguna ke halaman EventKBK setelah mengubah data
        redirect('EventKBK');
    }

    public function delete($id)
    {
        $this->DanaKBK_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Dana Berhasil Dihapus!</div>');
        redirect('DanaKBK');
    }
}
