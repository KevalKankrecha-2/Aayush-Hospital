<?php
require_once("connection.php");
require_once("CommonFileFunction.php");
session_start();
$specialization=$_POST['Specialization'];
$about=$_POST['about'];
//image uploading
if($_FILES['icon']['name']){
	move_uploaded_file($_FILES['icon']['tmp_name'], "images/".$_FILES['icon']['name']);
	$icon = "images/".$_FILES['icon']['name'];
}
if($_FILES['photo']['name']){
	move_uploaded_file($_FILES['photo']['tmp_name'], "images/".$_FILES['photo']['name']);
	$photo = "images/".$_FILES['photo']['name'];
}
$query="INSERT INTO doctorspecialization (DoctorSpecialicationID, Specialization, About, image, icon) VALUES (NULL,'$specialization','$about','$photo','$icon')";
$execute=mysqli_query($con,$query);
if(isset($execute))
{
	?>	
	<script>
		alert("Specialization Added successfully..!!");
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
		alert("SomeThing Went Wrong Please Try Again..!!");
		window.location.href = "Addspecialization.php";
	</script>
	<?php	
}			
?>