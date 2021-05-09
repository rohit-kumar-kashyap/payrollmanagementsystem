<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employeepayslip extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('Pdf');
        $this->load->model('employeepayslip_model');
    }

    public function index()
    {
        $this->isLoggedIn();
        $this->title = 'Your Payslip';
        $this->load->helper('url');
        $employeePayslip = $_SESSION['empId'];
        $this->SaveDataResult = $this->employeepayslip_model->fetchemppayrolldetails($employeePayslip);
        $this->load->view('employee-dashboard-layout/header');
        $this->load->view('employee-dashboard-layout/employee_payslip');
        $this->load->view('employee-dashboard-layout/footer');
    }

    public function printPayslipPdf()
    {
        $empid = $this->uri->segment(3);
        $result['pdfData'] = $this->employeepayslip_model->fetchDataPayrollPrint($empid);
        $this->load->view('pdf/PayrollslipPDF',$result);
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