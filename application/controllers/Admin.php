<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // Load necessary models and libraries here
        $this->load->model('User_model', 'user_model');
    }

    public function index()
    {
        // Check if the user is an admin
        if ($this->session->userdata('Role') !== 'Admin') {
            redirect('auth'); // Redirect non-admin users to login
        }

        // Fetch users from the database
        $data['users'] = $this->user_model->get_all_users();

        $this->load->view('layout/admin_header');
        $this->load->view('admin/vw_admin', $data);
        $this->load->view('layout/admin_footer');
    }

}