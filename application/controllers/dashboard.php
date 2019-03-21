<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {
	public function __construct() {
	    parent::__construct();
	    $this->load->model('ModelAccount');
	}
	public function index(){
		$data['regis'] = ('0');
        $data['title'] = ('PREMIUM RENTAL');
	    $data['result'] = $this->ModelAccount->user();
		$this->load->view('Admin/header',$data);
		$this->load->view('Admin/admin',$data);
		$this->load->view('Admin/footer',$data);

	}
}
