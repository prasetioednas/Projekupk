<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utilitas extends CI_Controller {

	public function index()
	{
		// $data[''] = $this->db->get('transaksi');
		$data['content'] ='resource/backup';
		$this->load->view('dashboard',$data);
	}

  function rest()
  {
   $data['content'] ='resource/restore';
   $this->load->view('restore',$data);
 }

 public function backupdb()
 {
  $this->load->dbutil();
  $aturan = array( 
    'format'      => 'zip',             
    'filename'    => 'my_db_backup.sql'
  );

  $backup =& $this->dbutil->backup($aturan); 
      $db_name = 'backup-on-'. date("Y-m-d-H-i-s") .'.zip'; //NAMAFILENYA
      $save = '/backup'.$db_name;
      $this->load->helper('download');
      force_download($db_name, $backup);
    }

    public function restorein()   
    {
      $this->load->library('upload');
      $config['upload_path']="./database";
      $config['allowed_types']="jpg|png|gif|jpeg|bmp|sql|x-sql";
      $this->load->library('upload',$config);
      $this->upload->initialize($config);

      if(!$this->upload->do_upload("restore")){
       $error = array('error' => $this->upload->display_errors());
       echo "GAGAL UPLOAD";
       var_dump($error);
       exit();
     }

        $file = $this->upload->data();  //DIUPLOAD DULU KE DIREKTORI assets/database/
        $fotoupload=$file['file_name'];

        $isi_file = file_get_contents('./database/' . $fotoupload); //PANGGIL FILE YANG TERUPLOAD
        $string_query = rtrim( $isi_file, "\n;" );
        $array_query = explode(";", $string_query);   //JALANKAN QUERY MERESTORE KEDATABASE
        foreach($array_query as $query)
        {
          $this->db->query($query);
        }

        $path_to_file = './database/' . $fotoupload;
        if(unlink($path_to_file)) {   // HAPUS FILE YANG TERUPLOAD
          echo "<script> alert('Sukses'); </script>";
          redirect('admin/backup','refresh');
        }
        else {
          echo 'errors occured';
        }
      }

      public function restoredb1()   
      {

       $isi_file = file_get_contents('my_db_backup.sql');
       $string_query = rtrim( $isi_file, '\n;' );
       $array_query = explode(';', $query);
       foreach($array_query as $query)
       {
        $this->db->query($query);
      }
    }
  }
