<?php
	require_once("connection.php");
	session_start();
	$specializationid=$_GET['DoctorSpecialicationID'];
	
	$query="DELETE FROM doctorspecialization WHERE doctorspecialization.DoctorSpecialicationID = $specializationid";
	$execute=mysqli_query($con,$query);
	if ($execute) {
			?>
			    <script>
			    	alert("Specialization deleted successfully...!!");
			        window.location.href = "managespecification.php";
			    </script>
			<?php
	}
	else
	{

		if (mysqli_errno($con)) {
			$error=mysqli_error($con);
		}
		?>
			    <script>
			    	alert("Something Went wrong Please Try Again..!!");
			        window.location.href = "managespecification.php";
			    </script>
			<?php
	}
?>