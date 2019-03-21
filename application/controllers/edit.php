<?php 


class edit extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('ModelAccount');
		$this->load->helper('url');

	}

	function index(){
		$this->load->view('edit');
	}

	function tambah(){
		$this->load->view('edit');
	}

	function tambah_aksi(){
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$nosim = $this->input->post('sim');
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$data = array(
			'alamat' => $alamat,
			'nosim' => $nosim,
			'nama' => $nama,
			'email' => $email,
			'password' => $password
			);

		$this->register->input_data($data,'pelanggan');
		$data['regis'] = ('1');
        $this->load->view('Login',$data);
	}

}