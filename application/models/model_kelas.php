<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_kelas extends CI_Model {

	public function getdata($key){
		$this->db->where('id_kelas',$key);
		$hasil = $this->db->get('kelas');
		return $this->db->get('kelas');
	}
	function update($id_kelas)
	{
		$this->db->where('id_kelas',$id_kelas);
		return $this->db->get('kelas');
	}
	public function hasil()
	{
		return $this->db->get('kelas');
	}
}