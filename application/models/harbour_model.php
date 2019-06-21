<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Harbour_model extends CI_Model
{
  public function read(){
         $query = $this->db->query("SELECT * FROM harbours WHERE principal=1"); // test
         return $query->result_array();
  }
}
