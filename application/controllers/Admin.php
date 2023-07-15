<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
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
        if ($this->session->userdata('Department') == 'admin' && $this->session->userdata('Username') != '') {
            $this->load->model('admin_model');
            $data['types'] = $this->admin_model->getAllTypes();
            $data['products'] = $this->admin_model->getProducts();
            $data['stock_dash'] =  $this->admin_model->getStockDetails();
            $data['total'] = $this->admin_model->getTotalStock();
            $data['available'] = $this->admin_model->getAvaiStock();
            $data['low'] = $this->admin_model->getLowStock();
            $data['outof'] = $this->admin_model->getOutStock();
            $this->load->view('manager/dashboard', $data);
        } else {
            redirect(base_url() . 'index.php/Welcome/logout');
        }
    }
    public function dashboardView()
    {
        if ($this->session->userdata('Department') == 'admin' && $this->session->userdata('Username') != '') {
            $this->load->model('admin_model');
            $data['types'] = $this->admin_model->getAllTypes();
            $data['products'] = $this->admin_model->getProducts();
            $data['stock_dash'] =  $this->admin_model->getStockDetails();
            $data['total'] = $this->admin_model->getTotalStock();
            $data['available'] = $this->admin_model->getAvaiStock();
            $data['low'] = $this->admin_model->getLowStock();
            $data['outof'] = $this->admin_model->getOutStock();
            $this->load->view('manager/dashboard', $data);
        } else {
            redirect(base_url() . 'index.php/Welcome/logout');
        }
    }
    public function historyView()
    {
        if ($this->session->userdata('Department') == 'admin' && $this->session->userdata('Username') != '') {
            $this->load->model('admin_model');
            $data['stock_history'] =  $this->admin_model->getStockHistory();
            $this->load->view('manager/history', $data);
        } else {
            redirect(base_url() . 'index.php/Welcome/logout');
        }
    }
    public function inboundView()
    {
        if ($this->session->userdata('Department') == 'admin' && $this->session->userdata('Username') != '') {
            $this->load->model('admin_model');
            $data['types'] = $this->admin_model->getTypes();
            $this->load->view('manager/inbound', $data);
        } else {
            redirect(base_url() . 'index.php/Welcome/logout');
        }
    }
    public function outboundView()
    {
        if ($this->session->userdata('Department') == 'admin' && $this->session->userdata('Username') != '') {
            $this->load->view('manager/outbound');
        } else {
            redirect(base_url() . 'index.php/Welcome/logout');
        }
    }
    public function reportView()
    {
        if ($this->session->userdata('Department') == 'admin' && $this->session->userdata('Username') != '') {
            $this->load->view('manager/report');
        } else {
            redirect(base_url() . 'index.php/Welcome/logout');
        }
    }
    public function profileView()
    {
        if ($this->session->userdata('Department') == 'admin' && $this->session->userdata('Username') != '') {
            $this->load->model('admin_model');
            $data['dp'] = $this->admin_model->getProfile();
            $this->load->view('manager/profile',$data);
        } else {
            redirect(base_url() . 'index.php/Welcome/logout');
        }
    }

    public function addProduct()
    {
        if ($this->session->userdata('Department') == 'admin' && $this->session->userdata('Username') != '') {
            $this->load->model('admin_model');
            $this->admin_model->addProduct($this->input->post());
        } else {
            redirect(base_url() . 'index.php/Welcome/logout');
        }
    }
    public function deleteProduct()
    {
        if ($this->session->userdata('Department') == 'admin' && $this->session->userdata('Username') != '') {
            $this->load->model('admin_model');
            $this->admin_model->deleteProduct($this->input->post());
        } else {
            redirect(base_url() . 'index.php/Welcome/logout');
        }
    }
    public function getprod($id)
    {
        $this->load->model('admin_model');
        $data['prod'] = $this->admin_model->getprod($id);
        echo json_encode($data['prod']);
    }
    public function inboundProducts()
    {
        if ($this->session->userdata('Department') == 'admin' && $this->session->userdata('Username') != '') {
            $this->load->model('admin_model');
            $this->admin_model->inboundProducts($this->input->post());
        } else {
            redirect(base_url() . 'index.php/Welcome/logout');
        }
    }
    public function deleteStock($id)
    {
        if ($this->session->userdata('Department') == 'admin' && $this->session->userdata('Username') != '') {
            $this->load->model('admin_model');
            $this->admin_model->deleteStock($id);
        } else {
            redirect(base_url() . 'index.php/Welcome/logout');
        }
    }
}
