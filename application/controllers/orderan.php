<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class orderan extends CI_Controller {
	public function __construct() {
	    parent::__construct();
	    $this->load->model('ModelAccount');
	}
	public function index(){
		$data['regis'] = ('0');
        $data['title'] = ('PREMIUM RENTAL');
	    $data['orderan'] = $this->ModelAccount->orderan(1);
		$this->load->view('Admin/header',$data);
		$this->load->view('Admin/orderan',$data);
		$this->load->view('Admin/footer',$data);

	}
}
