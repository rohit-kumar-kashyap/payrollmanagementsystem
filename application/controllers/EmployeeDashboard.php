<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmployeeDashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('employeedashboard_model');
    }

    public function index()
    {
        $this->title = 'Employee Dashboard';
        $this->load->helper('url');
        $this->isLoggedIn();
        $this->employee_id = $this->session->userdata('empId');
        $employeeId = $this->session->userdata('empId');

        $this->empMedia = $this->employeedashboard_model->employeeMediaData($employeeId);
        $attendanceData['data'] = $this->employeedashboard_model->employeeAttendanceData($employeeId);
        $this->load->view('employee-dashboard-layout/header');
        $this->load->view('employee-dashboard-layout/dashboard',$attendanceData);
        $this->load->view('employee-dashboard-layout/footer');
    }

    function isLoggedIn()
    {
        if (! isset($_SESSION['empId'])){
            redirect(base_url('/'));
        }
    }

}