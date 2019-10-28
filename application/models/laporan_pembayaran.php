<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class laporan_pembayaran extends CI_Model {
 	public function get_all(){
 		return $this->db->get('transaksi')->result();
 	}
 	public function get_nipd_keyword()
 	{
 		$this->db->select('*');
 		$this->db->form('transaksi');
 		$this->db->like('nipd',$keyword);
 		return $this->db->get('transaksi')->result();
 		// return $this->db->get()->result();
 	}
 	public function hasil()
 	{
 		return $this->db->get('transaksi');
 	}
}