<?php
require_once("connection.php");
session_start();
$DoctorId=$_GET['DoctorId'];
$query="DELETE FROM doctor WHERE doctor.DoctorId = $DoctorId";
$execute=mysqli_query($con,$query);
if ($execute) {
	?>
	<script>
		alert("Doctor deleted successfully...!!");
		window.location.href = "managedoctor.php";
	</script>
	<?php
}
else
{
	if (mysqli_errno($con)) {
		$_SESSION['manerr']=mysqli_error($con);
		?>
		<script>
			window.location.href = "managedoctor.php";
		</script>
		<?php
	}
}
?>