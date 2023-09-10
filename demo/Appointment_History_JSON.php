<?php
	require_once("connectionforjson.php");
	$email=$_GET['id'];
	

	$query="select DoctorName, Specialization,AppointmentDate, AppointmentTime, DoctorStatus from doctor d,appointment a,doctorspecialization ds where d.DoctorId=a.DoctorId and ds.DoctorSpecialicationID=a.DoctorSpecialization and Email='$email'";
	$execute=mysqli_query($con,$query);
	
	while ($data=mysqli_fetch_assoc($execute)) 
	{
		

		$new_data[]=array('appDoctorname' =>  $data['DoctorName'],'appSpecialization' =>  $data['Specialization'],'appdate' =>  $data['AppointmentDate'],
	 		'apptime' =>  $data['AppointmentTime'],'appdocstatus' =>  $data['DoctorStatus']);



	}

	$json_data = json_encode($new_data);

	echo "$json_data";
?>