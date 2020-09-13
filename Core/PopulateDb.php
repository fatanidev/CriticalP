<?php
//imports
require_once "Appointment.php";
require_once "Physician.php";
require_once "Patient.php";
require_once "Prescription.php";
require_once "Treatment.php";
require_once "Symptom.php";
require_once "MonitoringData/HeartRate.php";
require_once "MonitoringData/BloodPressure.php";
require_once "MonitoringData/Fitness.php";
require_once "MonitoringData/SleepLog.php";
require_once "MonitoringData/Temperature.php";
require_once "MonitoringData/MonitoringData.php";

	// Creating Appointment Objects($id, $patientId, $staffId, $appointmentDate)
	$appointment1 = new Appointment('1', '1', '1', '24/11/2020 - 9:00am');
	$appointment2 = new Appointment('2', '2', '2', '25/11/2020 - 10:00am');
    
	//Creating Physician Users ($id, $name, $address, $phoneNumber, $role, $certificate, $enrolledDate)
	$physician1 = new Physician('1', 'Dr Landry', '24 Hospital Road', '020 1234 1232', 'Surgeon', 'Medical Oxford University', '21/10/2003');
	$physician2 = new Physician('2', 'Dr Bardos', '23 Litting Road', '020 4231 1252', 'General Practitioner', 'Medical University of West London', '21/10/2006');	
	
	//Creating Patient Users ($id, $name, $address, $phoneNumber, $joinedDate, $previousHospital)
	$patient1 = new Patient('3', 'Jemma Gardiner', '23 Chatter Road', '020 3123 5842', '23/05/2017', 'Hillingdon Hospital'); 
	$patient2 = new Patient('4', 'Vincent Mcmanus', '23 Beach Lane', '020 3693 6372', '19/03/2019', 'Ealing Hospital');
	$patientArray = array($patient1, $patient2);
	
	//Creating Treatments ($id, $name, $staffId, $description, $startDate, $endDate)
	$treatment1 = new Treatment('1', 'Heart Surgery', '1', 'Heart Surgery for Jemma Gardiner', '12/09/2020', '13/09/2020');
	
	//creating monitoring data sample for pathent 1 ($id, $userid, $dateRecorded, $timeRecorded, $value, $activity)
	$p1RestingData1 = new MonitoringData ('1', '3', '01/08/2020', '10:30', '40', 'Resting');
	$p1RestingData2 = new MonitoringData ('2', '3', '01/08/2020', '13:30', '76', 'Resting');
	$p1RestingData3 = new MonitoringData ('3', '3', '01/08/2020', '14:30', '74', 'Resting');
	$p1RestingData4 = new MonitoringData ('4', '3', '01/08/2020', '15:30', '81', 'Resting');	
	$p1RestingData5 = new MonitoringData ('5', '3', '01/08/2020', '16:30', '86', 'Resting');
	


	$p1SleepData1 = new MonitoringData ('6', '3', '02/08/2020', '02:30', '64', 'Sleep');
	$p1SleepData2 = new MonitoringData ('7', '3', '02/08/2020', '03:30', '62', 'Sleep');
	$p1SleepData3 = new MonitoringData ('8', '3', '02/08/2020', '04:30', '63', 'Sleep');
	$p1SleepData4 = new MonitoringData ('9', '3', '02/08/2020', '05:30', '64', 'Sleep');	
	$p1SleepData5 = new MonitoringData ('10', '3', '02/08/2020', '06:30', '62', 'Sleep');
	
	$p1ExerciseData1 = new MonitoringData ('11', '3', '02/08/2020', '07:30', '110', 'Exercise');
	$p1ExerciseData2 = new MonitoringData ('12', '3', '02/08/2020', '07:45', '105', 'Exercise');
	$p1ExerciseData3 = new MonitoringData ('13', '3', '02/08/2020', '07:58', '95', 'Exercise');
	$p1ExerciseData4 = new MonitoringData ('14', '3', '02/08/2020', '08:09', '97', 'Exercise');	
	$p1ExerciseData5 = new MonitoringData ('15', '3', '02/08/2020', '08:25', '94', 'Exercise');	
	
	$p1MonitoringArray = array($p1RestingData1, $p1RestingData2, $p1RestingData3, $p1RestingData4, $p1RestingData5, $p1SleepData1, $p1SleepData2, $p1SleepData3, $p1SleepData4, $p1SleepData5, $p1ExerciseData1, $p1ExerciseData2, $p1ExerciseData3, $p1ExerciseData4, $p1ExerciseData5);
	
	//creating monitoring data sample for pathent 2 ($id, $userid, $dateRecorded, $timeRecorded, $value, $activity)
	$p2RestingData1 = new MonitoringData ('11', '4', '01/08/2020', '10:30', '40', 'Resting');
	$p2RestingData2 = new MonitoringData ('12', '4', '01/08/2020', '13:30', '76', 'Resting');
	$p2RestingData3 = new MonitoringData ('13', '4', '01/08/2020', '14:30', '74', 'Resting');
	$p2RestingData4 = new MonitoringData ('14', '4', '01/08/2020', '15:30', '94', 'Resting');	
	$p2RestingData5 = new MonitoringData ('15', '4', '01/08/2020', '16:30', '86', 'Resting');

	$p2SleepData1 = new MonitoringData ('16', '4', '01/08/2020', '02:30', '57', 'Sleep');
	$p2SleepData2 = new MonitoringData ('17', '4', '01/08/2020', '03:30', '61', 'Sleep');
	$p2SleepData3 = new MonitoringData ('18', '4', '01/08/2020', '04:30', '44', 'Sleep');
	$p2SleepData4 = new MonitoringData ('19', '4', '01/08/2020', '05:30', '35', 'Sleep');	
	$p2SleepData5 = new MonitoringData ('20', '4', '01/08/2020', '06:30', '30', 'Sleep');	
	
	$p2ExerciseData1 = new MonitoringData ('21', '4', '02/08/2020', '07:30', '115', 'Exercise');
	$p2ExerciseData2 = new MonitoringData ('22', '4', '02/08/2020', '07:45', '110', 'Exercise');
	$p2ExerciseData3 = new MonitoringData ('23', '4', '02/08/2020', '07:58', '94', 'Exercise');
	$p2ExerciseData4 = new MonitoringData ('24', '4', '02/08/2020', '08:09', '80', 'Exercise');	
	$p2ExerciseData5 = new MonitoringData ('25', '4', '02/08/2020', '08:25', '74', 'Exercise');	
	
	$p2MonitoringArray = array($p2RestingData1, $p2RestingData2, $p2RestingData3, $p2RestingData4, $p2RestingData5, $p2SleepData1, $p2SleepData2, $p2SleepData3, $p2SleepData4, $p2SleepData5, $p2ExerciseData1, $p2ExerciseData2, $p2ExerciseData3, $p2ExerciseData4, $p2ExerciseData5);
	
	//hashing sensitive information
	$sensitiveData = "Crucial Data";
	$encryptionStyle = "sha512";
	$hashed = hash($encryptionStyle, $sensitiveData);
	echo $hashed;
	
	if (hash("sha512", "test") == $hashed) {
		echo " CORRECT <br>";
	} else {
	echo " INCORRECT <br>";
	}
	
	//Monitoring Data Check for patient one
	foreach ($p1MonitoringArray as $p1MonitoringArray) {
		echo "<br> ID: " . $p1MonitoringArray->get_id() . "<br>";
		echo "Patient ID: " . $p1MonitoringArray->get_userid() . "<br>";
		echo "Date Recorded: " . $p1MonitoringArray->get_dateRecorded() . "<br>";
		echo "Time Recorded: " . $p1MonitoringArray->get_timeRecorded() . "<br>";
		
		//checking heart rate value
		if ($p1MonitoringArray->get_value() > 80 && $p1MonitoringArray->get_activity() != "Exercise"){
			echo "DANGER - Value: " . $p1MonitoringArray->get_value() . "<br>";	
		} elseif (($p1MonitoringArray->get_value() < 45 ) && $p1MonitoringArray->get_activity() != "Exercise") {
			echo "DANGER - Value: " . $p1MonitoringArray->get_value() . "<br>";				
		} else {
			echo "Value: " . $p1MonitoringArray->get_value() . "<br>";
		}
		echo "Activity: " . $p1MonitoringArray->get_activity() . "<br>";		
	}
	//Monitoring Data Check for patient one
	foreach ($p2MonitoringArray as $p2MonitoringArray) {
		echo "<br> ID: " . $p2MonitoringArray->get_id() . "<br>";
		echo "Patient ID: " . $p2MonitoringArray->get_userid() . "<br>";
		echo "Date Recorded: " . $p2MonitoringArray->get_dateRecorded() . "<br>";
		echo "Time Recorded: " . $p2MonitoringArray->get_timeRecorded() . "<br>";
		
		//checking heart rate value
		if ($p2MonitoringArray->get_value() > 80 && $p2MonitoringArray->get_activity() != "Exercise"){
			echo "DANGER - Value: " . $p2MonitoringArray->get_value() . "<br>";	
		} elseif (($p2MonitoringArray->get_value() < 45 ) && $p2MonitoringArray->get_activity() != "Exercise") {
			echo "DANGER - Value: " . $p2MonitoringArray->get_value() . "<br>";				
		} else {
			echo "Value: " . $p2MonitoringArray->get_value() . "<br>";
		}
		echo "Activity: " . $p2MonitoringArray->get_activity() . "<br>";		
	}		
	/*	Testing Purposes
		echo $physician1->get_id();
		foreach ($patientArray as $patientArray) {
			echo $patientArray->get_id(). "<br>";
			
		}
		
		*/
?>