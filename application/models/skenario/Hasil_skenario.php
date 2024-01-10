<?php

class Hasil_skenario extends CI_model
{
    public function getAllHasilSkenario()
    {
        return $this->db->get('hasil_skenario')->result_array();
    }

    public function tambahDataHasil()
    {
        if ($this->input->post('tambah')) {
            $data = [
                "id_user" => $this->input->post('id', true),
                "kode_skenario" => "",
                "skenario" => $this->input->post('0', true),
                "lahan" => $this->input->post('1', true),
                "alsintan" => $this->input->post('2', true),
                "pengadaan_bibit" => $this->input->post('3'),
                "persiapan_lahan" => $this->input->post('4', true),
                "penanaman" => $this->input->post('5', true),
                "penyulaman" => $this->input->post('6', true),
                "pemupukan" => $this->input->post('7', true),
                "pengendalian_opt" => $this->input->post('8', true),
                "pemangkasan" => $this->input->post('9', true),
                "pemanenan" => $this->input->post('10', true),
                "lahan_dan_bangunan" => $this->input->post('11', true),
                "pembersihan_buah" => $this->input->post('12', true),
                "pulping" => $this->input->post('13', true),
                "fermentasi" => $this->input->post('14', true),
                "pembersih_kopi_hs" => $this->input->post('15', true),
                "pengeringan" => $this->input->post('16', true),
                "hulling" => $this->input->post('17', true),
                "sortasi_greenbean" => $this->input->post('18', true),
                "pengemasan" => $this->input->post('19', true),
            ];
            $this->db->insert('hasil_skenario', $data);
        }
    }

    public function hapusDataMahasiswa($id)
    {
        // $this->db->where('id', $id);
        $this->db->delete('mahasiswa', ['id' => $id]);
    }

    public function getHasilById($id)
    {
        $this->db->where('id_user', $id);
        $query = $this->db->get('hasil_skenario');
        return $query->result_array();
    }

    public function ubahDataMahasiswa()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "nrp" => $this->input->post('nrp', true),
            "email" => $this->input->post('email', true),
            "jurusan" => $this->input->post('jurusan', true),
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('mahasiswa', $data);
    }

    public function cariDataMahasiswa()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        $this->db->or_like('jurusan', $keyword);
        $this->db->or_like('nrp', $keyword);
        $this->db->or_like('email', $keyword);
        return $this->db->get('mahasiswa')->result_array();
    }
}
