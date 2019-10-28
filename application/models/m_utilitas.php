<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_utilitas extends CI_Model {
public function tampiltabel()
    {
       return $this->db->query("show tables")->result();
    }
}
