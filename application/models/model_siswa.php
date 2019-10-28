<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_siswa extends CI_Model {

	public function getdata($key){
		$this->db->where('id_siswa',$key);
		$hasil = $this->db->get('siswa');
		return $this->db->get('siswa');
	}
	function update($id_siswa)
	{
		$this->db->where('id_siswa',$id_siswa);
		return $this->db->get('siswa');
	}
	public function hasil()
	{
		return $this->db->get('siswa');
	}
	public function get(){
  	return $this->db->get("kelas");
 }
}