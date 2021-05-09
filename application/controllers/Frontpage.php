<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontpage extends CI_Controller {
	public function index()
	{
        $this->title = 'Payroll Management System';
        $this->load->helper('url');
        $this->load->view('front-page-layout/header');
		$this->load->view('front-page-layout/index');
        $this->load->view('front-page-layout/footer');
	}
}
