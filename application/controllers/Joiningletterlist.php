<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class joiningletterlist extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('Pdf');
        $this->load->model('adminjoiningletter_model');
    }

    public function index()
    {
        $this->isLoggedIn();
        $this->title = 'Joining Letter List';
        $this->load->helper('url');
        $this->SaveDataResult = $this->adminjoiningletter_model->fetchJoiningLetterdetails();
        $this->load->view('admin-dashboard-layout/header');
        $this->load->view('admin-dashboard-layout/joining_letter_list');
        $this->load->view('admin-dashboard-layout/footer');
    }

    public function editformdetails(){
        $this->isLoggedIn();
        $this->title = 'Edit Joining Letter';
        $id = $this->uri->segment(3);
        $this->editSaveDataFields = $this->adminjoiningletter_model->fetchjoininglettertoEdit($id);
        $this->load->view('admin-dashboard-layout/header');
        $this->load->view('admin-dashboard-layout/Edit_joining_letter_list');
        $this->load->view('admin-dashboard-layout/footer');
    }

    function updateformdetails(){
        $rowid = $this->input->post('rowid');
        $updatejoiningletterData = array(
            'company_name' => $this->input->post('company_name'),
            'department' => $this->input->post('department'),
            'designation' => $this->input->post('designation'),
            'month' => $this->input->post('month'),
            'year' => $this->input->post('year'),
            'join_letter_date' => $this->input->post('join_letter_date'),
            'offer_number' => $this->input->post('offer_no'),
            'firstname' => $this->input->post('firstname'),
            'lastname' => $this->input->post('lastname'),
            'address' => $this->input->post('address'),
            'reporting_manager' => $this->input->post('reporting_manager'),
            'annual_ctc' => $this->input->post('annual_ctc'),
            'expect_join_date' => $this->input->post('expect_join_date'),
            'city' => $this->input->post('city'),
            'location' => $this->input->post('location'),
            'posting_location' => $this->input->post('posting_location'),
            'updated_at' => date('Y-m-d')
        );

        $this->adminjoiningletter_model->updateJoiningLetterData($rowid,$updatejoiningletterData);

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

        $this->adminjoiningletter_model->deleteJoiningLetter($id);
        redirect(base_url().'joiningletterlist');
    }

    public function printFormPdf()
    {
        $id = $this->uri->segment(3);
        $result['pdfData'] = $this->adminjoiningletter_model->fetchDataJoinletterPrint($id);
        $this->load->view('pdf/JoiningLetterPDF',$result);
    }

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
