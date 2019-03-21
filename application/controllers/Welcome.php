<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct() {
	    parent::__construct();
	    $this->load->model('ModelAccount');
	}
	public function index()
	{
		$data['mobil'] = $this->ModelAccount->mobil();		
        $data['title'] = ('PREMIUM RENTAL');
        $this->load->view('templates/header', $data);
		$this->load->view('index');
	}

	function aksi_login()
	{
        $data['title'] = ('PREMIUM RENTAL');
        $this->load->view('templates/header', $data);
		$this->load->view('singin');
	}
	function admin()
	{
        $data['title'] = ('PREMIUM RENTAL');
		$this->load->view('Admin/login');
	}
}
