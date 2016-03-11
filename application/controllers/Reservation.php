<?php
use Respect\Validation\Validator as v;
defined('BASEPATH') OR exit('No direct script access allowed');

class Reservation extends CI_Controller {
  
	public function __construct(){
	  parent::__construct();
	  $this->load->model('reservation_model');
	  $this->load->helper('date');
	  date_default_timezone_set('CET');
	  $this->load->helper('url');
	}
	
	public function owner_view(){
	  $data['reservations']=$this->reservation_model->get_today();
	  
	  function sort_time($a, $b) {
      return $a['start_time'] - $b['start_time'];
    }
    usort($data['reservations'], 'sort_time');
    
	  $data['base_url']=base_url();
	  $this->load->view('templates/header', $data);
	  $this->load->view('reservation/owner_view', $data);
	  $this->load->view('templates/footer');
	}
	
	public function customer_view(){
	  $data['base_url']=base_url();
	  $this->load->view('templates/header', $data);
	  $this->load->view('reservation/customer_view');
	  $this->load->view('templates/footer');
	}
	public function delete(){
	  $input=$this->input->get();
	  $this->reservation_model->delete($input['id']);
	  redirect('/reservation/owner_view');
	}
	
	public function make_reservation(){
	  $input=$this->input->post();
	  
	  /** 
	   * this return an array with the status, error message, and if validation is 
	   * successfull an array of variables to create a reservation 
	   */
	  $result=$this->validate_reservation($input);
	  
	  $data=[
	    'status'=>$result[0],
	    'error'=>$result[1]
	  ];
	  echo json_encode($data);
	  if(isset($result[2])){
	    if($this->reservation_model->create($result[2])){
	    }
	  }
	}
	
	// NOTE: Very long function, should be subdivided into smaller functions for
	// easier maintenance
	public function validate_reservation($input){
	  $result=['fail', 'There was an error!'];
	  
	  foreach($input as $value){
	    if (empty($value)){
	      $result[1]='Whoops, one or more fields hasn\'t been filled in';
	      return $result;
	    }
	  }
    
    if (! v::email()->validate($input['email'])){
      $result[1]='Whoops, please enter a valid email';
	    return $result;
    }
    
    if (! v::stringType()->length(2, 20)->validate($input['first_name'])){
      $result[1]='Whoops, please enter a valid first name';
	    return $result;
    }
    
    if (! v::stringType()->length(2, 20)->validate($input['last_name'])){
      $result[1]='Whoops, please enter a valid last name';
	    return $result;
    }
    
    if (! v::phone()->validate($input['tel'])){
      $result[1]='Whoops, please enter a valid phone number';
	    return $result;
    }
    
    if (! v::intVal()->between(1, 8)->validate($input['size'])){
      $result[1]='Whoops, party size must be between 1 and 8';
	    return $result;
    }
    
    if (! v::date()->validate($input['start'])){
      $result[1]='Whoops, please enter a valid date';
	    return $result;
    }
    
    /**
     * Converting time to unix (since vlidation library has problems with format
     * when comparing).
     * Checking that the submited time is in the future, last element in the array 
     * is the submitted time.
     * $time array: 0=now, 1=distant year 2100, 2=submitted time, 3=end of reservation 
     */
    // NOTE: I think this whole section should be moved to its own function
    $time=[
      strtotime("now"), 
      4102448461,
      strtotime($input['start']), 
      strtotime($input['start'])+(60*60)
    ];
    
    $day=date('l', $time[2]);
    $hour=intval(date('H', $time[2]));
    
    if (! v::intVal()->between($time[0], $time[1])->validate($time[2])){
      $result[1]='Whoops, please enter a time+date that hasn\'t already passed';
	    return $result;
    }
    
    //checking if the submited time is on mon-sat 8am-7pm
    if ($day=='Sunday' OR ($hour > 19 OR $hour <= 8)){
      $result[1]='Whoops, reservations can only be made on mon-sat from 8:00 AM to 7:00 PM';
	    return $result;
    }
    
    //checking if there are available tables and looking for new ones
    //very expensive query
    $tables=$this->reservation_model->available_tables($time[2], $time[3], $input['size']);
    
    if (! $tables){
      $result[1]='Whoops, we\'re at full capacity at that time, sorry';
	    return $result;
    }
    
    // NOTE: Upto here KK
    
    $fordb=[
      'size'=>$input['size'],
      'table_id'=>array_keys($tables[1])[0],
      'start'=>$time[2],
      'end'=>$time[3],
      'first_name'=>$input['first_name'],
      'last_name'=>$input['last_name'],
      'tel'=>$input['tel'],
      'email'=>$input['email']
    ];
    
    $result=['success', 'No errors here!', $fordb];
	  return $result;
	}
	
	public function debug(){
	  
	}
}