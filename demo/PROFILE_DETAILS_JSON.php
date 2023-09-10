<?php
	require_once("connectionforjson.php");
    $id=$_GET['id'];
    $query="select FullName,ContactNo from user where Email='$id'";
    $execute=mysqli_query($con,$query);
    $row=mysqli_fetch_assoc($execute);
      
    	if (isset($row)) {
    		$response[]= array('status' => "1", 'FullName' =>$row['FullName'],
            'ContactNo' =>$row['ContactNo']);
    	}
    
 else
 {
    $response[]= array('status' => "0");
 }

	$json_data = json_encode($response);

	echo "$json_data";
?>