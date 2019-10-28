<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_user extends CI_Model {

	public function getdata($key){
		$this->db->where('id_username',$key);
		$hasil = $this->db->get('admin');
		return $this->db->get('admin');
	}
	public function simpan_admin($id_username,$email,$username,$password,$nama_lengkap)
	{
		$hasil=$this->db->query("INSERT INTO admin (id_username,email,username,password,nama_lengkap) VALUES ('$id_username','$email','$username','$password','$nama_lengkap')");
        return $hasil;
	}
}