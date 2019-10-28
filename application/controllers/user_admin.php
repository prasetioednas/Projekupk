<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_admin extends CI_Controller {
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
		$data['content'] ='data_admin/tampilan_admin';
		$data['isi'] =$this->db->get('admin');
		$data['nomor'] = $this->kodeadmin();
		$this->load->view('admin',$data);
	}

	public function kodeadmin(){
		$sql="SELECT * FROM admin ORDER BY id_username DESC LIMIT 1";
		// menampilkan hasil
		$jumlah = $this->db->query($sql)->num_rows();

		$rows = $this->db->query($sql)->row();

		if ($rows != null) {
			// menampilkan data terakhir
			$last = substr($rows->id_username,3,3);
			$nomor = ($last+$jumlah);

			if ($nomor <10) {
				$id_username = "AD-00".$nomor;
			}elseif ($nomor>=10){
				$id_username = "AD-0".$nomor;
			}else{
				$id_username = "AD-".$nomor;
			}
			
			return $id_username;
		}
		else{
			return $id_username = 'AD-001';	
		}		
	}

	function simpan_data()
	{
		$id_username=$this->input->post('id_username');
        $email=$this->input->post('email');
        $username=$this->input->post('username');
        $password=$this->input->post('password');
        $nama_lengkap=$this->input->post('namalengkap');

        $data = array(
			'id_username'=> $id_username,
			'email'=> $email,
			'username'=> $username,
			'password'=> md5($password),
			'namalengkap'=> $nama_lengkap
		);
     	$this->db->insert('admin',$data);
        redirect('user_admin','refresh');
	}
	public function update()
	{
		
		$this->load->view('update_admin',$a);
	}
	public function hapus_data(){
		$id_username = $this->uri->segment(3);
	    $this->db->where('id_username', $id_username);
	    $this->db->delete('admin');
	    redirect('user_admin');
	}
}
