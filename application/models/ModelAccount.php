<?php
    class ModelAccount extends CI_Model{  
        function cek_login($table,$where){		
	    	return $this->db->get_where($table,$where);
    	}
    	function akun($where1) {
            $this->db->select('*')
                    ->from('pelanggan')
                    ->where('email =', $where1);
            return $this->db->get(); 
        }   
        function akunid($where1) {
            $this->db->select('IdPelanggan')
                    ->from('pelanggan')
                    ->where('email =', $where1);
            return $this->db->get(); 
        }   
        function user() {
            $this->db->select('*')
                    ->from('pelanggan');
            return $this->db->get(); 
        }      
        function editp($email,$data) {
            $this->db->where('email', $email);
            $this->db->update('pelanggan', $data);
        }      
        function editt($email,$data) {
            $this->db->where('id_transaksi-', $email);
            $this->db->update('transaksi', $data);
        }      


        function kary($where1) {
            $this->db->select('*')
                    ->from('karyawan')
                    ->where('id_karyawan =', $where1);
            return $this->db->get(); 
        }       
        function mobil() {
            $this->db->select('*')
                    ->from('kendaraan');
            return $this->db->get(); 
        }   
        function orderan($where1) {
            $this->db->select('transaksi.*,pelanggan.nama,kendaraan.noplat')
                    ->from('transaksi')
                    ->join('pelanggan', 'IdPelanggan', 'left')
                    ->join('kendaraan', 'id_kendaraan', 'left')
                    ->where('transaksi.status =', $where1);
            return $this->db->get(); 
        }
        
        function datauser($where1) {
            $this->db->select('*,transaksi.*')
                    ->from('pelanggan')
                    ->join('transaksi', 'IdPelanggan', 'left')
                    ->join('kendaraan', 'id_kendaraan', 'left')
                    ->where('email =', $where1);
            return $this->db->get(); 
        } 
        function input_data($data,$table){
                $this->db->insert($table,$data);
        }

    }