<?php

require_once "MonitoringDataManagementInterface.php";

class MonitoringData implements MonitoringDataManagementInterface{
  // Properties
  public $id;
  public $userid;
  public $dateRecorded;
  public $timeRecorded;
  public $value;
  public $activity;
  //constructor
  function __construct($id, $userid, $dateRecorded, $timeRecorded, $value, $activity){
    $this->id = $id;
    $this->userid = $userid;
    $this->dateRecorded = $dateRecorded;
	$this->timeRecorded = $timeRecorded;
	$this->value = $value;
	$this->activity = $activity;
  }
  
  // Methods to create the object
  function set_id($id) {
    $this->id = $id;
  }
  function get_id() {
    return $this->id;
  } 
  function set_userid($userid) {
    $this->userid = $userid;
  }
  function get_userid() {
    return $this->userid;
  }   
  function set_dateRecorded($dateRecorded) {
    $this->dateRecorded = $dateRecorded;
  }
  function get_dateRecorded() {
    return $this->dateRecorded;
  }
  function set_timeRecorded($timeRecorded) {
    $this->timeRecorded = $timeRecorded;
  }
  function get_timeRecorded() {
    return $this->timeRecorded;
  } 
  
  function set_value($value) {
    $this->value = $value;
  }
  function get_value() {
    return $this->value;
  }  
  function set_activity($activity) {
    $this->activity = $activity;
  }
  function get_activity() {
    return $this->activity;
  }   
	// Interface Functions
	public function SetMonitoringData(){
		
	}

}

?>