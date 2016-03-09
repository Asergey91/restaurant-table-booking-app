<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Table_model extends CI_Model {
  public function __construct(){
    parent::__construct();
    $this->load->database();
  }
  public function get_all(){
    $tab_query=$this->db->get('physical_table');
    $result=[];
    foreach ($tab_query->result_array() as $tab_row){
      array_push($result, [
        'tab_id'=>$tab_row['id'],
        'tab_num'=>$tab_row['number'],
        'tab_size'=>$tab_row['size']
      ]);
    }
    return $result;
  }
  public function create($input){
    $this->db->insert('physical_table', $input);
  }
  public function delete($id){
    $this->db->simple_query('SET FOREIGN_KEY_CHECKS = 0;');
    $this->db->delete('physical_table', ['id'=>$id]);
    $this->db->delete('reservation', ['table_id'=>$id]);
    $this->db->simple_query('SET FOREIGN_KEY_CHECKS = 1;');
  }
}