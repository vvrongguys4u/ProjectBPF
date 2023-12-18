<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

/**
 *
 * Controller Account
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

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


/* End of file Account.php */
/* Location: ./application/controllers/Account.php */