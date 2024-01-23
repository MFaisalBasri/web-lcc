<?php

class UserModel extends CI_model
{
    public function getAllUser()
    {
        return $this->db->where('role_id', 2)->get('user')->result_array();
    }
    public function getAllAdmin()
    {
        return $this->db->where('role_id', 1)->get('user')->result_array();
    }

    public function getUserById($id)
    {
        return $this->db->get_where('user', ['id' => $id])->row_array();
    }

    public function getTotalUser()
    {
        $this->db->where('role_id', 2);
        return $this->db->count_all_results('user');
    }

    public function getTotalAdmin()
    {
        $this->db->where('role_id', 1);
        return $this->db->count_all_results('user');
    }

    public function getRole($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('user')->row_array();
    }
}
