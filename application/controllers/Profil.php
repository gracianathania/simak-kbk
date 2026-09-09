<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends MY_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model', 'userrole');
    }

    public function index() {
        $data['judul'] = "Halaman Profile";
        $data['user'] = $this->userrole->getBy();
        if (!$data['user']) {
            $data['user'] = [
                'nama' => 'Guest Visitor',
                'email' => 'admin@gmail.com',
                'role' => 'Admin',
                'gambar' => 'Admin-Profile-PNG-Isolated-Photo.png'
            ];
        }
        $this->load->view("layout/header", $data);
        $this->load->view("profil/vw_profil", $data);
        $this->load->view("layout/footer", $data);
    }
}

?>