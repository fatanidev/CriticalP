<?php
require_once "Profile.php";
require_once "PatientManagementInterface.php";

class MonitoringData implements PatientManagementInterface{
  // Properties
  public $id;
  public $dateRecorded;
  public $timeRecorded;
  public $value;
  //constructor
  function __construct($id, $dateRecorded, $timeRecorded, $value){
    $this->id = $id;
    $this->dateRecorded = $dateRecorded;
	$this->timeRecorded = $timeRecorded;
	$this->value = $value;
  }
  
  // Methods to create the object
  function set_id($id) {
    $this->id = $id;
  }
  function get_id() {
    return $this->id;
  } 
  
  function set_dateRecorded($dateRecorded) {
    $this->dateRecorded = $dateRecorded;
  }
  function get_dateRecorded() {
    return $this->dateRecorded;
  }
  function set_time($time) {
    $this->timeRecorded = $time;
  }
  function get_time() {
    return $this->timeRecorded;
  } 
  
  function set_value($value) {
    $this->value = $value;
  }
  function get_value() {
    return $this->value;
  }  
  
	// Interface Functions
	public function SetMonitoringData(){
		
	}

}

?>