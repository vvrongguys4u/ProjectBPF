<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model', 'userrole');
    }

    public function index()
    {
        $this->load->view("layout/auth_header");
        $this->load->view("auth/login");
        $this->load->view("layout/auth_footer");
    }

    public function register()
    {
        $this->load->view("layout/auth_header");
        $this->load->view("auth/register");
        $this->load->view("layout/auth_footer");
    }

    public function cek_regis()
    {
        $data = [
            'Nama' => htmlspecialchars($this->input->post('fullname', true)),
            'Email' => htmlspecialchars($this->input->post('email', true)),
            'Password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'Role' => "User"
        ];
        $this->userrole->insert($data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulations, your account has been registered. Please log in!</div>');
        redirect('auth');
    }

    public function cek_login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'Email' => $user['email'],
                    'Role' => $user['Role'],
                    'id' => $user['id'],
                ];
                $this->session->set_userdata($data);
                redirect('Dashboard');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Incorrect password!</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email not registered!</div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('Email');
        $this->session->unset_userdata('Role');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Successfully logged out!</div>');
        redirect('auth');
    }
}