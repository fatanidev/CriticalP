<?php
require_once "Profile.php";
require_once "PatientManagementInterface.php";

class Appointment implements AppointmentManagementInterface{
  // Properties
  public $id;
  public $patientId;
  public $staffId;
  public $appointmentDate;
  //constructor
  function __construct($id, $patientId, $staffId, $appointmentDate){
    $this->id = $id;
    $this->patientId = $patientId;
	$this->staffId = $staffId;
	$this->appointmentDate = $appointmentDate;
  }
  
  // Methods to create the object
  function set_id($id) {
    $this->id = $id;
  }
  function get_id() {
    return $this->id;
  } 
  
  function set_patientId($patientId) {
    $this->patientId = $patientId;
  }
  function get_patientId() {
    return $this->patientId;
  }
  function set_time($time) {
    $this->staffId = $time;
  }
  function get_time() {
    return $this->staffId;
  } 
  
  function set_appointmentDate($appointmentDate) {
    $this->appointmentDate = $appointmentDate;
  }
  function get_appointmentDate() {
    return $this->appointmentDate;
  }  
  
	// Interface Functions
	public function checkStaffAvailability(){
		
	}
	public function checkRoomAvailability(){
		
	}

}

?>