<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
        // Mode Portofolio / Guest Demo: Otomatis set session Admin jika belum ada
        if (!$this->session->userdata('email')) {
            $demo_user = [
                'id' => 8,
                'nama' => 'Guest Visitor',
                'email' => 'admin@gmail.com',
                'role' => 'Admin'
            ];
            $this->session->set_userdata($demo_user);
        }
    }
}
