<?php
require_once "Profile.php";
require_once "PhyicianManagementInterface.php";
class Physician extends Profile implements PhyicianManagementInterface {
  // Properties
  public $role;
  public $certificate;
  public $enrolledDate;
  
  // construtor
  function __construct($role, $certificate, $enrolledDate){
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

$testPatient = new Physician();
$testPatient->set_id(1);
$testPatient->set_name("Sabba Fatani");
$testPatient->set_address("7 Witcham Close");
$testPatient->set_phoneNumber("07588911121");

$testPatient->set_role("Surgeon");
$testPatient->set_certificate(" Distinction - Dental School of Oxford ");
$testPatient->set_enrolledDate("25/10/2003");



echo $testPatient->get_name();
echo $testPatient->get_certificate();
echo "<br>";
?>