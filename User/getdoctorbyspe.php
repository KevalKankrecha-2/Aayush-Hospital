<?php
	$spe=$_POST['spe'];
	include_once '../demo/connection.php';

	$query="SELECT DoctorName,DoctorId  from doctor d,doctorspecialization ds where d.DoctorSpecialicationID =ds.DoctorSpecialicationID and d.DoctorSpecialicationID='$spe'";

	$execute=mysqli_query($con,$query);
	while($row=mysqli_fetch_assoc($execute)){
		$data=$row['DoctorName'];
		$id=$row['DoctorId'];
		echo "<option>Select Doctor</option><option value='$id'>$data</option>";
	}

?>