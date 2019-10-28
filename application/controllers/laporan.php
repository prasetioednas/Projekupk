<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class laporan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_pembayaran');
		if($this->session->userdata('username') == null){
			
			echo '<script>
			alert("Silahkan Login Terlebih Dahulu!");
			window.location.href ="'.base_url('index.php/admin').'";
			</script>';
		}
	}

	public function index(){
		$data['content'] = 'content';
		$data['menu'] = 'Laporan Pembayaran';
		$data['isi'] = $this->getdata();
		$data['siswa'] = $this->db->get('siswa');
		$data['hasil'] = $this->laporan_pembayaran->hasil()->num_rows();
		$data['pembayaran'] =  $this->db->get('jenis_pembayaran');
		// $data['nipd'] = $this->laporan_pembayaran->get_all();
		$this->load->view('laporan_pembayaran',$data);	
	}
	function simpan_data()
	{
		$nama_siswa = $this->input->post('nama_siswa');
		$bulan = $this->input->post('bulan');
		$id_pembayaran = $this->input->post('pembayaran');
		$jatuh_tempo = $this->input->post('jatuh_tempo');
		$no_bayar = $this->input->post('no_bayar');
		$tgl_bayar= $this->input->post('tgl_bayar');
		$total_bayar= $this->input->post('total_bayar');
		$keterangan = $this->input->post('keterangan');
		// $bulan = $this->input->post('bulan');
		 $tgl =  date("Y-m-d", strtotime($tgl_bayar));

		$data = array(
			'id_siswa' => $nama_siswa,
			'id_pembayaran' => $id_pembayaran,
			'bulan' => $bulan,
			'jatuh_tempo' => $jatuh_tempo,
			'no_bayar' => $no_bayar,
			'tgl_bayar' => $tgl,
			'total_bayar' => $total_bayar,
			'keterangan' => $keterangan
			);
			$this->db->insert('transaksi',$data);
			redirect('laporan','refresh');
	}

	public function date()
	{
		$originalDate = $row->start_date;
		$newDate = date("d-m-Y", strtotime($originalDate));
	}

	public function getHarga(){
		$kode = $this->input->post('kode');
		
		$sql ="SELECT * FROM jenis_pembayaran WHERE id_pembayaran='$kode'";
		$result = $this->db->query($sql)->row();

		echo $result->harga;
	}
	public function getdata(){
		
		$sql ="SELECT t.*, s.nama_siswa FROM transaksi t INNER JOIN siswa s ON t.id_siswa = s.id_siswa";
		return $this->db->query($sql);

	}
	public function backup()
    {
      $this->load->dbutil();
      $prefs = array(     
              'tables'      => array($tabel),
                    'format'      => 'zip',             
                    'filename'    => 'my_db_backup.sql'
                  );
      $backup =& $this->dbutil->backup($prefs); 
      $db_name = 'backup-on-'. $tabel . '-' . date("d-m-Y") .'.zip'; //NAMAFILENYA
      $save = '/backup'.$db_name;
      $this->load->helper('download');
      force_download($db_name, $backup);
    }

    public function cetak()
    {
    	$data['laporan'] =$this->db->get('transaksi');
    	$this->load->view('laporan_pdf/pembayaran',$data);
    }
    public function hapus_data(){
        $idspp = $this->uri->segment(3);
        $this->db->where('idspp',$idspp);
        $this->db->delete('transaksi');
        redirect('laporan');
    }
}