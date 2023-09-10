<?php
session_start();
include_once 'connection.php';


$username=$_POST['Username'];
$email=$_POST['email'];
$password=$_POST['password'];
$mobilenumber=$_POST['mobileno'];
$gender=$_POST['gender'];

$query="INSERT INTO user (UserId, FullName, Email, Password, ContactNo, Gender) VALUES (NULL, '$username', '$email', '$password', '$mobilenumber', '$gender')";


$execute=mysqli_query($con,$query);

if (isset($execute)) {
	$_SESSION['Email']=$email;
	?>
	<script>
		window.location.href = "../User/index.php";
	</script>
	<?php
}
?>