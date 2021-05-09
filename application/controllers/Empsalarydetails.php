<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empsalarydetails extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('Pdf');
        $this->load->model('employeesalary_model');
    }

    public function index()
    {
        $this->isLoggedIn();
        $this->title = 'Your Salary Details';
        $this->load->helper('url');
        $empidSalary = $_SESSION['empId'];
        $this->editSaveDataFields = $this->employeesalary_model->fetchempsalary($empidSalary);
        $this->load->view('employee-dashboard-layout/header');
        $this->load->view('employee-dashboard-layout/employee_salary_detail');
        $this->load->view('employee-dashboard-layout/footer');
    }

    function isLoggedIn()
    {
        if (! isset($_SESSION['empId'])){
            redirect(base_url('/'));
        }
    }

    function logout()
    {
        $this->session->unset_userdata('empId');
        redirect(base_url() . '/');
    }
}