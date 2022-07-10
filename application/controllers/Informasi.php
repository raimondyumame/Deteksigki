<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi extends CI_Controller {

    public function __construct(){
        
        parent::__construct();
        
        if (!$this->session->userdata('email'))
        {
            redirect('auth');
        }
    
    }

    public function index()
    {
        if (!$this->session->userdata('email'))
        {
            redirect('auth');
        }
        $this->load->model('M_deteksi');
        // $data['row'] = $this->M_deteksi->get();

        $data['row'] = $this->db->get('user');
        $this->load->view('informasi/view_informasi', $data);
        $this->load->view('desain/sidebar');
        $this->load->view('desain/header');
        // $this->load->view('desain/footer',);
     
        
    }

    public function detail($id)
    {
        if (!$this->session->userdata('email'))
        {
            redirect('auth');
        }
        $this->load->model('M_deteksi');
        $this->load->model('M_deteksi');
        $query = $this->M_deteksi->get($id);
        if($query->num_rows()>0)
        {
            $data['row']= $query->row();
            $this->load->view('informasi/detail', $data);
        }
        else
        {
            // echo "<script> alert('Data Tidak Ditemukan);";
            // echo "window.location= '" .site_url('informasi'). "';</script>";
            echo "data tidak ditemukan";
        }
    }


    // menampilkan view
    public function edit($id)
    {
        $this->load->model('M_deteksi');

        $data['row'] = $this->db->get_where('user', ['id' => $id])->row();
        $this->load->view('informasi/edit', $data);
    }


    // proses update
    public function proses_update($id) {

        $data = array(

            'name'  => $this->input->post('nama')
        );

        $this->db->where('id', $id);
        $this->db->update('user', $data);

        redirect('informasi/index');
    }

    public function del()
    {
        $this->load->model('M_deteksi');
        $id = $this->input->post('id');
        

        $this->M_deteksi->m_hapus_data_deteksi($id);
    }
    public function m_hapus_data_deteksi( $id ) {

            $this->db->where('id', $id)->delete('tb_user');
            redirect('informasi/index');
    }

    public function preprocessing_view() {
        if (!$this->session->userdata('email'))
        {
            redirect('auth');
        }


        $api = "http://127.0.0.1:5000/preprocessing";
        $ambil_pesan = file_get_contents( $api );


        $this->load->model('M_deteksi');
        // $data['row'] = $this->M_deteksi->get();

        $data['row'] = $this->db->get('user');
        $this->load->view('informasi/view_preprocessing', $data);
        $this->load->view('desain/sidebar');
        $this->load->view('desain/header');
        $this->load->view('desain/footer');

    }

    public function do_processing() {

        // $api = "http://127.0.0.1:5000/training";
        // $ambil_pesan = file_get_contents( $api );
        // $decode = json_decode( $ambil_pesan );

        // $data['waktu'] = $decode->waktu;

        $this->load->view('informasi/view_training');
       
        $this->load->view('desain/sidebar');
        $this->load->view('desain/header');
        $this->load->view('desain/footer');


    }


    public function do_testing() {

        $this->load->view('informasi/view_klasifikasi');
        $this->load->view('desain/sidebar');
        $this->load->view('desain/header');
        $this->load->view('desain/footer');
    }


    public function bgprocess_training() {

        $api = "http://127.0.0.1:5000/training";
        $ambil_pesan = file_get_contents( $api );

        $decode = json_decode( $ambil_pesan );

        echo json_encode( $decode->waktu );
    }





    // rest api 
    public function data_label(){

        $query = $this->db->get('user');
        $data = array();

        foreach ( $query->result_array() AS $isi ) {

            if ( $isi['name'] != "Admin" ) {

                array_push( $data, $isi['name'] );

            }
        }

        echo json_encode( ['output' => $data] );
    }




    public function proses_upload_testing( $nama ) {

       


        if (isset($_FILES["webcam"]["tmp_name"])) {
		  
            $tmpName = $_FILES["webcam"]["tmp_name"];
            
  
            move_uploaded_file($tmpName, 'testing/'. $nama.'');
        }
    }



    public function proses_klasifikasi( $nama ) {

        $api = "http://127.0.0.1:5000/testing?filename=" . $nama;
        $ambil_pesan = file_get_contents( $api );

        $decode = json_decode( $ambil_pesan );
        
        $data = array( 'label' => $decode->label, 'time' => $decode->time );
        echo json_encode( $data );
    }
    public function arduino_klasifikasi(){

        // ambil data terkini 
        $ambilDataTabelKlasifikasi = $this->db->get('tb_sginal');

        $hasil = "";
        if ( $ambilDataTabelKlasifikasi->num_rows() == 1 ) {

            $kolom = $ambilDataTabelKlasifikasi->row_array();
            $hasil = $kolom['label'];
        }
        echo $hasil.'|';
    }
}