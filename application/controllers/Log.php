<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Log extends CI_Controller
{


    // konstruktor
    public function __construct()
    {

        parent::__construct();
        // load model

        $this->load->model('M_log');
        $this->load->library('form_validation');
    }

    public function index()
    {
        //di dalam fungsi index

        $dt_model_log = $this->M_log->Ambil_Data_Log();

        $data['hasil_log'] = $dt_model_log;


        $this->load->view('datahistory/header');
        $this->load->view('log/view_log', $data);
        $this->load->view('datahistory/footer');
    }
    // public function index1()
    // {
    //     $data['judul'] = 'Daftar Pelanggan';
    //     $data['wajah'] = $this->M_log->ambil_data_log();
    //     // if ($this->input->post('keywoard')) {
    //     //     $data['pelanggan'] = $this->M_log->CariDataPelanggan();

    //     $this->load->view('templates/header', $data);
    //     $this->load->view('pelanggan/view_log', $data);
    //     $this->load->view('templates/footer');
    // }

    public function simpan()
    {
        //di dalam fungsi index
        $hasil['sukses'] = "Berhasil memasukan data";
        $hasil['eror'] = true;
        return json_encode($hasil);
    }


    public function tambah()

    {

        $hasil['sukses'] = "Berhasil memasukan data";
        $hasil['eror'] = true;



        $data['judul'] = 'Form Tambah Data Citra';
        $this->form_validation->set_rules('idwajah', 'Idwajah', 'required');
        $this->form_validation->set_rules('wajahcitra', 'Wajahcitra', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header');
            $this->load->view('log/tambahlog');
            $this->load->view('templates/footer');
        } else {
            $this->M_log->TambahDataCitra();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('log');
        }
    }
    public function hapus($id)
    {
        $this->M_log->HapusDataCitra($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('log');
    }
}
