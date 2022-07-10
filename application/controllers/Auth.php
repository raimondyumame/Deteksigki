<?php
defined('BASEPATH') or exit('Np direct script acces allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');


        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login Page';
            $this->load->view('login/view_login');
            $this->load->view('login/auth_header', $data);
            $this->load->view('login/auth_footer');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');



        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        // jika usernya ada
        if ($user) {
            //jika usernya aktif
            if ($user['is_active'] == 1) {
                //cek passwordnya
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id'],


                    ];

                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 1) {
                        redirect('admin');
                    } else {

                        redirect('User');
                    }


                    //ini untuk arahkan ke controller admin atau user 

                } else {
                    $this->session->set_flashdata('messsage', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('messsage', '<div class="alert alert-danger" role="alert">Email has not been activated!</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('messsage', '<div class="alert alert-danger" role="alert">Email is not registered!</div>');
            redirect('auth');
        }
    }

    public function registrasi()


    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registered!'

        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|matches[password1]');


        if ($this->form_validation->run() == false) {
            $data['title'] = 'GKI REGISTRASI';
            $this->load->view('templates/aute_footer');
            $this->load->view('registrasi/registrasi', $data);
            $this->load->view('templates/aute_header', $data);
        } else {
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                //htmlspecialchars($this->input->post('name', true));
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'admin.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 1,
                'is_active' => 1,
                'date_created' => time()

                // "id" => $this->input->post('id', true),
                // "name" => $this->input->post('name', true),
                // "email" => $this->input->post('email', true),
                // "password" => $this->input->post('password', true),
                // // "role_id" => $this->input->post('role_id', true),
                // // "is_active" => $this->input->post('is_active', true),
                // 'role_id' => 1,
                // 'is_active' => 1,
                // "date_created" => $this->input->post('date_created', true),
                // 'date_created' => time()



            ];

            $this->db->insert('user', $data);

            $this->session->set_flashdata('messsage', '<div class="alert alert-success" role="alert">Berhasil membuat akun!</div>');

            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('messsage', '<div class="alert alert-success" role="alert">You have been logged out!</div>');
        redirect('auth');
    }
}
