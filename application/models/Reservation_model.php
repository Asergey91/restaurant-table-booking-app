<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Reservation_model extends CI_Model {
  public function __construct(){
    parent::__construct();
    $this->load->database();
  }
  public function find($id){
    $query=$this->db->get_where('reservation', ['id' => $id]);
    return $query->result_array();
  }
  public function get_today(){
    $today_start=strtotime(8 . ':00:00');
    $today_end=strtotime('+11 hours', $today_start);
    //$today_start=strtotime(date('Y-m-d'));
    //$today_end=$today_start+(11*60*60);
    $res_query=$this->db->get_where('reservation', [
      'start >='=>$today_start,
      'end <='=>$today_end
    ]);
    $result=[];
    foreach ($res_query->result_array() as $res_row){
      $cus_query=$this->db->get_where('customer', ['id'=>$res_row['customer_id']]);
      $tab_query=$this->db->get_where('physical_table', ['id'=>$res_row['table_id']]);
      array_push($result, [
        'size'=>$res_row['size'],
        'reservation_id'=>$res_row['id'],
        'table_id'=>$res_row['table_id'],
        'customer_id'=>$res_row['customer_id'],
        'start_time'=>date('H:i', $res_row['start']),
        'end_time'=>$res_row['end'],
        'table_name'=>$tab_query->result_array()[0]['name'],
        'customer_fname'=>$cus_query->result_array()[0]['first_name'],
        'customer_lname'=>$cus_query->result_array()[0]['last_name'],
        'customer_phone'=>$cus_query->result_array()[0]['tel'],
        'customer_email'=>$cus_query->result_array()[0]['email']
      ]);
    }
    return $result;
  }
  public function get_all(){
    $res_query=$this->db->get('reservation');
    $result=[];
    foreach ($res_query->result_array() as $res_row){
      $cus_query=$this->db->get_where('customer', ['id'=>$res_row['customer_id']]);
      $tab_query=$this->db->get_where('physical_table', ['id'=>$res_row['table_id']]);
      array_push($result, [
        'reservation_id'=>$res_row['id'],
        'table_id'=>$res_row['table_id'],
        'customer_id'=>$res_row['customer_id'],
        'start_time'=>$res_row['start'],
        'end_time'=>$res_row['end'],
        'table_name'=>$tab_query->result_array()[0]['name'],
        'customer_fname'=>$cus_query->result_array()[0]['first_name'],
        'customer_lname'=>$cus_query->result_array()[0]['last_name'],
        'customer_phone'=>$cus_query->result_array()[0]['tel'],
        'customer_email'=>$cus_query->result_array()[0]['email']
      ]);
    }
    return $result;
  }
  public function create($data){
    $this->db->simple_query('SET FOREIGN_KEY_CHECKS = 0;');
    $cus_query=$this->db->insert('customer', [
      'first_name'=>$data['first_name'],
      'last_name'=>$data['last_name'],
      'email'=>$data['email'],
      'tel'=>$data['tel']
    ]);
    $cus_query=$this->db->get_where('customer', [
      'first_name'=>$data['first_name'],
      'last_name'=>$data['last_name'],
      'email'=>$data['email'],
      'tel'=>$data['tel']
    ]);
    $id=$cus_query->result_array()[0]['id'];
    $res_query=$this->db->insert('reservation', [
      'start'=>$data['start'],
      'end'=>$data['end'],
      'size'=>$data['size'],
      'customer_id'=>$id,
      'table_id'=>$data['table_id']
    ]);
    $this->db->simple_query('SET FOREIGN_KEY_CHECKS = 1;');
    return true;
  }
  
  //utility functions for validations
  //check tables
  public function available_tables($start, $end, $size){
	  $res_query1=$this->db->get_where('reservation', [
	    'start <'=>$start,
	    'start <='=>$end
	  ])->result_array();
	  $res_query2=$this->db->get_where('reservation', [
	    'end >='=>$start,
	    'end >'=>$end
	  ])->result_array();
	  $tab_query=$this->db->get_where('physical_table', [
	    'size >='=>$size
	  ])->result_array();
	  $query=array_merge($res_query1, $res_query2, $tab_query);
	  $available_tables=[];
	  foreach($query as $row){
	    if(isset($row['table_id'])){
	      $available_tables[$row['table_id']]=0;
	    }
	    if(isset($row['name'])){
	      $available_tables[$row['id']]=$row['size'];
	    }
	  }
	  
	  $available_tables = array_filter($available_tables);
	  asort($available_tables);
    if(!empty($available_tables)){
      return [true, $available_tables];
    }
    return [true, $available_tables];
  }
}