<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Setup_model extends CI_Model {
  public function __construct(){
    parent::__construct();
    $this->load->database();
    $this->faker=Faker\Factory::create();
  }
  //TABLE NAMES
  public $tables=['owner', 'restaurant', 'physical_table', 'customer', 'reservation', 'table_reservation'];
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
      FOREIGN KEY (customer_id) REFERENCES customer(id),
      PRIMARY KEY (id)
    );',
    //table_reservations(for many to many associations between tables and reservations)
    'CREATE TABLE '.$this->tables[5].' (
      id int(11) NOT NULL AUTO_INCREMENT,
      reservation_id int(11) NOT NULL,
      table_id int(11) NOT NULL,
      FOREIGN KEY (reservation_id) REFERENCES reservation(id),
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
      for($a=0; $a<19; $a++){
        //every 30mins
        for($i=0; $i<rand(0,2); $i++){
          $length=($this->faker->randomElement($array = [30, 60, 90, 120, 150, 180]))*60;
          $data = [
            'start'=>$time,
            'end'=>$time+$length,
            'size'=>rand(1, 6),
            'customer_id'=>$this->faker->numberBetween($min = 1, $max = 200)
          ];
          echo(gmdate("m-d\TH:i", $data['start']).' TO '.gmdate("m-d\TH:i", $data['end']).PHP_EOL);
        }
        $time=$time+(30*60);
  	  }
  	  $time=$time+(15*60*60);
    }
    $this->db->insert($this->tables[4], $data);
    //SEEDING CUSTOMERS
    for($i=0; $i<200; $i++){
      $data = [
        'first_name'=>$this->faker->unique()->firstName($gender = 'male'|'female'),
        'last_name'=>$this->faker->unique()->lastName($gender = 'male'|'female'),
        'email'=>$this->faker->unique()->email,
        'tel'=>$this->faker->unique()->numberBetween($min = 100000000, $max = 999999999)
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
}
