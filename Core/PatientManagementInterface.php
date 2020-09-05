<?php

interface PatientManagementInterface {
	public function isLoggedOn();
	public function recordMonitoringData();
	public function sendMessageToPhysician();
	public function checkBookingDetails();	
}
?>