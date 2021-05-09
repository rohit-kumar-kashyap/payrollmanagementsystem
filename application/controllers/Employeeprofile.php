<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employeeprofile extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('Pdf');
        $this->load->model('employeeprofile_model');
    }

    public function index()
    {
        $this->isLoggedIn();
        $this->title = 'Your Profile';
        $this->load->helper('url');
        $loggin_emp_id = $_SESSION['empId'];
        $this->editSaveDataFields = $this->employeeprofile_model->fetchEmployeeProfiletoEdit($loggin_emp_id);
        $this->load->view('employee-dashboard-layout/header');
        $this->load->view('employee-dashboard-layout/employee_profile');
        $this->load->view('employee-dashboard-layout/footer');
    }

    function updateformdetails(){
        $empid = $this->input->post('employee_id');
        $updateEmployeeProfileData = array(
            'fathername' => $this->input->post('fathername'),
            'email' => $this->input->post('email'),
            'dob' => $this->input->post('dob'),
            'contact' => $this->input->post('contact'),
            'nationality' => $this->input->post('nationality'),
            'address' => $this->input->post('address'),
            'state' => $this->input->post('state'),
            'city' => $this->input->post('city'),
            'pincode' => $this->input->post('pincode'),
            'marital_status' => $this->input->post('marital_status'),
            'updated_at' => date('Y-m-d')
        );

        $id['updateData'] = $this->employeeprofile_model->updateEmployeeprofData($empid,$updateEmployeeProfileData);
        
        $response = array(
            'status' => 'success',
            //'message' => "Earning detail updated successfully."
        );

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
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