<?php
/*
THIS CLASS IS FOR BASIC APP SETUP
IT HAS MIGRATIONS AND SEEDING DATA
*/
defined('BASEPATH') OR exit('No direct script access allowed');
class Setup_model extends CI_Model {
  public function __construct(){
    parent::__construct();
    $this->load->database();
    $this->faker=Faker\Factory::create();
  }
  //TABLE NAMES
  public $tables=['owner', 'restaurant', 'physical_table', 'customer', 'reservation'];
  //CREATES TABLES
  public function create_tables(){
    $this->db->simple_query('SET FOREIGN_KEY_CHECKS = 0;');
    //owners
    $sql=['CREATE TABLE '.$this->tables[0].' (
      id int(11) NOT NULL AUTO_INCREMENT,
      name VARCHAR(25) NOT NULL,
      password VARCHAR(25) NOT NULL,
      PRIMARY KEY (id)
    );',
    //restaurants
    'CREATE TABLE '.$this->tables[1].' (
      id int(11) NOT NULL AUTO_INCREMENT,
      name varchar(25) NOT NULL,
      owner_id int(11) NOT NULL,
      FOREIGN KEY (owner_id) REFERENCES owner(id),
      PRIMARY KEY (id)
    );',
    //physical_tables
    'CREATE TABLE '.$this->tables[2].' (
      id int(11) NOT NULL AUTO_INCREMENT,
      name varchar(25) NOT NULL,
      size tinyint(2),
      PRIMARY KEY (id)
    );',
    //customers
    'CREATE TABLE '.$this->tables[3].' (
      id int(11) NOT NULL AUTO_INCREMENT,
      first_name VARCHAR(25) NOT NULL,
      last_name VARCHAR(25) NOT NULL,
      email VARCHAR(80) NOT NULL,
      tel int(11) NOT NULL,
      PRIMARY KEY (id)
    );',
    //reservations
    'CREATE TABLE '.$this->tables[4].' (
      id int(11) NOT NULL AUTO_INCREMENT,
      start varchar(25) NOT NULL,
      end varchar(25) NOT NULL,
      size int(11) NOT NULL,
      customer_id int(11) NOT NULL,
      table_id int(11) NOT NULL,
      FOREIGN KEY (customer_id) REFERENCES customer(id),
      FOREIGN KEY (table_id) REFERENCES physical_table(id),
      PRIMARY KEY (id)
    );'];
    for ($i=0; $i<count($sql); $i++){
      if($this->db->simple_query($sql[$i])){
        echo 'table '.$this->tables[$i].' successfully created'.PHP_EOL;
      }
      else {
        echo 'failed to create table '.$this->tables[$i].PHP_EOL;
      }
    }
    //
    $this->db->simple_query('SET FOREIGN_KEY_CHECKS = 1;');
  }
  //DROPS APP TABLES
  public function drop_app_tables(){
    $this->db->simple_query('SET FOREIGN_KEY_CHECKS = 0;');
    for ($i=0; $i<count($this->tables); $i++){
      if($this->db->simple_query('DROP TABLE '.$this->tables[$i].';')){
        echo 'table '.$this->tables[$i].' successfully dropped'.PHP_EOL;
      }
      else {
        echo 'failed to drop table '.$this->tables[$i].PHP_EOL;
      }
    }
    //
    $this->db->simple_query('SET FOREIGN_KEY_CHECKS = 1;');
  }
  //SEED TABLES
	public function seed(){
	  $this->db->simple_query('SET FOREIGN_KEY_CHECKS = 0;');
	  //SEEDING RESTAURANTS
	  echo 'Seeding...'.PHP_EOL;
	  $data=[
      'name'=>$this->faker->company,
      'owner_id'=>1
    ];
    $this->db->insert($this->tables[1], $data);
    
    //SEEDING PHYSICAL_TABLES
    for($i=0; $i<20; $i++){
      $tn=$this->faker->randomElement($array = [2, 4, 6, 8, 2, 4, 6, 2, 4, 2]);
      $data = [
        'name'=>'table for '.$tn,
        'size'=>$tn
      ];
      $this->db->insert($this->tables[2], $data);
    }
    //SEEDING RESERVATIONS
    $time=mktime(8, 0, 0, 3, 6, 2016);
    //from sunday-thursday
    for($b=0; $b<7; $b++){
      //from 8am-5pm
      for($a=0; $a<18; $a++){
        //rand 2 reserv every 30mins
        for($i=0; $i<rand(0,2); $i++){
          $length=60*60;
          $data = [
            'start'=>$time,
            'end'=>$time+$length,
            'size'=>rand(1, 8),
            'customer_id'=>$this->faker->numberBetween($min = 1, $max = 200)
          ];
          $temp=$this->available_tables($data['start'], $data['end'], $data['size']);
          if(!empty($temp)){
            $data['table_id']=array_keys($temp)[0];
            $this->db->insert($this->tables[4], $data);
            var_dump($temp);
            echo 'FUCK YOU PHP'.PHP_EOL.'________________________________________'.PHP_EOL;
          }
          //var_dump($temp);
          //echo PHP_EOL.'________________________________________'.PHP_EOL;
          $this->db->insert($this->tables[4], $data);
          
        }
        $time=$time+(30*60);
  	  }
  	  $time=$time+(15*60*60);
    }
    //SEEDING CUSTOMERS
    for($i=0; $i<200; $i++){
      $data = [
        'first_name'=>$this->faker->unique()->firstName($gender = 'male'|'female'),
        'last_name'=>$this->faker->unique()->lastName($gender = 'male'|'female'),
        'email'=>$this->faker->unique()->email,
        'tel'=>$this->faker->unique()->numberBetween($min = 1000000000, $max = 9999999999)
      ];
      $this->db->insert($this->tables[3], $data);
    }
    
    //SEEDING OWNER
    $data=[
      'name'=>'user123',
      'password'=>'password123'
    ];
    $this->db->insert($this->tables[0], $data);
    //
    $this->db->simple_query('SET FOREIGN_KEY_CHECKS = 1;');
	}
	
	
	
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
    return $available_tables;
  }
}
