<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class laporanfilter extends CI_Controller {

function __construct(){
	parent::__construct();
	$this->load->library('pdf');
}
public function index(){
    $data['content'] = 'resource/filterdatacetak';
    $data['isi'] = $this->db->get('transaksi');
    $this->load->view('dataperbulan');
}
public function getdata(){
        
        $sql ="SELECT t.*, s.nama_siswa FROM transaksi t INNER JOIN siswa s ON t.id_siswa = s.id_siswa";
        return $this->db->query($sql);
    }
	public function cetak()
	{
		$pdf = new FPDF('l','mm','A4');
		$pdf->AddPage();
		$pdf->SetFont('Arial','B',16);
        // mencetak string
        $pdf->Cell(290,7,'SEKOLAH MENENGAH KEJURUAN BINA PUTRA MANDIRI',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(290,7,'DAFTAR SISWA YANG TELAH MEMBAYAR SPP',0,1,'C');

        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(15);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(50,6,'Nama Siswa',1,0);
        $pdf->Cell(35,6,'Bulan',1,0);
        $pdf->Cell(30,6,'Jatuh Tempo',1,0);
        $pdf->Cell(30,6,'No Bayar',1,0);
        $pdf->Cell(29,6,'Tangal Bayar',1,0);
        $pdf->Cell(29,6,'Total Bayar',1,0);
        $pdf->Cell(29,6,'keterangan',1,1);

        $id_siswa = $this->uri->segment(3);

        $pdf->Cell(15);
        $pdf->SetFont('Arial','',10);
        $sql ="SELECT t.*, s.nama_siswa FROM transaksi t INNER JOIN siswa s ON t.id_siswa = s.id_siswa WHERE t.idspp='$id_siswa'";
        $transaksi = $this->db->query($sql)->result(); 
        foreach ($transaksi as $row){
            $pdf->Cell(50,6,$row->nama_siswa,1,0);
            $pdf->Cell(35,6,$row->bulan,1,0);
            $pdf->Cell(30,6,$row->jatuh_tempo,1,0);
            $pdf->Cell(30,6,$row->no_bayar,1,0);
            $pdf->Cell(29,6,$row->tgl_bayar,1,0);
            $pdf->Cell(29,6,$row->total_bayar,1,0);
            $pdf->Cell(29,6,$row->keterangan,1,1);
	}
	 $pdf->Output();
	}
    public function cetak1()
    {
        $pdf = new FPDF('l','mm','A4');
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',16);
        // mencetak string
        $pdf->Cell(290,7,'SEKOLAH MENENGAH KEJURUAN BINA PUTRA MANDIRI',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(290,7,'DAFTAR SISWA YANG TELAH MEMBAYAR SPP',0,1,'C');

        // Memberikan space kebawah agar tidak terlalu rapat
      
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(50,6,'Nama Siswa',1,0);
        $pdf->Cell(35,6,'Bulan',1,0);
        $pdf->Cell(30,6,'Jatuh Tempo',1,0);
        $pdf->Cell(30,6,'No Bayar',1,0);
        $pdf->Cell(29,6,'Tangal Bayar',1,0);
        $pdf->Cell(29,6,'Total Bayar',1,0);
        $pdf->Cell(29,6,'keterangan',1,1);

        $pdf->SetFont('Arial','',10);
        $sql ="SELECT t.*, s.nama_siswa FROM transaksi t INNER JOIN siswa s ON t.id_siswa = s.id_siswa";
        $transaksi = $this->db->query($sql)->result(); 
        foreach ($transaksi as $row){

            $pdf->Cell(50,6,$row->nama_siswa,1,0);
            $pdf->Cell(35,6,$row->bulan,1,0);
            $pdf->Cell(30,6,$row->jatuh_tempo,1,0);
            $pdf->Cell(30,6,$row->no_bayar,1,0);
            $pdf->Cell(29,6,$row->tgl_bayar,1,0);
            $pdf->Cell(29,6,$row->total_bayar,1,0);
            $pdf->Cell(29,6,$row->keterangan,1,1);
    }
     $pdf->Output();
    }
    
}
