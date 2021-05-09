<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Salarylist extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('Pdf');
        $this->load->model('adminempsalary_model');
    }

    public function index()
    {
        $this->isLoggedIn();
        $this->title = 'Employee Salary List';
        $this->load->helper('url');
        $this->SaveDataResult = $this->adminempsalary_model->fetchempsalarydetails();
        $this->load->view('admin-dashboard-layout/header');
        $this->load->view('admin-dashboard-layout/emp_salary_list');
        $this->load->view('admin-dashboard-layout/footer');
    }

    public function editformdetails(){
        $this->isLoggedIn();
        $this->title = 'Edit Employee Salary Details';
        $id = $this->uri->segment(3);
        $this->editSaveDataFields = $this->adminempsalary_model->fetchempsalarytoEdit($id);
        $this->load->view('admin-dashboard-layout/header');
        $this->load->view('admin-dashboard-layout/edit_emp_salary_list');
        $this->load->view('admin-dashboard-layout/footer');
    }

    function updateformdetails(){
        $rowid = $this->input->post('rowid');
        $updateSalaryData = array(
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
            'updated_at' => date('Y-m-d')
        );

        $id['updateData'] = $this->adminempsalary_model->updatesalaryData($rowid,$updateSalaryData);

        $response = array(
            'status' => 'success',
            //'message' => "Earning detail updated successfully."
        );

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
    }

    public function deleteformdata()
    {
        $id = $this->uri->segment(3);

        $this->adminempsalary_model->deleteempsalarydetails($id);
        redirect(base_url().'salarylist');
    }

    /*public function printFormPdf()
    {
        $id = $this->uri->segment(3);
        $result['pdfData'] = $this->adminjoiningletter_model->fetchDataJoinletterPrint($id);
        $this->load->view('pdf/JoiningLetterPDF',$result);
    }*/

    function isLoggedIn()
    {
        if (! isset($_SESSION['email'])){
            redirect(base_url('/'));
        }
    }

    function logout()
    {
        $this->session->unset_userdata('email');
        redirect(base_url() . '/');
    }
}