<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
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
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $id_user = $data['user']['id'];
        $data['total_data'] = $this->Hasil_skenario->getTotalData($id_user);

        $this->load->view('user/headeruser', $data);
        $this->load->view('user/sidebaruser');
        $this->load->view('user/dashboard', $data);
        $this->load->view('user/footeruser');
    }
}
