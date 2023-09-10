<?php
	require_once("connection.php");
	$appid=$_POST['AppointId'];
	 	$query="UPDATE appointment SET DoctorStatus = '2' WHERE appointment.AppointId = $appid";
	 	$execute=mysqli_query($con,$query);
	 	
?>	