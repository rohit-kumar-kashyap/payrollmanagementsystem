<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Salary extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('adminempsalary_model');
    }

    public function index()
    {
        $this->title = 'Employee Salary';
        $this->load->helper('url');
        $this->isLoggedIn();
        $this->admin_email = $this->session->userdata('email');
        $this->load->view('admin-dashboard-layout/header');
        $this->load->view('admin-dashboard-layout/emp_salary');
        $this->load->view('admin-dashboard-layout/footer');
    }

    public function savedata(){
        $SalaryData = array(
            'emp_id' => $this->input->post('employeeId'),
            'fullname' => $this->input->post('fullname'),
            'month' => $this->input->post('attendencemonth'),
            'year' => $this->input->post('attendence_year'),
            'absent_no' => $this->input->post('absentno'),
            'present_no' => $this->input->post('presentno'),
            'working_days' => $this->input->post('working_days'),
            'travel_allowance' => $this->input->post('travel_allowance'),
            'dearness_allowance' => $this->input->post('dearness_allowance'),
            'hra' => $this->input->post('hra'),
            'total_salary' => $this->input->post('total_salary'),
            'pf' => $this->input->post('pf'),
            'esi' => $this->input->post('esi'),
            'netpay' => $this->input->post('net_pay'),
            'basic_salary' => $this->input->post('basic_salary'),
            'increment' => $this->input->post('salary_increment'),
            'advance_money' => $this->input->post('advance_money'),
            'daily_pay' => $this->input->post('daily_pay'),
            'paid_leave' => $this->input->post('paid_leaves'),
            'salary_generation_date' => $this->input->post('salary_generation_date'),
            'generated_at' => date('Y-m-d')
        );

        $id = $this->adminempsalary_model->saveEmpSalaryDetails($SalaryData);

        $response = array(
            'status' => 'success'
        );

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
    }

    function formfilleddata(){
        $commonData = array();
        $Employeeid = $this->input->post('employeeId');
        $EmployeeData = $this->adminempsalary_model->fetchDatatoFill($Employeeid);
        if ($EmployeeData->num_rows()){
            $row = $EmployeeData->row();
            $commonData['status'] = 1;
            $commonData['fullname'] = $row->fullname;
            $commonData['month'] = $row->month;
            $commonData['year'] = $row->year;
            $commonData['absent'] = $row->absent;
            $commonData['present_no'] = $row->present_no;
            $commonData['month_working_days'] = $row->month_working_days;
            $commonData['basic_salary'] = $row->basic_salary;
            $commonData['increment_amount'] = $row->increment_amount;
            $commonData['advance_money'] = $row->advance_money;
        }else{
            $commonData['status'] = 0;
        }
        echo json_encode($commonData);
    }

    function isLoggedIn()
    {
        if (! isset($_SESSION['email'])){
            redirect(base_url('/'));
        }
    }

}