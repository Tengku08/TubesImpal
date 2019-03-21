<?php 
class tambaht extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('ModelAccount');
		$this->load->helper('url');

	}

	function index(){
		$data['regis'] = ('0');
        $data['title'] = ('PREMIUM RENTAL');
	    $data['result'] = $this->ModelAccount->user();
		$this->load->view('Admin/header',$data);
		$this->load->view('Admin/tambahk',$data);
		$this->load->view('Admin/footer',$data);	}


}