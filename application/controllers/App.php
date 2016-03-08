<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class App extends CI_Controller {
	public function __construct(){
	  parent::__construct();
	}
	public function get_server_time(){
	  echo json_encode(now());
	}
}