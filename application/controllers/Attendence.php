<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Attendence extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('adminempattendence_model');
    }

    public function index()
    {
        $this->title = 'Employee Attendence';
        $this->load->helper('url');
        $this->isLoggedIn();
        $this->admin_email = $this->session->userdata('email');
        $this->load->view('admin-dashboard-layout/header');
        $this->load->view('admin-dashboard-layout/emp_attendence');
        $this->load->view('admin-dashboard-layout/footer');
    }

    public function savedata(){
        $AttendenceData = array(
            'emp_id' => $this->input->post('employeeId'),
            'month' => $this->input->post('attendencemonth'),
            'year' => $this->input->post('attendence_year'),
            'absent' => $this->input->post('absentno'),
            'present_no' => $this->input->post('presentno'),
            'month_working_days' => $this->input->post('working_days'),
            'generated_at' => date('Y-m-d')
        );

        $id = $this->adminempattendence_model->saveEmpAttendenceDetails($AttendenceData);

        $response = array(
            'status' => 'success'
        );

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
    }

    function isLoggedIn()
    {
        if (! isset($_SESSION['email'])){
            redirect(base_url('/'));
        }
    }

}