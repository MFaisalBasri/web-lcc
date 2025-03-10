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
            $id_skenario = $this->input->post('id_skenario');
            $cek_query = $this->db->get_where('hasil_skenario', ['id_skenario' => $id_skenario, 'id_user' => $this->input->post('id_user', true)]);

            if ($cek_query->num_rows() > 0) {
                redirect('history');
            } else {
                $total_biaya = intval($this->input->post('1', true)) +
                    intval($this->input->post('2', true)) +
                    intval($this->input->post('3', true)) +
                    intval($this->input->post('4', true)) +
                    intval($this->input->post('5', true)) +
                    intval($this->input->post('6', true)) +
                    intval($this->input->post('7', true)) +
                    intval($this->input->post('8', true)) +
                    intval($this->input->post('9', true)) +
                    intval($this->input->post('10', true)) +
                    intval($this->input->post('11', true)) +
                    intval($this->input->post('12', true)) +
                    intval($this->input->post('13', true)) +
                    intval($this->input->post('14', true)) +
                    intval($this->input->post('15', true)) +
                    intval($this->input->post('16', true)) +
                    intval($this->input->post('17', true)) +
                    intval($this->input->post('18', true)) +
                    intval($this->input->post('19', true));
                $data = [
                    "kode_skenario" => "",
                    "id_skenario" => $this->input->post('id_skenario', true),
                    "id_user" => $this->input->post('id_user', true),
                    "nama" => $this->input->post('nama_user', true),
                    "jenis_skenario" => $this->input->post('jenis_skenario', true),
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
                    "total_biaya" => $total_biaya
                ];
                $this->db->insert('hasil_skenario', $data);
            }
        }
    }

    public function hapusDataSkenario($id)
    {
        $this->db->delete('hasil_skenario', ['kode_skenario' => $id]);
    }

    public function getHasilById($id)
    {
        $this->db->where('id_user', $id);
        $this->db->order_by('id_skenario', 'ASC');
        $query = $this->db->get('hasil_skenario');
        return $query->result_array();
    }

    public function getHasilMax($id)
    {
        $this->db->select_max('total_biaya');
        $this->db->where('id_user', $id);
        $maxTotalBiayaQuery = $this->db->get('hasil_skenario');

        $maxTotalBiayaRow = $maxTotalBiayaQuery->row();
        $maxTotalBiaya = $maxTotalBiayaRow ? $maxTotalBiayaRow->total_biaya : 0;

        $this->db->select('skenario, total_biaya');
        $this->db->where('id_user', $id);
        $this->db->where('total_biaya', $maxTotalBiaya);
        $query = $this->db->get('hasil_skenario');

        return $query->result_array();
    }
    public function getHasilMin($id)
    {
        $this->db->select_min('total_biaya');
        $this->db->where('id_user', $id);
        $maxTotalBiayaQuery = $this->db->get('hasil_skenario');

        $maxTotalBiayaRow = $maxTotalBiayaQuery->row();
        $maxTotalBiaya = $maxTotalBiayaRow ? $maxTotalBiayaRow->total_biaya : 0;

        $this->db->select('skenario, total_biaya');
        $this->db->where('id_user', $id);
        $this->db->where('total_biaya', $maxTotalBiaya);
        $query = $this->db->get('hasil_skenario');

        return $query->result_array();
    }

    public function getHasilByIdSkenario($id_skenario, $id_user)
    {
        $this->db->where('id_skenario', $id_skenario);
        $this->db->where('id_user', $id_user);

        $query = $this->db->get('hasil_skenario');

        return $query->result_array();
    }

    public function getHasilByKode($kode_skenario)
    {
        $this->db->where('kode_skenario', $kode_skenario);

        $query = $this->db->get('hasil_skenario');

        return $query->result_array();
    }

    public function getTotalData($id_user)
    {
        $this->db->where('id_user', $id_user);
        return $this->db->count_all_results('hasil_skenario');
    }

    public function ubahDataHistory()
    {
        $id_skenario = $this->input->post('id_skenario', true);
        $total_biaya = intval($this->input->post('1', true)) +
            intval($this->input->post('2', true)) +
            intval($this->input->post('3', true)) +
            intval($this->input->post('4', true)) +
            intval($this->input->post('5', true)) +
            intval($this->input->post('6', true)) +
            intval($this->input->post('7', true)) +
            intval($this->input->post('8', true)) +
            intval($this->input->post('9', true)) +
            intval($this->input->post('10', true)) +
            intval($this->input->post('11', true)) +
            intval($this->input->post('12', true)) +
            intval($this->input->post('13', true)) +
            intval($this->input->post('14', true)) +
            intval($this->input->post('15', true)) +
            intval($this->input->post('16', true)) +
            intval($this->input->post('17', true)) +
            intval($this->input->post('18', true)) +
            intval($this->input->post('19', true));

        $data = [
            "id_skenario" => $this->input->post('id_skenario', true),
            "id_user" => $this->input->post('id_user', true),
            "jenis_skenario" => $this->input->post('jenis_skenario', true),
            "skenario" => $this->input->post('skenario', true),
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
            "total_biaya" =>  $total_biaya
        ];

        $this->db->where('id_skenario', $id_skenario);
        $this->db->update('hasil_skenario', $data);
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
