<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_admin extends CI_Model
{

    // ambil query database
    public function Ambil_Data_Admin()
    {
        // opsi 
        // $SQL = "SELECT * FROM tb_log";
        // $query = $this->db->query( $SQL );
        // opsi
        $query = $this->db->get('user');
        // // opsi
        // // $this->db->from('tb_log');
        // // $query = $this->db->get();
        return $query;
        // return $this->db->get_where('user', ['id' => $id])->row_array();
    }
    public function HapusDataAdmin($id)
    {

        $this->db->where('id', $id);
        $this->db->delete('user');
    }
    public function ubahDataAdmin()
    {
        $data = [
            'id' => htmlspecialchars($this->input->post('id', true)),
            // "name" => $this->input->post('name', true),
            // "email" => $this->input->post('email', true),
            // "password" => $this->input->post('password', true),
            // "role_id" => $this->input->post('role_id', true),
            // "is_active" => $this->input->post('is_active', true),
            // "date_created" => $this->input->post('date_created', true),
            'name' => htmlspecialchars($this->input->post('name', true)),
            //htmlspecialchars($this->input->post('name', true));
            'email' => htmlspecialchars($this->input->post('email', true)),
            'image' => 'admin.jpg',
            // 'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
            'role_id' => 1,
            'is_active' => 1,
            'date_created' => time()
            // "tanggal" => $this->input->post('hp', true),
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user', $data);
        // $this->session->set_flashdata('messsage', '<div class="alert alert-success" role="alert">Berhasil membuat akun!</div>');


    }
    public function getAdminById($id)
    {
        // opsi 
        // $SQL = "SELECT * FROM tb_log";
        // $query = $this->db->query( $SQL );
        // opsi
        // $query = $this->db->get('user');
        // // opsi
        // // $this->db->from('tb_log');
        // // $query = $this->db->get();
        // return $query;
        return $this->db->get_where('user', ['id' => $id])->row_array();
    }
    // public function TambahDataCitra()
    // {
    //     $data = [
    //         "id" => $this->input->post('idwajah', true),
    //         "wajah" => $this->input->post('wajahcitra', true),
    //         // "tanggal" => $this->input->post('hp', true),
    //     ];

    //     $this->db->insert('tb_user', $data);
    // }
    // public function HapusDataCitra($id)
    // {

    //     $this->db->where('id', $id);
    //     $this->db->delete('tb_user');
    // }
    // public function getPelangganByid($id)
    // {
    //     return $this->db->get_where('id', ['id' => $id])->row_array();
    // }
}
