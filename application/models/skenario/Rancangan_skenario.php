<?php

class Rancangan_skenario extends CI_model
{
    public function getAllRancanganSkenario()
    {
        return $this->db->get('rancangan_skenario')->result_array();
    }

    public function getSkenarioById($id)
    {
        return $this->db->get_where('rancangan_skenario', ['deskripsi' => $id])->row_array();
    }
}
