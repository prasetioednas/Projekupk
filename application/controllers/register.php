<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';
use Restserver\libraries\REST_Controller;

class register extends REST_Controller {


	public function index_get()
	{
		$get = $this->db->get('siswa')->result();
		$this->response($get, 200);
	}
}