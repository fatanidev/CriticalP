<?php
require_once "Profile.php";
require_once "PatientManagementInterface.php";

class Patient extends Profile implements PatientManagementInterface{
  // Properties
  public $joinedDate;
  public $previousHospital;
  function __construct($id, $name, $address, $phoneNumber,$joinedDate, $previousHospital){
	parent::__construct($id, $name, $address, $phoneNumber);
    $this->joinedDate = $joinedDate;
    $this->previousHospital = $previousHospital;	
  }
  
  // Methods to create the object
  function set_joinedDate($joinedDate) {
    $this->joinedDate = $joinedDate;
  }
  function get_joinedDate() {
    return $this->joinedDate;
  } 
  
  function set_previousHospital($previousHospital) {
    $this->previousHospital = $previousHospital;
  }
  function get_previousHospital() {
    return $this->previousHospital;
  }
	// Interface Functions
	public function isLoggedOn(){
		
	}
	public function recordMonitoringData(){
		
	}
	public function sendMessageToPhysician(){
		
	}
	public function checkBookingDetails(){

	}	
}

?>