<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_siswa extends CI_Controller {

	function __construct(){
		parent::__construct();

		if ($this->session->userdata('username') == null) {
			redirect('home');
		}
	}
	
	public function index()
	{
		$data['content'] ='data_siswa/tampilan_siswa';
		$data['isi'] =$this->db->get('siswa');
		$data['hasil'] = $this->model_siswa->hasil()->num_rows();
		$data['nomor'] = $this->kodesiswa();
		$this->load->view('siswa',$data);
	}
	public function kodesiswa()
	{
		$sql="SELECT * FROM siswa ORDER BY id_siswa DESC LIMIT 1";
		$jumlah = $this->db->query($sql)->num_rows();
		$rows = $this->db->query($sql)->row();
		if ($rows != null) {
		 $last = substr($rows->id_siswa,4,2);

		$nomor = ($last+$jumlah);

		if($nomor <10){
			$id_siswa = "S-120".$nomor;
		}else{
			$id_siswa ="S-12".$nomor;
		}
		return $id_siswa;
		}
		else{
		return $nomor = "S-1201";

		}
		
		// redirect('user_siswa');
	}

	function simpan_data()
	{
		$id_siswa = $this->input->post('id_siswa');
		$nipd = $this->input->post('nipd');
		$nama_siswa = $this->input->post('nama_siswa');
		$gender = $this->input->post('gender');
		$id_kelas = $this->input->post('id_kelas');

		$data = array(
			'id_siswa' => $id_siswa,
			'nipd' => $nipd,
			'nama_siswa' => $nama_siswa,
			'gender' => $gender,
			'id_kelas' => $id_kelas
		);
		$this->db->insert('siswa', $data);
		redirect('user_siswa','refresh');
	}
	public function update()
	{
		$id_siswa = $this->uri->segment(3);
		$a['get'] = $this->model_siswa->update($id_siswa)->result();
		$this->load->view('update_siswa', $a);
	}
	public function action_update()
	{
		$id_siswa = $this->input->post('id_siswa');
		$nipd = $this->input->post('nipd');
		$nama_siswa = $this->input->post('nama_siswa');
		$gender = $this->input->post('gender');
		$id_kelas = $this->input->post('id_kelas');
		// $status = $this->input->post('status');

		$data = array(
			'id_siswa' => $id_siswa,
			'nipd' => $nipd,
			'nama_siswa' => $nama_siswa,
			'gender' => $gender,
			'id_kelas' => $id_kelas
		);
		$this->db->where('id_siswa',$id_siswa);
		$this->db->update('siswa',$data);
		redirect('user_siswa','refresh');
	}
	public function hapus_data(){
		$id_siswa = $this->uri->segment(3);
		$this->db->where('id_siswa',$id_siswa);
		$this->db->delete('siswa');
		redirect('user_siswa');
	}
	public function combobox()
	{
		$this->data['kelas'] = $this->model_agama->get();
  		$this->load->view('siswa', $this->data);
	}
}
