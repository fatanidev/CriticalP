<?php

interface PhysicianManagementInterface {
	public function isLoggedOn();
	public function requestPatientMedicalHistory();
	public function requestPatientMedicalNotes();
	public function requestPatientAllergy();
	public function sendMessageToPatient();
	public function setAppointment();
	public function setNewNote();
	public function setTreatment();	
}
?>