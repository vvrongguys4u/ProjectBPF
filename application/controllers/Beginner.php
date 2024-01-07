<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

class Beginner extends CI_Controller
{

<<<<<<< HEAD
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->view("layout/header");
    $this->load->view("course/beginner/vw_beginner");
    $this->load->view("layout/footer");
  }

}
=======
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view("layout/header");
        $this->load->view("course/beginner/vw_beginner");
        $this->load->view("layout/footer");
    }

}
>>>>>>> c7180771fdd4e7aaa008046d515f0922dfd655ba
