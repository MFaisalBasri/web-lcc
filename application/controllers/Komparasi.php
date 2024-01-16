<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Komparasi extends CI_Controller
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
        $data['title'] = 'Komparasi';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['skenario'] = $this->Rancangan_skenario->getAllRancanganSkenario();
        $deskripsi = $this->input->post('skenarioDropdown');
        $data['pertanyaan'] = $this->Rancangan_skenario->getSkenarioById($deskripsi);
        $this->Hasil_skenario->tambahDataHasil();

        $this->load->view('user/headeruser', $data);
        $this->load->view('user/sidebaruser');
        $this->load->view('user/komparasi', $data);
        $this->load->view('user/footeruser');
    }
}
