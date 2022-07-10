<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_log extends CI_Model
{

    // ambil query database
    public function Ambil_Data_Log()
    {
        // opsi 
        // $SQL = "SELECT * FROM tb_log";
        // $query = $this->db->query( $SQL );
        // opsi
        $query = $this->db->get('tb_deteksi');
        // opsi
        // $this->db->from('tb_log');
        // $query = $this->db->get();
        return $query;
    }
    public function TambahDataCitra()
    {
        $data = [
            "id" => $this->input->post('idwajah', true),
            "wajah" => $this->input->post('wajahcitra', true),
            // "tanggal" => $this->input->post('hp', true),
        ];

        $this->db->insert('tb_deteksi', $data);
    }
    public function HapusDataCitra($id)
    {

        $this->db->where('id', $id);
        $this->db->delete('tb_deteksi');
    }
    public function getPelangganByid($id)
    {
        return $this->db->get_where('id', ['id' => $id])->row_array();
    }
}
