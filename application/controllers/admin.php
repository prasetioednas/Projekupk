<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

	public function index()
	{
		$this->load->view('v_index');
	}
	public function cekLogin()
	{
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));

		$cek = $this->model_login->cek($username,$password)->result();

		if ($cek != NULL) {
			foreach($cek as $a){
				$data['username'] = $a->username;
				$data['namalengkap'] = $a->namalengkap;
				}
				// session masuk
				$this->session->set_userdata($data);
				echo "<script>
				alert('anda berhasil login sebagai ".$data['namalengkap']."')
				</script>";
				redirect('home','refresh');
			} else{
				echo "<script> 
				alert('Username dan Password salah')</script>";
				redirect('admin','refresh');
		}
	}
	function logout() {
     $this->session->sess_destroy();
//kembali/redirect ke halaman login.php
	$this->load->view('v_index','refresh');
}
}
