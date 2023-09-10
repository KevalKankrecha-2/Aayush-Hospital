<?php
	session_start();
	$email=$_SESSION['Email'];
	$type=$_POST['type'];

	if($_FILES['file']['name']){

	move_uploaded_file($_FILES['file']['tmp_name'], "../demo/AndroidPdfUpload/".$_FILES['file']['name']);

	$file = "../demo/AndroidPdfUpload/".$_FILES['file']['name'];
	$filename=$_FILES['file']['name'];
include_once '../demo/connection.php';
$query="INSERT INTO files (ID, UserEmail, ReportType, PDFName, PDFURL, FileDateTime) VALUES (NULL, '$email', '$type', '$filename', '$file', now())";
	$execute=mysqli_query($con,$query);
    if (mysqli_errno($con)) {
        echo mysqli_error($con);
    }
}
?>