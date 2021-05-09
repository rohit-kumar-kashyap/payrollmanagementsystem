<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminsetting extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('adminsetting_model');
    }

    public function index()
    {
        $this->title = 'Admin Dashboard';
        $this->load->helper('url');
        $this->isLoggedIn();

        $this->admin_email = $this->session->userdata('email');
        $this->profileData = $this->adminsetting_model->get_profile_data($this->admin_email);

        $this->load->view('admin-dashboard-layout/header');
        $this->load->view('admin-dashboard-layout/setting');
        $this->load->view('admin-dashboard-layout/footer');
    }

    function profile_update(){
        $id = $this->input->post('updateId');
        $adminName = $this->input->post('adminname');
        $AdminEmail = $this->input->post('adminemail');
        $AdminPassword = $this->input->post('adminpassword');
        $pre_profile_image = $this->input->post('pre_profile_image');

        $direcoty = './assets/adminprofilephoto/';
        if ($_FILES['adminphoto']['tmp_name']) {
            if ($pre_profile_image !=""){
                @unlink($direcoty.$pre_profile_image);
            }
            $profilePicName = rand().$_FILES['adminphoto']['name'];
            move_uploaded_file($_FILES['adminphoto']['tmp_name'],$direcoty.$profilePicName) or die("Error in image move".$_FILES['adminphoto']['error']);
        }else{
            $profilePicName = $pre_profile_image;
        }

        $update =  $this->adminsetting_model->profile_update($id,$adminName,$AdminEmail,$AdminPassword,$profilePicName);
        if($update){
            $_SESSION['adminname'] = $adminName;
            $this->session->set_flashdata('msg', 'success');
        }else{
            $this->session->set_flashdata('msg', 'failed');
        }
        $_SESSION['adminphotoname'] = $profilePicName;
        redirect(base_url().'adminsetting');
    }

    function isLoggedIn()
    {
        if (! isset($_SESSION['email'])){
            redirect(base_url('/'));
        }
    }

}