<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bankdetaillist extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('Pdf');
        $this->load->model('adminaddempbankdetails_model');
    }

    public function index()
    {
        $this->isLoggedIn();
        $this->title = 'Employee Bank Details List';
        $this->load->helper('url');
        $this->SaveDataResult = $this->adminaddempbankdetails_model->fetchempbankdetails();
        $this->load->view('admin-dashboard-layout/header');
        $this->load->view('admin-dashboard-layout/employee_bank_detail_list');
        $this->load->view('admin-dashboard-layout/footer');
    }

    public function editformdetails(){
        $this->isLoggedIn();
        $this->title = 'Edit Employee Bank Details';
        $id = $this->uri->segment(3);
        $this->editSaveDataFields = $this->adminaddempbankdetails_model->fetchempbankdetailstoEdit($id);
        $this->load->view('admin-dashboard-layout/header');
        $this->load->view('admin-dashboard-layout/edit_emp_bank_details_list');
        $this->load->view('admin-dashboard-layout/footer');
    }

    function updateformdetails(){
        $rowid = $this->input->post('rowid');
        $updateempbankdetailsData = array(
            'emp_id' => $this->input->post('employeeid'),
            'bank_name' => $this->input->post('bankname'),
            'bank_branch_name' => $this->input->post('bankbranchname'),
            'account_number' => $this->input->post('accountno'),
            'ifsc_code' => $this->input->post('ifsccode'),
            'uan_number' => $this->input->post('uanno'),
            'updated_at' => date('Y-m-d')
        );

        $id['updateData'] = $this->adminaddempbankdetails_model->updatebankData($rowid,$updateempbankdetailsData);

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

        $this->adminaddempbankdetails_model->deleteempbankdetails($id);
        redirect(base_url().'bankdetaillist');
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
