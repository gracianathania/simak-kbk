<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Home_EventKBK extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['judul'] = "Halaman Manajemen Event KBK";
        $this->load->view("layout/home_header", $data);
        $this->load->view("home/home_event", $data);
        $this->load->view("layout/home_footer", $data);
    }
}
?>