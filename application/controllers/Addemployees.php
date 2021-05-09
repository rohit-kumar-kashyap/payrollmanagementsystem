<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Addemployees extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('adminaddemployees_model');
    }

    public function index()
    {
        $this->title = 'Add Employees';
        $this->load->helper('url');
        $this->isLoggedIn();
        $this->admin_email = $this->session->userdata('email');
        $this->load->view('admin-dashboard-layout/header');
        $this->load->view('admin-dashboard-layout/add_employee');
        $this->load->view('admin-dashboard-layout/footer');
    }

    public function savedata(){
        $employeeId = rand(000000,999999);
        $EmpId = 'EMP'.$employeeId;
        $AddemployeeData = array(
            'fullname' => $this->input->post('fullname'),
            'fathername' => $this->input->post('fathername'),
            'email' => $this->input->post('email'),
            'dob' => $this->input->post('dob'),
            'contact' => $this->input->post('contact'),
            'nationality' => $this->input->post('nationality'),
            'address' => $this->input->post('address'),
            'state' => $this->input->post('state'),
            'city' => $this->input->post('city'),
            'pincode' => $this->input->post('pincode'),
            'marital_status' => $this->input->post('marital_status'),
            'joining_date' => $this->input->post('joining_date'),
            'aadhar_number' => $this->input->post('aadhar_no'),
            'generated_at' => date('Y-m-d'),
            'emp_id' => $EmpId
        );

        $id = $this->adminaddemployees_model->saveAddemployeeDetails($AddemployeeData);

        if($id) {
            $emplogindata = array(
                'email' => $this->input->post('email'),
                'password' => $this->input->post('contact'),
                'generated_at' => date('Y-m-d'),
                'emp_id' => $EmpId
            );

            $loginid = $this->adminaddemployees_model->saveempLoginDetails($emplogindata);
        }

        if($id){
            $empdesignationdata = array(
                'department' => $this->input->post('department'),
                'designation' => $this->input->post('designation'),
                'basic_salary' => $this->input->post('basic_salary'),
                'generated_at' => date('Y-m-d'),
                'emp_id' => $EmpId
            );

            $this->adminaddemployees_model->saveempdesigDetails($empdesignationdata);
        }

        if($id){
            $emp_aadhar = $this->input->post('pre_aadhar_upload');
            $emp_resume = $this->input->post('pre_resumeupload');
            $emp_photo = $this->input->post('pre_photoupload');
            $emp_joining_letter = $this->input->post('pre_joiningletterupload');

            $direcoty = './assets/employeeaadharcard/';
            if ($_FILES['aadhar_upload']['tmp_name']) {
                if ($emp_aadhar !=""){
                    @unlink($direcoty.$emp_aadhar);
                }
                $aadharPicName = rand().$_FILES['aadhar_upload']['name'];
                move_uploaded_file($_FILES['aadhar_upload']['tmp_name'],$direcoty.$aadharPicName) or die("Error in image move".$_FILES['aadhar_upload']['error']);
            }else{
                $aadharPicName = $emp_aadhar;
            }

            $direcoty = './assets/employeeresume/';
            if ($_FILES['resumeupload']['tmp_name']) {
                if ($emp_resume !=""){
                    @unlink($direcoty.$emp_resume);
                }
                $resumePicName = rand().$_FILES['resumeupload']['name'];
                move_uploaded_file($_FILES['resumeupload']['tmp_name'],$direcoty.$resumePicName) or die("Error in image move".$_FILES['resumeupload']['error']);
            }else{
                $resumePicName = $emp_resume;
            }

            $direcoty = './assets/employeephoto/';
            if ($_FILES['photoupload']['tmp_name']) {
                if ($emp_photo !=""){
                    @unlink($direcoty.$emp_photo);
                }
                $photoPicName = rand().$_FILES['photoupload']['name'];
                move_uploaded_file($_FILES['photoupload']['tmp_name'],$direcoty.$photoPicName) or die("Error in image move".$_FILES['photoupload']['error']);
            }else{
                $photoPicName = $emp_photo;
            }

            $direcoty = './assets/employeejoiningletter/';
            if ($_FILES['joiningletterupload']['tmp_name']) {
                if ($emp_joining_letter !=""){
                    @unlink($direcoty.$emp_joining_letter);
                }
                $joiningletterPicName = rand().$_FILES['joiningletterupload']['name'];
                move_uploaded_file($_FILES['joiningletterupload']['tmp_name'],$direcoty.$joiningletterPicName) or die("Error in image move".$_FILES['joiningletterupload']['error']);
            }else{
                $joiningletterPicName = $emp_joining_letter;
            }

            $empmediadata = array(
                'emp_aadhar' => $aadharPicName,
                'emp_resume' => $resumePicName,
                'emp_photo' => $photoPicName,
                'emp_joining_letter' => $joiningletterPicName,
                'generated_at' => date('Y-m-d'),
                'emp_id' => $EmpId
            );



            $this->adminaddemployees_model->saveempmediaDetails($empmediadata);
        }

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