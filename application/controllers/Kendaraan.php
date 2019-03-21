<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pasien extends CI_Controller {
	public function __construct() {
	    parent::__construct();
	    $this->load->model('ModelAccount');
	}
	public function index()
	{
	    $data['pasien'] = $this->ModelAccount->pasien();
		$data['regis'] = ('0');
        $data['title'] = ('PREMIUM RENTAL');
		$this->load->view('Admin/header',$data);
		$this->load->view('Admin/pasien',$data);
		$this->load->view('Admin/footer',$data);

	}
}
