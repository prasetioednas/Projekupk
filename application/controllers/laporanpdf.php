<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class laporanpdf extends CI_Controller {

function __construct(){
	parent::__construct();
	$this->load->library('pdf');
}
	public function cetak()
	{
		$pdf = new FPDF('l','mm','A4');
		$pdf->AddPage();
		$pdf->SetFont('Arial','B',16);
        // mencetak string
        $pdf->Image('assets/img/bpm.jpg',20,3,30);
        $pdf->Cell(290,7,'SEKOLAH MENENGAH KEJURUAN BINA PUTRA MANDIRI',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(290,7,'PARUNG PANJANG',0,1,'C');
        $pdf->Cell(290,7,'Jl. Bina Putra Mandiri No 1 Parung panjang, Bogor, Jawa Barat 16360',0,1,'C');
        $pdf->Ln(5);
        $pdf->Line(11,35,290,35);
        $pdf->Ln(5);
        $pdf->Cell(290,7,'TANDA BUKTI SISWA YANG TELAH MEMBAYAR SPP',0,1,'C');

        $pdf->Ln();
        $pdf->Ln();
        $pdf->Cell(45,6,'Nama Siswa',0,0,'L');
        $pdf->Cell(5,7,':',0,'L');
         $id_siswa = $this->uri->segment(3);

        $sql ="SELECT t.*, s.nama_siswa FROM transaksi t INNER JOIN siswa s ON t.id_siswa = s.id_siswa WHERE t.idspp='$id_siswa'";
        $transaksi = $this->db->query($sql)->result(); 
        foreach ($transaksi as $row){
            $pdf->Cell(50,6,$row->nama_siswa,0,0);
    }
        $pdf->Ln();
        $pdf->Cell(45,6,'Tanggal Bayar',0,0,'L');
        $pdf->Cell(5,7,':',0,'L');
         $id_siswa = $this->uri->segment(3);

        $sql ="SELECT t.*, s.nama_siswa FROM transaksi t INNER JOIN siswa s ON t.id_siswa = s.id_siswa WHERE t.idspp='$id_siswa'";
        $transaksi = $this->db->query($sql)->result(); 
        foreach ($transaksi as $row){
            $pdf->Cell(50,6,$row->tgl_bayar,0,0);
    }

        $pdf->Ln();
        $pdf->Cell(45,6,'Total Bayar',0,0,'L');
        $pdf->Cell(5,7,':',0,'L');
         $id_siswa = $this->uri->segment(3);

        $sql ="SELECT t.*, s.nama_siswa FROM transaksi t INNER JOIN siswa s ON t.id_siswa = s.id_siswa WHERE t.idspp='$id_siswa'";
        $transaksi = $this->db->query($sql)->result(); 
        foreach ($transaksi as $row){
            $pdf->Cell(50,6,$row->total_bayar,0,0);
    }

        $pdf->Ln();
        $pdf->Cell(45,6,'Keterangan',0,0,'L');
        $pdf->Cell(5,7,':',0,'L');
       
         $id_siswa = $this->uri->segment(3);

        $sql ="SELECT t.*, s.nama_siswa FROM transaksi t INNER JOIN siswa s ON t.id_siswa = s.id_siswa WHERE t.idspp='$id_siswa'";
        $transaksi = $this->db->query($sql)->result(); 
        foreach ($transaksi as $row){
            $pdf->Cell(50,6,$row->keterangan,0,0);
    }

         $pdf->Ln();
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->ln(12);
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
        $pdf->Image('assets/img/bpm.jpg',20,3,30);
        $pdf->Cell(290,7,'SEKOLAH MENENGAH KEJURUAN BINA PUTRA MANDIRI',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(290,7,'PARUNG PANJANG',0,1,'C');
        $pdf->Cell(290,7,'Jl. Bina Putra Mandiri No 1 Parung panjang, Bogor',0,1,'C');
        $pdf->Ln(5);
        $pdf->Line(10,35,290,35);
        $pdf->Ln(5);
        $pdf->Cell(290,7,'TANDA BUKTI SISWA YANG TELAH MEMBAYAR SPP',0,1,'C');
        $pdf->Ln();

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
    public function hapus_data(){
        $idspp = $this->uri->segment(3);
        $this->db->where('idspp',$idspp);
        $this->db->delete('transaksi');
        redirect('laporanfilter');
    }
}
