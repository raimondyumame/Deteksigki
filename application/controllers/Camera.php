<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Camera extends CI_Controller
{


    // konstruktor
    public function __construct()
    {

        parent::__construct();
        // load model



        $this->load->model('M_function');
    }

    public function index()
    {


        $this->load->view('templates/header');
        $this->load->view('templates/footer');
        $this->load->view('webcam/index');

        //$this->load->view('webcam/image');


        // $this->load->view('login/auth_header');
        // $this->load->view('login/auth_footer');
    }
    public function tampil()
    {
        $data_camera = $this->M_function->ambil_data_fun();
        $data['hasil_camera'] = $data_camera;

        $this->load->view('webcam/image', $data);


        //$this->load->view('webcam/image');


        // $this->load->view('login/auth_header');
        // $this->load->view('login/auth_footer');
    }
}
