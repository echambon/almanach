<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require(APPPATH.'/libraries/REST_Controller.php');
class Harbour extends REST_Controller
{
  public function __construct() {
               parent::__construct();
               $this->load->model('harbour_model');
  }

  public function test_get(){
     $r = $this->harbour_model->read();
     $this->response($r);
  }
}
