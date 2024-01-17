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
        $deskripsi1 = $this->input->post('skenarioDropdown1');
        $deskripsi2 = $this->input->post('skenarioDropdown2');
        $data['pertanyaan'] = $this->Rancangan_skenario->getSkenarioById($deskripsi1);
        $data['pertanyaan2'] = $this->Rancangan_skenario->getSkenarioById($deskripsi2);
        $id = $data['user']['id'];

        if (!empty($data['pertanyaan'])) {
            $id_skenario = $data['pertanyaan']['id_skenario'];
            $data['history'] = $this->Hasil_skenario->getHasilByIdSkenario($id_skenario, $id);
        }

        if (!empty($data['pertanyaan2'])) {
            $id_skenario = $data['pertanyaan2']['id_skenario'];
            $data['history2'] = $this->Hasil_skenario->getHasilByIdSkenario($id_skenario, $id);
        }

        $this->load->view('user/headeruser', $data);
        $this->load->view('user/sidebaruser');
        $this->load->view('user/komparasi', $data);
        $this->load->view('user/footeruser');
    }
}
