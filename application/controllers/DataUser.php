<?php
defined('BASEPATH') or exit('No direct script access allowed');
class DataUser extends MY_Controller {
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['judul'] = "Halaman Manajemen Data User";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        if (!$data['user']) {
            $data['user'] = [
                'nama' => 'Guest Visitor',
                'email' => 'admin@gmail.com',
                'role' => 'Admin',
                'gambar' => 'Admin-Profile-PNG-Isolated-Photo.png'
            ];
        }
        $this->load->view("layout/header", $data);
        $this->load->view("menu/vw_DataUser", $data);
        $this->load->view("layout/footer", $data);
    }
}
?>