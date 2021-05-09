<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminlogin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_login_model');
    }

    public function index()
    {
        $this->title = 'Admin login';
        $this->load->helper('url');
        $this->load->view('login-page-layout/header');
        $this->load->view('login-page-layout/admin-login');
        $this->load->view('login-page-layout/footer');
    }

    function login_validation()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        //model function
        if($this->adminDetails = $this->admin_login_model->fetchlogindetails($email)){
            $row = $this->adminDetails->row();
            $AdminName = $row->fullname;

            $session_data = array(
                'adminname' => $AdminName
            );
            $this->session->set_userdata($session_data);
        }

        if($this->admin_login_model->can_login($email, $password)->num_rows()>0){
            $session_data = array(
                'email' => $email
            );
            $this->session->set_userdata($session_data);
            redirect(base_url() . 'adminlogin/enter');
        }
        else{
            $this->session->set_flashdata('error', 'Invalid Username and Password');
            redirect(base_url() . 'adminlogin');
        }
    }

    function enter()
    {
        redirect(base_url() . 'admindashboard');
    }

    function logout()
    {
        $this->session->unset_userdata('email');
        redirect(base_url() . 'adminlogin');
    }
}
