<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Account extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        
    }

    public function index()
    {
        $this->load->view("layout/header");
        $this->load->view("account/vw_account");
        $this->load->view("layout/footer");
    }
}