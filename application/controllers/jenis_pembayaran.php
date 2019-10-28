<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class jenis_pembayaran extends CI_Controller {
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
		$data['content'] ='data_pembayaran/tampilan';
		$data['isi'] =$this->db->get('jenis_pembayaran');
		$this->load->view('jenis_pembayaran',$data);
	}
	public function simpan_data()
	{
		$id_pembayaran =$this->input->post('id_pembayaran');
		$nama_pembayaran =$this->input->post('nama_pembayaran');
		$harga =$this->input->post('harga');

		$data = array(
			'id_pembayaran' => $id_pembayaran,
			'nama_pembayaran' => $nama_pembayaran,
			'harga' => $harga
		);
		$this->db->insert('jenis_pembayaran', $data);
		redirect('jenis_pembayaran','refresh');
	}
	public function hapus_data()
	{
		$id_pembayaran = $this->uri->segment(3);
		$this->db->where('id_pembayaran',$id_pembayaran);
		$this->db->delete('jenis_pembayaran');
		redirect('jenis_pembayaran');
	}
	public function update()
	{
		$id_pembayaran = $this->uri->segment(3);
		$a['get'] = $this->model_pembayaran->update($id_pembayaran)->result();
		$this->load->view('update_pembayaran',$a);
	}
	public function action_update()
	{
		$id_pembayaran =$this->input->post('id_pembayaran');
		$nama_pembayaran =$this->input->post('nama_pembayaran');
		$harga =$this->input->post('harga');

		$data = array(
			'id_pembayaran' => $id_pembayaran,
			'nama_pembayaran' => $nama_pembayaran,
			'harga' => $harga
		);
		$this->db->where('id_pembayaran',$id_pembayaran);
		$this->db->update('jenis_pembayaran',$data);
		redirect('jenis_pembayaran','refresh');
	}
}
