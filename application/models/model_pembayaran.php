<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_pembayaran extends CI_Model {

	public function getdata($key){
		$this->db->where('id_pembayaran',$key);
		$hasil = $this->db->get('jenis_pembayaran');
		return $this->db->get('jenis_pembayaran');
	}
	function update($id_pembayaran)
	{
		$this->db->where('id_pembayaran',$id_pembayaran);
		return $this->db->get('jenis_pembayaran');
	}
	public function hasil()
	{
		return $this->db->get('jenis_pembayaran');
	}
}