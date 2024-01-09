<?php
defined('BASEPATH') or exit('No direct script access allowed');

class History extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
    }
    public function index()
    {
        $data['title'] = 'Skenario Usaha';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['history'] = $this->Hasil_skenario->getAllHasilSkenario();

        $this->load->view('user/headeruser', $data);
        $this->load->view('user/sidebaruser');
        $this->load->view('user/history', $data);
        $this->load->view('user/footeruser');
    }
}
