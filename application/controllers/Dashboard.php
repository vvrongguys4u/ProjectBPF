<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Dashboard_model'); // Pastikan ini telah diatur dengan benar
    }

    public function index()
    {
        $this->load->view("layout/header");
        $this->load->view("dashboard/vw_dashboard");
        $this->load->view("layout/footer");
    }
}