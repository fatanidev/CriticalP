<?php
class Profile{
  // Properties
  public $id;
  public $name;
  public $address;
  public $phoneNumber;  
  // constructor
  function __construct($id, $name, $address, $phoneNumber){
    $this->id = $id;
    $this->name = $name;	
    $this->address = $address;	
	$this->phoneNumber = $phoneNumber;
  }
  // Methods
  function set_id($id) {
    $this->id = $id;
  }
  function get_id() {
    return $this->id;
  } 
  
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }

  function set_address($address) {
    $this->address = $address;
  }
  function get_address() {
    return $this->address;
  }   
  
  function set_phoneNumber($phoneNumber) {
    $this->phoneNumber = $phoneNumber;
  }
  function get_phoneNumber() {
    return $this->phoneNumber;
  }    
}


?>