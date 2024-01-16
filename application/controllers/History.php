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
        $this->load->model('Hasil_skenario');
    }
    public function index()
    {
        $data['title'] = 'Data History';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $id = $data['user']['id'];
        $data['history'] = $this->Hasil_skenario->getHasilById($id);

        $this->load->view('user/headeruser', $data);
        $this->load->view('user/sidebaruser');
        $this->load->view('user/history', $data);
        $this->load->view('user/footeruser');
    }

    public function hapus($kode_skenario)
    {
        $this->Hasil_skenario->hapusDataSkenario($kode_skenario);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data Skenario
        has been delete!</div>');
        redirect('history');
    }

    public function ubah($id_skenario)
    {
        $data['title'] = 'Edit Data';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $id = $data['user']['id'];
        $data['history'] = $this->Hasil_skenario->getHasilByIdSkenario($id_skenario, $id);

        $this->form_validation->set_rules('skenario', 'skenario', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('user/headeruser', $data);
            $this->load->view('user/sidebaruser');
            $this->load->view('user/editHistory', $data);
            $this->load->view('user/footeruser');
        } else {
            $this->Hasil_skenario->ubahDataHistory();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data Skenario
        has been Update!</div>');
            redirect('history');
        }
    }
}
