<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserDashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        
    }

    public function index()
    {
        $this->load->view("layout/user_header");
        $this->load->view("userdashboard/vw_userdashboard");
        $this->load->view("layout/user_footer");
    }
}