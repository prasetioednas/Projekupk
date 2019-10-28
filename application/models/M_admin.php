<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {
	
	public function ceklogin($data){
		$this->db->where($data);
		return $this->db->get('user');
	}
	function update($id_username){
	$this->db->where('id_username',$id_username);
	return $this->db->get('admin');
}
	function hasil()
	{
		return $this->db->get('admin');
	} 
	function hasil1()
	{
		return $this->db->get('siswa');
	} 
}