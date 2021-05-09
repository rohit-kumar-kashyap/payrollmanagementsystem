<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminDashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admindashboard_model');
    }

    public function index()
    {
        $this->title = 'Admin Dashboard';
        $this->load->helper('url');
        $this->isLoggedIn();
        $this->admin_email = $this->session->userdata('email');
        $this->load->view('admin-dashboard-layout/header');
        $this->load->view('admin-dashboard-layout/dashboard');
        $this->load->view('admin-dashboard-layout/footer');
    }

    function isLoggedIn()
    {
        if (! isset($_SESSION['email'])){
            redirect(base_url('/'));
        }
    }

}