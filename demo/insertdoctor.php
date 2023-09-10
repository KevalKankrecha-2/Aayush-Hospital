<?php
require_once("connection.php");
require_once("CommonFileFunction.php");
session_start();
$dname=$_POST['DoctorName'];
$dpass=$_POST['DoctorPassword'];
$dsid=$_POST['DoctorSpecialicationID'];
$dfees=$_POST['DoctorFees'];
$dphone=$_POST['ContactNo'];
$demail=$_POST['DoctorEmail'];


//image uploading
if($_FILES['img']['name']){

	move_uploaded_file($_FILES['img']['tmp_name'], "images/".$_FILES['img']['name']);

	$img = "images/".$_FILES['img']['name'];

}
$query="INSERT INTO doctor (DoctorId, DoctorName, DoctorPassword, DoctorSpecialicationID, DoctorFees, ContactNo, DoctorEmail,image) VALUES (NULL,'$dname','$dpass','$dsid','$dfees','$dphone','$demail','$img')";
$excute=mysqli_query($con,$query);
if($excute)
{
	?>	
	<script>
		alert("Doctor Inserted SucessFully..!");
		window.location.href = "managedoctor.php";
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
		alert("SomeThing Went Wrong Please Try Again..!!");
		 window.location.href = "Adddoctor.php";
	</script>
	<?php	
}
?>