<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

class UserDashboard extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->view("layout/user_header");
    $this->load->view("contact/vw_contact");
    $this->load->view("layout/user_footer");
  }

}