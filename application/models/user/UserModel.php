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
}
