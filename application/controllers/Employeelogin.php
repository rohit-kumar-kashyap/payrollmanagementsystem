<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employeelogin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('employee_login_model');
    }

    public function index()
    {
        $this->title = 'Employee login';
        $this->load->helper('url');
        $this->load->view('login-page-layout/header');
        $this->load->view('login-page-layout/employee-login');
        $this->load->view('login-page-layout/footer');
    }

    function login_validation()
    {
        $emp_id = $this->input->post('empid');
        $password = $this->input->post('password');
        //model function
        if($this->employeeDetails = $this->employee_login_model->fetchlogindetails($emp_id)){
            $row = $this->employeeDetails->row();
            $EmployeeName = $row->fullname;

            $session_data = array(
                'employeename' => $EmployeeName
            );
            $this->session->set_userdata($session_data);
        }

        if($this->employee_login_model->can_login($emp_id, $password)->num_rows()>0){
            $session_data = array(
                'empId' => $emp_id
            );
            $this->session->set_userdata($session_data);
            redirect(base_url() . 'employeelogin/enter');
        }
        else{
            $this->session->set_flashdata('error', 'Invalid Employee Id and Password');
            redirect(base_url() . 'employeelogin');
        }
    }

    function enter()
    {
        redirect(base_url() . 'employeedashboard');
    }

    function logout()
    {
        $this->session->unset_userdata('empId');
        redirect(base_url() . 'employeelogin');
    }
}
