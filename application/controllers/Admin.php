<?php
defined('BASEPATH') or exit('Np direct script acces allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_admin');
        $this->load->library('form_validation');
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
    }
    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/topbar', $data);

        $this->load->view('admin/index', $data);
        $this->load->view('admin/footer');
    }

    public function edit()
    {
        // $data['title'] = 'Edit Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/topbar', $data);

        $this->load->view('admin/edit', $data);
        $this->load->view('admin/footer');
    }
    public function list()
    {
        $this->load->model('M_admin');
        //di dalam fungsi index

        $model_admin = $this->M_admin->Ambil_Data_Admin();

        $data['hasil_admin'] = $model_admin;


        $this->load->view('datahistory/header');
        $this->load->view('admin/listadmin', $data);
        $this->load->view('datahistory/footer');
    }
    public function hapus($id)
    {
        $this->M_admin->HapusDataAdmin($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('admin/list');
    }



    public function ubah($id)

    {

        $hasil['sukses'] = "Berhasil memasukan data";
        $hasil['eror'] = true;
        $data['user'] = $this->M_admin->getAdminById($id);

        $data['judul'] = 'Form Ubah data';
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        // $this->form_validation->set_rules('password', 'Password', 'required');
        // $this->form_validation->set_rules('wajahcitra', 'Wajahcitra', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('datahistory/header', $data);
            $this->load->view('admin/ubahadmin', $data);
            $this->load->view('datahistory/footer');
        } else {
            $this->M_admin->ubahDataAdmin();
            $this->session->set_flashdata('flash', 'Di ubah');
            redirect('admin/list');
        }
    }
    public function sandi()
    {
        $data['title'] = 'Change Password';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('current_password', 'Current password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[3]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[3]|matches[new_password1]');

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('admin/header', $data);
            $this->load->view('admin/sidebar', $data);
            $this->load->view('admin/topbar', $data);

            $this->load->view('admin/gantisandi', $data);
            $this->load->view('admin/footer');
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');
            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('messsage', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
                redirect('admin/sandi');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('messsage', '<div class="alert alert-danger" role="alert">New Password Cannot be the same as current!</div>');
                    redirect('admin/sandi');
                } else {

                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);
                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');
                    $this->session->set_flashdata('messsage', '<div class="alert alert-success" role="alert">Password change!</div>');
                    redirect('admin/sandi');
                }
            }
        }
    }
}
