<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employeesetting extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('employeesetting_model');
    }

    public function index()
    {
        $this->title = 'Employee Setting';
        $this->load->helper('url');
        $this->isLoggedIn();

        $this->employee_id = $this->session->userdata('empId');
        $this->profileData = $this->employeesetting_model->get_profile_data($this->employee_id);

        $this->load->view('employee-dashboard-layout/header');
        $this->load->view('employee-dashboard-layout/setting');
        $this->load->view('employee-dashboard-layout/footer');
    }

    function profile_update(){
        $Empid = $this->input->post('employeeId');
        $EmployeeEmail = $this->input->post('employeeemail');
        $EmployeePassword = $this->input->post('employeepassword');
        $pre_profile_image = $this->input->post('pre_profile_image');

        $direcoty = './assets/employeephoto/';
        if ($_FILES['employeephoto']['tmp_name']) {
            if ($pre_profile_image !=""){
                @unlink($direcoty.$pre_profile_image);
            }
            $profilePicName = rand().$_FILES['employeephoto']['name'];
            move_uploaded_file($_FILES['employeephoto']['tmp_name'],$direcoty.$profilePicName) or die("Error in image move".$_FILES['employeephoto']['error']);
        }else{
            $profilePicName = $pre_profile_image;
        }

        $update =  $this->employeesetting_model->profile_update($Empid,$EmployeeEmail,$EmployeePassword);
        $this->employeesetting_model->profile_pic_update($Empid,$profilePicName);
        if($update){
            $_SESSION['empId'] = $Empid;
            $this->session->set_flashdata('msg', 'success');
        }else{
            $this->session->set_flashdata('msg', 'failed');
        }
        $_SESSION['adminphotoname'] = $profilePicName;
        redirect(base_url().'employeesetting');
    }

    function isLoggedIn()
    {
        if (! isset($_SESSION['empId'])){
            redirect(base_url('/'));
        }
    }

}