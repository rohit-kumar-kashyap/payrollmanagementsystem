<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $this->title; ?></title>
    <link rel="icon" type="image/png" href="<?php echo base_url('assets/front-page-assets/images/favicon.png');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script>
        addEventListener("load", function () { setTimeout(hideURLbar, 0); }, false); function hideURLbar() { window.scrollTo(0, 1); }
    </script>
    <link href="<?php echo base_url('assets/front-page-assets/css/font-awesome.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/front-page-assets/css/style.css');?>" rel='stylesheet' type='text/css' media="all">
    <link href="//fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <style>
        .admin-login, .employee-login{
            width:40%;
        }
        .admin-card{
            margin-bottom: 35px;
        }
        .employee-card{
            margin-top: 35px;
        }
        .admin-label, .employee-label{
            padding: 15px;
            border-radius: 5px;
            margin-top: 15px;
            background-color: #C9DBFD;
            color: #fff;
            font-weight: bolder;
            cursor:pointer;
        }
    </style>
</head>