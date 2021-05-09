<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payroll extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('Pdf');
        $this->load->model('adminemppayroll_model');
    }

    public function index()
    {
        $this->isLoggedIn();
        $this->title = 'Employee payroll slip list';
        $this->load->helper('url');
        $this->SaveDataResult = $this->adminemppayroll_model->fetchemppayrolldetails();
        $this->load->view('admin-dashboard-layout/header');
        $this->load->view('admin-dashboard-layout/employee_payroll_list');
        $this->load->view('admin-dashboard-layout/footer');
    }

    public function printFormPdf()
    {
        $empid = $this->uri->segment(3);
        $result['pdfData'] = $this->adminemppayroll_model->fetchDataPayrollPrint($empid);
        $this->load->view('pdf/PayrollslipPDF',$result);
    }

    /*public function editformdetails(){
        $this->isLoggedIn();
        $this->title = 'Edit Employee Attendence Details';
        $id = $this->uri->segment(3);
        $this->editSaveDataFields = $this->adminempattendence_model->fetchempattendencetoEdit($id);
        $this->load->view('admin-dashboard-layout/header');
        $this->load->view('admin-dashboard-layout/edit_employees_attendence_list');
        $this->load->view('admin-dashboard-layout/footer');
    }*/

    /*function updateformdetails(){
        $rowid = $this->input->post('rowid');
        $updateAttendenceData = array(
            'emp_id' => $this->input->post('employeeId'),
            'month' => $this->input->post('attendencemonth'),
            'year' => $this->input->post('attendence_year'),
            'absent' => $this->input->post('absentno'),
            'present_no' => $this->input->post('presentno'),
            'month_working_days' => $this->input->post('working_days'),
            'updated_at' => date('Y-m-d')
        );

        $id['updateData'] = $this->adminempattendence_model->updateattendenceData($rowid,$updateAttendenceData);

        $response = array(
            'status' => 'success',
            //'message' => "Earning detail updated successfully."
        );

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
    }*/

    /*public function deleteformdata()
    {
        $id = $this->uri->segment(3);

        $this->adminempattendence_model->deleteempattendencedetails($id);
        redirect(base_url().'attendencedetails');
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
