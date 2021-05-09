<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Attendencedetails extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('Pdf');
        $this->load->model('adminempattendence_model');
    }

    public function index()
    {
        $this->isLoggedIn();
        $this->title = 'Employee Attendence List';
        $this->load->helper('url');
        $this->SaveDataResult = $this->adminempattendence_model->fetchempattendencedetails();
        $this->load->view('admin-dashboard-layout/header');
        $this->load->view('admin-dashboard-layout/employee_attendence_list');
        $this->load->view('admin-dashboard-layout/footer');
    }

    public function editformdetails(){
        $this->isLoggedIn();
        $this->title = 'Edit Employee Attendence Details';
        $id = $this->uri->segment(3);
        $this->editSaveDataFields = $this->adminempattendence_model->fetchempattendencetoEdit($id);
        $this->load->view('admin-dashboard-layout/header');
        $this->load->view('admin-dashboard-layout/edit_employees_attendence_list');
        $this->load->view('admin-dashboard-layout/footer');
    }

    function updateformdetails(){
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
    }

    public function deleteformdata()
    {
        $id = $this->uri->segment(3);

        $this->adminempattendence_model->deleteempattendencedetails($id);
        redirect(base_url().'attendencedetails');
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
