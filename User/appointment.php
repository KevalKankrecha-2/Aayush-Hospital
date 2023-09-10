<?php

	$email=$_POST['email'];
	$date=$_POST['date'];
	$time=$_POST['time'];
	$spe=$_POST['Specialization'];
	$doctorid=$_POST['doctorid'];

	include_once '../demo/connection.php';
	$query="INSERT INTO appointment (AppointId, DoctorSpecialization, DoctorId, AppointmentDate, AppointmentTime, Email, DoctorStatus) VALUES (NULL, '$spe', '$doctorid', '$date', '$time', '$email', '1')";
	$execute=mysqli_query($con,$query);
	
?>