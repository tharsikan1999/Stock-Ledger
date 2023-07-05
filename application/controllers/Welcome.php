<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{ 
  
  // Email(username), Nic, Role have to be taken as session vars
  public function index()
  {
    $this->load->view('manager/index.php');
  }
  public function loginView()
  {
    $this->load->view('manager/index.php');
  }
  public function dashboardView()
  {
    $this->load->view('manager/dashboard.php');
  }
  public function historyView()
  {
    $this->load->view('manager/history.php');
  }
  public function inboundView()
  {
    $this->load->view('manager/inbound.php');
  }
  public function outboundView()
  {
    $this->load->view('manager/outbound.php');
  }
  public function reportView()
  {
    $this->load->view('manager/report.php');
  }
  public function logView()
  {
    $this->load->view('manager/log.php');
  }
  
  

  

}
