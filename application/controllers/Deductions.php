<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Deductions extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('Pdf');
        $this->load->model('adminempsaldeduction_model');
    }

    public function index()
    {
        $this->title = 'Deduction';
        $this->load->helper('url');
        $this->isLoggedIn();
        $this->SaveDataResult = $this->adminempsaldeduction_model->fetchempdeductiondetails();
        $this->admin_email = $this->session->userdata('email');
        $this->load->view('admin-dashboard-layout/header');
        $this->load->view('admin-dashboard-layout/emp_deduction');
        $this->load->view('admin-dashboard-layout/footer');
    }

    public function savedata(){
        $DeductionData = array(
            'emp_id' => $this->input->post('employeeId'),
            'month' => $this->input->post('deductionmonth'),
            'year' => $this->input->post('deduction_year'),
            'advance_money' => $this->input->post('advance_money'),
            'generated_at' => date('Y-m-d')
        );

        //print_r($DeductionData);

        $id = $this->adminempsaldeduction_model->saveEmpDeductionDetails($DeductionData);

        $response = array(
            'status' => 'success'
        );

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
    }

    public function editformdetails(){
        $this->isLoggedIn();
        $this->title = 'Edit Deduction Details';
        $id = $this->uri->segment(3);
        $this->editSaveDataFields = $this->adminempsaldeduction_model->fetchempdeductiontoEdit($id);
        $this->load->view('admin-dashboard-layout/header');
        $this->load->view('admin-dashboard-layout/edit_deduction_list');
        $this->load->view('admin-dashboard-layout/footer');
    }

    function updateformdetails(){
        $rowid = $this->input->post('rowid');
        $updatedeductionData = array(
            'emp_id' => $this->input->post('employeeId'),
            'month' => $this->input->post('deductionmonth'),
            'year' => $this->input->post('deduction_year'),
            'advance_money' => $this->input->post('advance_money'),
            'updated_at' => date('Y-m-d')
        );

        $id['updateData'] = $this->adminempsaldeduction_model->updatedeductionData($rowid,$updatedeductionData);

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

        $this->adminempsaldeduction_model->deleteempdeductiondetails($id);
        redirect(base_url().'deductions');
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

}