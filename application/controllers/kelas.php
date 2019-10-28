<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kelas extends CI_Controller {
	function __construct(){
		parent::__construct();
		if($this->session->userdata('username') == null){
			
			echo '<script>
			alert("Silahkan Login Terlebih Dahulu!");
			window.location.href ="'.base_url('index.php/admin').'";
			</script>';
		}
	}

	public function index()
	{
		$data['content'] ='data_kelas/kelas';
		$data['isi'] =$this->db->get('kelas');
		$data['hasil'] = $this->model_kelas->hasil()->num_rows();
		$this->load->view('kelas',$data);
	}
}
