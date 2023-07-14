<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

  // Email(username), Nic, Role have to be taken as session vars
  public function index()
  {
    if ($this->session->userdata('Username' != '')) {
      redirect(base_url() . 'index.php/Welcome/logout');
    }
    $this->load->view('manager/index.php');
  }
  
  public function logView()
  {
    if ($this->session->userdata('Username' != '')) {
      redirect(base_url() . 'index.php/Welcome/logout');
    }
    $this->load->view('manager/log.php');
  }


  public function verifyuser()
  {
    $this->load->model('welcome_model');
    $login = $this->welcome_model->verifyuser($this->input->post());

    if (count($login)) {
      $data = array('Id' => $login['0']['id'], 'Username' => $login['0']['username'],  'Department' => $login['0']['department']);

      $this->session->set_userdata($data);
      if ($login['0']['department'] == 'admin') {
        echo "admin";
      } else {
        echo "user";
      }
    } else {
      echo false;
    }
  }
  public function registration()
  {
    $this->load->model('welcome_model');
    $reg = $this->welcome_model->user_registration($this->input->post());

  }
  
  public function logout()
  {
    $this->session->unset_userdata('Id');
    $this->session->unset_userdata('Username');
    $this->session->unset_userdata('Department');

    redirect(base_url() . 'index.php/Welcome/logView');
  }
  
}
