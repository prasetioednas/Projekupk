<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

	function __construct(){
		parent::__construct();
		if($this->session->userdata('username') == null){
			
			echo '<script>
			alert("Login Dulu Ya!");
			window.location.href ="'.base_url('index.php/admin').'";
			</script>';
		}
	}
	
	public function index(){
		$data['content'] = 'content';
		$data['menu'] = 'Dashboard';
		$data['sub_menu'] = 'menu';
		$data['hasil'] = $this->M_admin->hasil()->num_rows();
		$data['hasil1'] = $this->M_admin->hasil1()->num_rows();
		$data['hasil2'] = $this->model_kelas->hasil()->num_rows();
		$data['hasil3'] = $this->laporan_pembayaran->hasil()->num_rows();
		$this->load->view('Dashboard',$data);
	}
	
}