<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Admin_model', 'admin_model');
    }

    public function index()
    {

        if (!$this->session->userdata('Email') || $this->session->userdata('Role') !== 'admin') {
            redirect('auth'); 
        }


        $data['admin'] = $this->admin_model->get_all_admins();


        $this->load->view('layout/admin_header');
        $this->load->view('admin/dashboard', $data);
        $this->load->view('layout/admin_footer');
    }
}
