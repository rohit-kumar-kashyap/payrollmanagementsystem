<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empbankdetails extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('Pdf');
        $this->load->model('employeebankdetails_model');
    }

    public function index()
    {
        $this->isLoggedIn();
        $this->title = 'Your Bank Details';
        $this->load->helper('url');
        $empBankDetailsId = $_SESSION['empId'];
        $this->editSaveDataFields = $this->employeebankdetails_model->fetchempbankdetailstoEdit($empBankDetailsId);
        $this->load->view('employee-dashboard-layout/header');
        $this->load->view('employee-dashboard-layout/employee_bank_detail');
        $this->load->view('employee-dashboard-layout/footer');
    }

    function updateformdetails(){
        $empid = $this->input->post('employeeid');
        $updateempbankdetailsData = array(
            'bank_name' => $this->input->post('bankname'),
            'bank_branch_name' => $this->input->post('bankbranchname'),
            'account_number' => $this->input->post('accountno'),
            'ifsc_code' => $this->input->post('ifsccode'),
            'uan_number' => $this->input->post('uanno'),
            'updated_at' => date('Y-m-d')
        );

        $id['updateData'] = $this->employeebankdetails_model->updatebankData($empid,$updateempbankdetailsData);

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
