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
    $id=$cus_query->result_array()[0]['id'];
    $res_query=$this->db->insert('reservation', [
      'start'=>$data['start'],
      'end'=>$data['end'],
      'size'=>$data['size'],
      'customer_id'=>$id,
      'table_id'=>$data['table_id']
    ]);
    return true;
    $this->db->simple_query('SET FOREIGN_KEY_CHECKS = 1;');
  }
  
  //utility functions for validations
  //check tables
  public function taken_tables($start, $end, $size){
    $taken_tables=[];
    $query=$this->db->get('reservation');
    $i=0;
    foreach ($query->result() as $row){
      //CHECK THE TABLES ALREADY TAKEN DURING THE DURATION OF THE RESERVATION
      if (($row->start<=$start && $row->end>$start)||($row->start<$end && $row->end>=$end)){
        if($row->table_id){
          $taken_tables[$i]=$row->table_id;
          $i++;
        }
      }
    }
    return $taken_tables;
  }
  public function available_tables($start, $end, $size){
    $tt=$this->taken_tables($start, $end, $size);
    $query=$this->db->get('physical_table');
    $available_tables=[];
    foreach ($query->result() as $row){
      if(!empty($tt)){
        foreach ($tt as $ttrow) {
          if(($ttrow==$row->id)||($row->size<$size)){
            
          }
          else{
            $available_tables[$row->id]=$row->size;
          }
        }
      }
      else{
        if($row->size<$size){
            
        }
        else{
          $available_tables[$row->id]=$row->size;
        }
      }
    }
    asort($available_tables);
    if(!empty($available_tables)){
      return [true, $available_tables];
    }
    return [false, $available_tables];
  }
}