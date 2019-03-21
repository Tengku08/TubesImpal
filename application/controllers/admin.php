<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {
	public function index()
	{
		$data['regis'] = ('0');
        $data['title'] = ('PREMIUM RENTAL');
		$this->load->view('Admin/login',$data);
	}
}
