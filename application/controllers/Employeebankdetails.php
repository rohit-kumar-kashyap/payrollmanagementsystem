<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employeebankdetails extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('adminaddempbankdetails_model');
    }

    public function index()
    {
        $this->title = 'Add Employees Bank Details';
        $this->load->helper('url');
        $this->isLoggedIn();
        $this->admin_email = $this->session->userdata('email');
        $this->load->view('admin-dashboard-layout/header');
        $this->load->view('admin-dashboard-layout/add_emp_bank_details');
        $this->load->view('admin-dashboard-layout/footer');
    }

    public function savedata(){
        $AddempbankData = array(
            'emp_id' => $this->input->post('employeeid'),
            'bank_name' => $this->input->post('bankname'),
            'bank_branch_name' => $this->input->post('bankbranchname'),
            'account_number' => $this->input->post('accountno'),
            'ifsc_code' => $this->input->post('ifsccode'),
            'uan_number' => $this->input->post('uanno'),
            'generated_at' => date('Y-m-d')
        );

        $id = $this->adminaddempbankdetails_model->saveEmpBankDetails($AddempbankData);

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