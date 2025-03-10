<?php
defined('BASEPATH') or exit('No direct script access allowed');

class EditHistory extends CI_Controller
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
        $data['title'] = 'Edit Data';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $id = $data['user']['id'];
        $data['hasil'] = $this->Hasil_skenario->getHasilById($id);
        $cek_query = $this->db->get_where('hasil_skenario', ['id_skenario' => $id_skenario, 'id_user' => $this->input->post($id, true)]);

        $this->load->view('user/headeruser', $data);
        $this->load->view('user/sidebaruser');
        $this->load->view('user/editHistory', $data);
        $this->load->view('user/footeruser');
    }
}
