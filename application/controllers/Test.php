<?php
defined('BASEPATH') or exit('Np direct script acces allowed');

class Test extends CI_Controller
{

    public function index()
    {
        $this->load->view('webcam/index');
        // $this->load->view('login/auth_header');
        // $this->load->view('login/auth_footer');
    }
}
