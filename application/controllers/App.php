<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class App extends CI_Controller {
	public function __construct(){
	  parent::__construct();
	  $this->load->helper('date');
	  date_default_timezone_set('CET');
	  $this->load->helper('url');
	}
	public function get_server_time(){
	  echo json_encode(now());
	}
	public function main_view(){
	  $data['base_url']=base_url();
	  $this->load->view('templates/header', $data);
	  $this->load->view('app/main_view', $data);
	  $this->load->view('templates/footer');
	}
}