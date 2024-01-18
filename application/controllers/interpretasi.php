<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Interpretasi extends CI_Controller
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
		$data['title'] = 'Interpretasi';
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();
		$id = $data['user']['id'];
		$data['total'] = $this->Hasil_skenario->getHasilById($id);
		$data['max'] = $this->Hasil_skenario->getHasilMax($id);
		$data['min'] = $this->Hasil_skenario->getHasilMin($id);

		$this->load->view('user/headeruser', $data);
		$this->load->view('user/sidebaruser', $data);
		$this->load->view('user/interpretasi', $data);
		$this->load->view('user/footeruser');
	}
}
