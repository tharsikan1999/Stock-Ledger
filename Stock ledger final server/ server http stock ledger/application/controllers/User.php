<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function logout()
    {
        $this->session->unset_userdata('Id');
        $this->session->unset_userdata('Username');
        $this->session->unset_userdata('Department');

        redirect(base_url() . 'index.php/Welcome/logView');
    }
    public function index()
    {
        if ($this->session->userdata('Department') != 'admin' && $this->session->userdata('Username') != '') {
            $this->load->model('admin_model');
            $data['stock_dash'] =  $this->admin_model->getStockDetails();
            $data['total'] = $this->admin_model->getTotalStock();
            $data['available'] = $this->admin_model->getAvaiStock();
            $data['low'] = $this->admin_model->getLowStock();
            $data['outof'] = $this->admin_model->getOutStock();
            $this->load->view('user/dashboard', $data);
        } else {
            redirect(base_url() . 'index.php/Welcome/logout');
        }
    }
    public function profileView()
    {
        if ($this->session->userdata('Department') != 'admin' && $this->session->userdata('Username') != '') {
            $this->load->model('admin_model');
            $data['dp'] = $this->admin_model->getProfile();
            $this->load->view('user/profile',$data);
        } else {
            redirect(base_url() . 'index.php/Welcome/logout');
        }
    }    
    
    
}
