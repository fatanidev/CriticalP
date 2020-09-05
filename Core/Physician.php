<?php
require_once "Profile.php";
require_once "PhysicianManagementInterface.php";
class Physician extends Profile implements PhysicianManagementInterface {
  // Properties
  public $role;
  public $certificate;
  public $enrolledDate;
  
  // construtor
  function __construct($id, $name, $address, $phoneNumber, $role, $certificate, $enrolledDate){
	parent::__construct($id, $name, $address, $phoneNumber);
    $this->role = $role;
    $this->certificate = $certificate;	
    $this->enrolledDate = $enrolledDate;	

  }  
  
  // Methods
  function set_role($role) {
    $this->role = $role;
  }
  function get_role() {
    return $this->role;
  } 
  
  function set_certificate($certificate) {
    $this->certificate = $certificate;
  }
  function get_certificate() {
    return $this->certificate;
  }

  function set_enrolledDate($enrolledDate) {
    $this->enrolledDate = $enrolledDate;
  }
  function get_enrolledDate() {
    return $this->enrolledDate;
  }   
	public function isLoggedOn(){
		
	}
	public function requestPatientMedicalHistory(){
		
	}
	public function requestPatientMedicalNotes(){
		
	}
	public function requestPatientAllergy(){
		
	}
	public function sendMessageToPatient(){
		
	}
	public function setAppointment(){
		
	}
	public function setNewNote(){
		
	}
	public function setTreatment(){
		
	}	  
 
}

