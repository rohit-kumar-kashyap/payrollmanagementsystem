<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="icon" type="image/png" href="<?php echo base_url('assets/front-page-assets/images/favicon.png');?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title><?php echo $this->title; ?></title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo base_url('assets/dashboard-assets/css/bootstrap.min.css');?>" rel="stylesheet" />
        <link href="<?php echo base_url('assets/dashboard-assets/css/paper-dashboard.css?v=2.0.1');?>" rel="stylesheet" />
        <script src="<?php echo base_url('assets/dashboard-assets/js/core/jquery.min.js');?>"></script>
        <link href="<?php echo base_url('assets/dashboard-assets/demo/demo.css');?>" rel="stylesheet" />
        <style>
            ::-webkit-scrollbar {
                width: 5px;
            }
            ::-webkit-scrollbar-track {
                background: #f1f1f1;
            }
            ::-webkit-scrollbar-thumb {
                background: #ef8157;
            }
            .sidepanelimg{
                border-radius:35px;
            }
        </style>
    </head>

    <body class="">
        <div class="wrapper">
            <div class="sidebar" data-color="white" data-active-color="danger">
                <div class="logo">
                    <a href="<?php echo base_url('/');?>" class="simple-text logo-mini">
                        <div class="logo-image-small">
                            <img src="<?php //echo base_url('assets/adminprofilephoto/').$_SESSION['adminphotoname'];?>" class="sidepanelimg">
                        </div>
                    </a>
                    <a href="<?php echo base_url('/');?>" class="simple-text logo-normal">
                        <?php echo $this->session->userdata('employeename'); ?>
                    </a>
                </div>
                <div class="sidebar-wrapper">
                    <ul class="nav">
                        <li <?php if($this->uri->segment(1)=="employeedashboard"){echo 'class="active"';}?>>
                            <a href="<?php echo base_url('employeedashboard');?>">
                                <i class="nc-icon nc-align-left-2"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li <?php if($this->uri->segment(1)=="employeeprofile"){echo 'class="active"';}?>>
                            <a href="<?php echo base_url('employeeprofile');?>">
                                <i class="nc-icon nc-single-02"></i>
                                <p>Profile</p>
                            </a>
                        </li>
                        <li <?php if($this->uri->segment(1)=="empbankdetails"){echo 'class="active"';}?>>
                            <a href="<?php echo base_url('empbankdetails');?>">
                                <i class="nc-icon nc-bank"></i>
                                <p>Bank Details</p>
                            </a>
                        </li>
                        <li <?php if($this->uri->segment(1)=="empsalarydetails"){echo 'class="active"';}?>>
                            <a href="<?php echo base_url('empsalarydetails');?>">
                                <i class="nc-icon nc-tag-content"></i>
                                <p>Salary Details</p>
                            </a>
                        </li>
                        <!--<li <?php //if($this->uri->segment(1)=="employeeattendence"){echo 'class="active"';}?>>
                            <a href="<?php// echo base_url('employeeattendence');?>">
                                <i class="nc-icon nc-touch-id"></i>
                                <p>Attendence</p>
                            </a>
                        </li>!-->
                        <li <?php if($this->uri->segment(1)=="employeepayslip"){echo 'class="active"';}?>>
                            <a href="<?php echo base_url('employeepayslip');?>">
                                <i class="nc-icon nc-paper"></i>
                                <p>Payslip</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="main-panel">
                <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
                    <div class="container-fluid">
                        <div class="navbar-wrapper">
                            <div class="navbar-toggle">
                                <button type="button" class="navbar-toggler">
                                    <span class="navbar-toggler-bar bar1"></span>
                                    <span class="navbar-toggler-bar bar2"></span>
                                    <span class="navbar-toggler-bar bar3"></span>
                                </button>
                            </div>
                            <a class="navbar-brand" href="javascript:;">Employee Dashboard</a>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-bar navbar-kebab"></span>
                            <span class="navbar-toggler-bar navbar-kebab"></span>
                            <span class="navbar-toggler-bar navbar-kebab"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navigation">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link btn-rotate" href="<?php echo 'employeesetting';?>">
                                        <i class="nc-icon nc-settings-gear-65"></i>
                                        <p><span class="d-lg-none d-md-block">Account</span></p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn-rotate" href="<?php echo 'employeelogin/logout';?>">
                                        <i class="nc-icon nc-button-power"></i>
                                        <p><span class="d-lg-none d-md-block">Logout</span></p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>