<?php

class Prescription{
  // Properties
  public $id;
  public $medicationId;
  public $StartDate;
  public $endDate;
  public $staffId;
  
  //constructor
  function __construct($id, $medicationId, $StartDate, $endDate, $staffId){
    $this->id = $id;
    $this->medicationId = $medicationId;
	$this->StartDate = $StartDate;
	$this->endDate = $endDate;
	$this->staffId = $staffId;;
  }
  
  // Methods to create the object
  function set_id($id) {
    $this->id = $id;
  }
  function get_id() {
    return $this->id;
  } 
  
  function set_medicationId($medicationId) {
    $this->medicationId = $medicationId;
  }
  function get_medicationId() {
    return $this->medicationId;
  }
  function set_time($time) {
    $this->StartDate = $time;
  }
  function get_time() {
    return $this->StartDate;
  } 
  
  function set_endDate($endDate) {
    $this->endDate = $endDate;
  }
  function get_endDate() {
    return $this->endDate;
  } 
  
  function set_staffId($staffId) {
    $this->staffId = $staffId;
  }
  function get_staffId() {
    return $this->staffId;
  }    
  

}

?>