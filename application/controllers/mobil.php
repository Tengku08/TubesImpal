<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mobil extends CI_Controller {
	public function __construct() {
	    parent::__construct();
	    $this->load->model('ModelAccount');
	}

    public function index() {
		$data['email'] = $_SESSION["eml"];
        $data['title'] = ('PREMIUM RENTAL');
		$data['email'] = $this->session->userdata('email');
		$data['mobil'] = $this->ModelAccount->mobil();
        $this->load->view('templates/header', $data);
        $this->load->view('mobil',$data);
    }

	function tambahm_aksi(){
		$tanggal1 = $this->input->post('tanggal1');
		$lama = $this->input->post('lama');
		$date = date('Y-m-d H:i:s');
		$where = $_SESSION["eml"] ;
    	$id = $this->ModelAccount->akunid($where);
    	foreach ($id->result() as $row)  { 
				$idp=$row->IdPelanggan;
    	}
		$mobil = $this->input->post('mobil');
		$harga = 0;
    	if ($mobil == 1){
    		$harga = 300000 * $lama;
    	}else if ($mobil == 2) {
    		$harga = 400000 * $lama;
    	}else{
    		$harga = 300000 * $lama;
    	}

		$data = array(
			'tgl_transaksi' => $date,
			'tgl_sewa' =>  $tanggal1,
			'idPelanggan' => $idp,
			'id_kendaraan' => $mobil,
			'harga' => $harga,
			'lama' => $lama,
			'status' => 2,
			);
		$this->ModelAccount->input_data($data,'transaksi');
		$data['sewa'] = $this->ModelAccount->datauser($where);
	    $data['result'] = $this->ModelAccount->akun($where);
		$data['regis'] = ('0');
        $data['title'] = ('PREMIUM RENTAL');
        $this->load->view('templates/header', $data);
        $this->load->view('product',$data);
	}

	
}
