<?php
use Respect\Validation\Validator as v;
defined('BASEPATH') OR exit('No direct script access allowed');

class Table extends CI_Controller {
  
	public function __construct(){
	  parent::__construct();
	  $this->load->model('table_model');
	  $this->load->helper('url');
	}

  public function table_view(){
	  $data['tables']=$this->table_model->get_all();
	  
	  function sort_time($a, $b) {
      return $a['tab_num'] - $b['tab_num'];
    }
    usort($data['tables'], 'sort_time');
    
	  $data['base_url']=base_url();
	  $this->load->view('templates/header', $data);
	  $this->load->view('physical_table/table_view', $data);
	  $this->load->view('templates/footer');
	}
	
	public function create(){
	  $input=$this->input->get();
	  $this->table_model->create($input);
	  redirect('/table/table_view');
	}
	
	public function delete(){
	  $input=$this->input->get();
	  $this->table_model->delete($input['id']);
	  redirect('/table/table_view');
	}
  
}