<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Setup extends CI_Controller {
	public function __construct(){
	  parent::__construct();
	  if (!$this->input->is_cli_request()){
      exit('Only via CLI');
    }
	  $this->load->model('setup_model');
	}
	public function install(){
	  $this->setup_model->drop_app_tables();
	  $this->setup_model->create_tables();
	}
	public function seed(){
	  $this->setup_model->seed();
	}
	public function test(){
	  
	}
}
