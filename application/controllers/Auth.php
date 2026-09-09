<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model', 'userrole');
    }

    // public function index()
    // {
    //     $this->load->view("layout/auth_header");
    //     $this->load->view("Auth/login");
    //     $this->load->view("layout/auth_footer");
    // }

    public function index()
    {
        // Mode Portofolio: langsung arahkan ke Dashboard
        redirect('Dashboard');
    }

    // public function registrasi()
    // {
    //     $this->load->view("layout/auth_header");
    //     $this->load->view("Auth/registrasi");
    //     $this->load->view("layout/auth_footer");
    // }

    public function registrasi()
    {
        // Validasi Form
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'Email ini sudah terdaftar!',
            'valid_email' => 'Email Harus Valid',
            'required' => 'Email Wajib di isi'
        ]);
        $this->form_validation->set_rules(
            'password1',
            'Password',
            'required|trim|min_length[5]|matches[password2]',
            [
                'matches' => 'Password Tidak Sama',
                'min_length' => 'Password Terlalu Pendek',
                'required' => 'Password harus diisi'
            ]
        );
        
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/auth_header");
            $this->load->view("Auth/registrasi");
            $this->load->view("layout/auth_footer");
        }
    }

    public function cek_registrasi()
    {
        $data = [
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
            'gambar' => 'default.jpg',
            'role' => "User",
            'date_created' => time()
        ];
        $this->userrole->insert($data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat akun anda telah berhasil terdaftar, silahkan login!</div>');
        redirect('Auth');
    }

    public function logout()
    {
        redirect('Dashboard');
    }
}
