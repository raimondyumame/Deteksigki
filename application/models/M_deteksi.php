<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_deteksi extends CI_Model {

    
    //fungsi
    // public function m_ambil_data_smarthome() {

    //     return $this->db->get('tb_user');
    // }


    // hapus
    public function m_hapus_data_smarthome( $id ) {

            $this->db->where('id', $id)->delete('tb_user');
    }

    public function get($id = null)
    {
        $this->db->from('tb_user');
        if($id != null)
            {
                $this->db->where('id', $id);
            }
            $query = $this->db->get();
        return $query;
    }

    public function detail($id)
    {
        $this->db->from('tb_user');
        if($id != null)
            {
                $this->db->where('id', $id);
            }
            $query = $this->db->get();
        return $query;
    }

    public function edit($post)
    {
        $params['Nama'] = $post['nama'];
        $params['Password'] = $post['password'];

        $this->db->where('id', $post['id']);
        $this->db->update('tb_user', $params);
    }

    public function del($id)
    {
        $this->db->where('id', ['id']);
        $this->db->delete('tb_user');
    }
}

    