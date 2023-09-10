<?php
require_once("connection.php");
session_start();
$spid=$_SESSION['speidforedit'];
unset($_SESSION['speidforedit']);
$spname=$_POST['Specialization'];
$about=$_POST['about'];
if($_FILES['icon']['name']){
	move_uploaded_file($_FILES['icon']['tmp_name'], "images/".$_FILES['icon']['name']);
	$icon = "images/".$_FILES['icon']['name'];
}
if($_FILES['photo']['name']){
	move_uploaded_file($_FILES['photo']['tmp_name'], "images/".$_FILES['photo']['name']);
	$photo = "images/".$_FILES['photo']['name'];
}

$query="UPDATE doctorspecialization SET Specialization = '$spname',About='$about',image='$photo',icon='$icon' WHERE doctorspecialization.DoctorSpecialicationID = $spid";
$execute=mysqli_query($con,$query);


if (mysqli_errno($con)) {
	echo $error=mysqli_error($con);
	?>	
	<script>
		alert("Something Went Wrong Please Try Again..!!");
		window.location.href = "managespecification.php";
	</script>
	<?php		
}
else
{
	?>	
	<script>
		alert("Specialization Details Updated Successfully..!!");
		window.location.href = "managespecification.php";
	</script>
	<?php	
}
?>