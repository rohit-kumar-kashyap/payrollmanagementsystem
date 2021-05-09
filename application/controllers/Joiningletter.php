<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Joiningletter extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('adminjoiningletter_model');
    }

    public function index()
    {
        $this->title = 'Joining Letter';
        $this->load->helper('url');
        $this->isLoggedIn();
        $this->admin_email = $this->session->userdata('email');
        $this->load->view('admin-dashboard-layout/header');
        $this->load->view('admin-dashboard-layout/joining_letter');
        $this->load->view('admin-dashboard-layout/footer');
    }

    public function savedata(){
        $joiningletterData = array(
            //'emp_id' => $this->input->post('nameof_company'),
            'company_name' => $this->input->post('company_name'),
            'department' => $this->input->post('department'),
            'posting_location' => $this->input->post('posting_location'),
            'month' => $this->input->post('month'),
            'year' => $this->input->post('year'),
            'offer_number' => $this->input->post('offer_no'),
            'join_letter_date' => $this->input->post('join_letter_date'),
            'firstname' => $this->input->post('firstname'),
            'lastname' => $this->input->post('lastname'),
            'address' => $this->input->post('address'),
            'designation' => $this->input->post('designation'),
            'reporting_manager' => $this->input->post('reporting_manager'),
            'annual_ctc' => $this->input->post('annual_ctc'),
            'expect_join_date' => $this->input->post('expect_join_date'),
            'city' => $this->input->post('city'),
            'location' => $this->input->post('location'),
            'generated_at' => date('Y-m-d')
        );

        $id = $this->adminjoiningletter_model->saveJoiningLetterDetails($joiningletterData);

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