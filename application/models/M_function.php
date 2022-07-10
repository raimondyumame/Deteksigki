<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_function extends CI_Model
{

    // ambil query database
    public function ambil_data_fun()
    {


        // $conn = mysqli_connect("localhost", "root", "", "gki");
        $query = $this->db->get('tb_image');
        return $query;

        if (isset($_FILES["gki"]["tmp_name"])) {
            $tmpName = $_FILES["gki"]["tmp_name"];
            $imageName = date("Y.m.d") . " - " . date("h.i.sa") . '.jpeg';
            // move_uploaded_file($tmpName, 'img/' . $imageName);

            $date = date("Y/m/d") . " & " . date("h:i:sa");
            $query = "INSERT INTO tb_image VALUES('', '$date', '$imageName')";
            // mysqli_query("$query")



            // opsi 
            // $SQL = "SELECT * FROM tb_log";
            // $query = $this->db->query( $SQL );


            // opsi
            // $query = $this->db->get('tb_gambar');
            //  if (isset($_FILES["tmp_name"])) {
            // $tmpName = $_FILES["tmp_name"];
            //S $imageName = '.jpeg';
            //move_uploaded_file($tmpName, 'img/' . $imageName);

            //$date = date("Y/m/d") . " & " . date("h:i:sa");
            //$query = "INSERT INTO tb_gambar VALUES('', , '$imageName')";
            //     //mysqli_query($query:);



            // opsi
            // $this->db->from('tb_log');
            // $query = $this->db->get();


            // return $query;
        }
    }
}
