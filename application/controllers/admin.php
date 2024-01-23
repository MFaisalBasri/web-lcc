<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function role()
    {
        $data['title'] = 'Role';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get('user_role')->result_array();
        $this->load->view('user/headeruser', $data);
        $this->load->view('user/sidebaruser', $data);
        $this->load->view('admin/role', $data);
        $this->load->view('user/footeruser');
    }

    public function viewUser()
    {
        $data['title'] = 'Data User';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['dataUser'] = $this->UserModel->getAllUser();

        $this->load->view('user/headeruser', $data);
        $this->load->view('user/sidebaruser', $data);
        $this->load->view('admin/dataUser', $data);
        $this->load->view('user/footeruser');
    }
    public function viewAdmin()
    {
        $data['title'] = 'Data Admin';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['dataAdmin'] = $this->UserModel->getAllAdmin();

        $this->load->view('user/headeruser', $data);
        $this->load->view('user/sidebaruser', $data);
        $this->load->view('admin/dataAdmin', $data);
        $this->load->view('user/footeruser');
    }

    public function editAdmin($id)
    {

        $data['title'] = 'Edit User';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['editUser'] = $this->UserModel->getUserById($id);

        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');
        $this->form_validation->set_rules('lokasi', 'Lokasi', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('user/headeruser', $data);
            $this->load->view('user/sidebaruser', $data);
            $this->load->view('admin/editAdmin', $data);
            $this->load->view('user/footeruser');
        } else {
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $lokasi = $this->input->post('lokasi');
            $role_id = $this->input->post('role_id');
            $is_active = $this->input->post('is_active');

            //cek apakah ada gambar

            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/dist/img/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->db->set('name', $name);
            $this->db->set('lokasi', $lokasi);
            $this->db->set('role_id', $role_id);
            $this->db->set('is_active', $is_active);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Your Profile
        has been updated!</div>');
            redirect('admin/viewAdmin');
        }
    }

    public function editUser($id)
    {

        $data['title'] = 'Edit User';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['editUser'] = $this->UserModel->getUserById($id);

        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');
        $this->form_validation->set_rules('lokasi', 'Lokasi', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('user/headeruser', $data);
            $this->load->view('user/sidebaruser', $data);
            $this->load->view('admin/editUser', $data);
            $this->load->view('user/footeruser');
        } else {
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $lokasi = $this->input->post('lokasi');
            $role_id = $this->input->post('role_id');
            $is_active = $this->input->post('is_active');

            //cek apakah ada gambar

            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/dist/img/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->db->set('name', $name);
            $this->db->set('lokasi', $lokasi);
            $this->db->set('role_id', $role_id);
            $this->db->set('is_active', $is_active);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Your Profile
        has been updated!</div>');
            redirect('admin/viewUser');
        }
    }

    public function skenarioUser()
    {
        $data['title'] = 'Skenario User';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['skenarioUser'] = $this->Hasil_skenario->getAllHasilSkenario();

        $this->load->view('user/headeruser', $data);
        $this->load->view('user/sidebaruser', $data);
        $this->load->view('admin/skenarioUser', $data);
        $this->load->view('user/footeruser');
    }

    public function ubahPassword()
    {

        $data['title'] = 'Change Password';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[3]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[3]|matches[new_password1]');



        if ($this->form_validation->run() == false) {

            $this->load->view('user/headeruser', $data);
            $this->load->view('user/sidebaruser', $data);
            $this->load->view('admin/editUser', $data);
            $this->load->view('user/footeruser');
        } else {
            $new_password = $this->input->post('new_password1');
            if ($new_password === '') {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">New Password cannot be empty!</div>');
                redirect('admin/viewUser');
            } else {

                //password sudah ok
                $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                $this->db->set('password', $password_hash);
                $this->db->where('id',   $this->input->post('id'));
                $this->db->update('user');

                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Password Changed</div>');
                redirect('admin/viewUser');
            }
        }
    }

    public function editSkenario($id_skenario)
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
            $this->load->view('admin/editSkenario', $data);
            $this->load->view('user/footeruser');
        } else {
            $this->Hasil_skenario->ubahDataHistory();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data Skenario
        has been Update!</div>');
            redirect('admin/skenarioUser');
        }
    }
    public function hapusSkenario($kode_skenario)
    {
        $this->Hasil_skenario->hapusDataSkenario($kode_skenario);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data Skenario
        has been delete!</div>');
        redirect('admin/skenarioUser');
    }
}
