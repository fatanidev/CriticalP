<?php
require_once "TreatmentManagementInterface.php";

class Treatment implements TreatmentManagementInterface{
  // Properties
  public $id;
  public $name;
  public $staffId;
  public $description;
  //constructor
  function __construct($id, $name, $staffId, $description, $startDate, $endDate){
    $this->id = $id;
    $this->name = $name;
	$this->staffId = $staffId;
	$this->description = $description;
	$this->startDate = $startDate;
	$this->endDate = $endDate;
  }
  
  // Methods to create the object
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
  function set_time($time) {
    $this->staffId = $time;
  }
  function get_time() {
    return $this->staffId;
  } 
  
  function set_description($description) {
    $this->description = $description;
  }
  function get_description() {
    return $this->description;
  }  
  function set_startDate($startDate) {
    $this->startDate = $startDate;
  }
  function get_startDate() {
    return $this->startDate;
  }  
  function set_endDate($endDate) {
    $this->endDate = $endDate;
  }
  function get_endDate() {
    return $this->endDate;
  }    
  
	// Interface Functions
	public function notifyUserTreatmentDetails(){
	}

}

?>