<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Home extends MY_Controller {
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['judul'] = "Halaman Home KBK";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        if (!$data['user']) {
            $data['user'] = [
                'nama' => 'Guest Visitor',
                'email' => 'admin@gmail.com',
                'role' => 'Admin',
                'gambar' => 'Admin-Profile-PNG-Isolated-Photo.png'
            ];
        }
        $this->load->view("layout/home_header", $data);
        $this->load->view("home/index", $data);
        $this->load->view("layout/home_footer", $data);
    }
}
?>