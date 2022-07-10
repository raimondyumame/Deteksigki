<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tambah_data extends CI_Controller {

    public function __construct(){
        
        parent::__construct();
        
        if (!$this->session->userdata('email'))
        {
            redirect('auth');
        }
        $this->load->library('form_validation');
    
    }

    function index()
    {   
        
        if (!$this->session->userdata('email'))
        {
            redirect('auth');
        }
        $this->load->model('M_deteksi');
            $this->load->view('tambah_data/view_tambahdata');
         
            $this->load->view('desain/header');
            $this->load->view('desain/sidebar');
            $this->load->view('desain/footer');
    }



    public function form_capture() {

        $nama = $this->input->get('nama');
        $uid = $this->input->get('uid');
        $tgl = $this->input->get('tgl');


        $this->load->view('tambah_data/view_capturewajah');
        $this->load->view('desain/header');
        $this->load->view('desain/sidebar');
        $this->load->view('desain/footer');
    }

    // capture images
    public function proses_registrasi( $urutan, $nama ) {

		if (isset($_FILES["webcam"]["tmp_name"])) {
		  
		  $tmpName = $_FILES["webcam"]["tmp_name"];
		  $imageName = $nama.'.'.strtotime("now").'.jpeg';

		  $direktori = "./dataset/" . $nama;

		  mkdir( $direktori );

		  move_uploaded_file($tmpName, $direktori.'/'. $imageName);
		}
	}


    // proses insert data atribut
    public function insert_info() {

		$nama = $this->input->get('nama');
        $uid = $this->input->get('uid');
        $tgl = $this->input->get('tgl');


        $data = array(

            'name'  => $nama,
            'uid'   => $uid,
            'tgl'       => $tgl,
            'role_id'   => 1,
            'is_active'   => 1,

        );

		$this->db->insert('user', $data);
	}



    // entry data 
    function entry_data(){

        $uid = "";

        $ambil_data = $this->db->get('tb_entry');

        // cek apakah ada UID ? 
        if ( $ambil_data->num_rows() > 0 ) {

            // ada 
            $uid = $ambil_data->row()->uid;
        }


        echo json_encode( $uid );
    }

    // insert data
    public function insert() {

        
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        //$this->form_validation->set_rules('camera', 'Camera', 'required');
        $this->form_validation->set_message('required', '%s Masih Kosong');
        if($this->form_validation->run()==FALSE){

            $this->load->view('capture/view_tambahdata');
        }
        else
        {
            echo "Salah";

            $nama = $this->input->post('nama');
            $ektp = $this->input->post('uid');
            $password = $this->input->post('pass');
            $tgl = $this->input->post('tgl');

            $data = array(

                'nama'  => $nama,
                // 'uid'   => $ektp,
                'password' => $password,
                'Tanggal'  => $tgl
            );

            $this->db->insert('tb_user', $data);

            $html = '<div class="alert alert-success">Pemberitahuan<br><small>Akun berhasil didaftarkan pada '.date('d F Y H.i A').'</small></div>';
            $this->session->set_flashdata('msg', $html);

        
        redirect('tambah_data/index');
        }
    }

    public function form()
    {
        $this->load->view('desain/header');
        $this->load->view('capture/view_registercam');
        $this->load->view('desain/footer');
    }

    public function display()
    {
        echo 1;
    }

}