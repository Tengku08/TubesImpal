<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pembayaran extends CI_Controller {
	public function __construct() {
	    parent::__construct();
	    $this->load->model('ModelAccount');
	}
	public function index(){
	    $data['orderan'] = $this->ModelAccount->orderan(2);
		if (isset($_GET["edit"]) && !empty($_GET["edit"])) {
			$dataa = array(
				'status' => 1
			);
			$id = $_GET["edit"];
		    $this->ModelAccount->editt($id,$dataa);    
		}
	    $data['orderan'] = $this->ModelAccount->orderan(2);
		$data['regis'] = ('0');
        $data['title'] = ('PREMIUM RENTAL');
		$this->load->view('Admin/header',$data);
		$this->load->view('Admin/pembayaran',$data);
		$this->load->view('Admin/footer',$data);

	}
}
