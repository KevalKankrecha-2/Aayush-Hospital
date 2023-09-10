<?php
	require_once("connection.php");
	session_start();
	$uname=$_POST['Username'];
	$pass=$_POST['password'];
	$query="select UserName,Password from admin";
	$execute=mysqli_query($con,$query);
	$flag=0;
	while ($data=mysqli_fetch_assoc($execute)) 
	{
		if ($uname==$data['UserName'] and $pass==$data['Password'] and $uname!="" and $pass!="") {
		    $_SESSION['un']=$data['UserName'];
		    ?>
		        <script>
		            window.location.href = "aayush.php";
		        </script>
		    <?php
			$flag=1;
			die();
		}
		else
		{}
	}

	$query1="select Email,Password from user";
	$execute1=mysqli_query($con,$query1);
	while ($data1=mysqli_fetch_assoc($execute1)) 
	{
		if ($uname==$data1['Email'] and $pass==$data1['Password'] and $uname!="" and $pass!="") {
		    $_SESSION['Email']=$data1['Email'];
		    ?>
		        <script>
		            window.location.href = "../User/index.php";
		        </script>
		    <?php
			$flag=1;
			die();
		}
		else
		{}
	}

	if($flag==0)
	{

		 $_SESSION['err']="USERNAME OR PASSWORD INCORRECT...!!!";
			?>
		       <script>
		            window.location.href = "loginfile.php";
		        </script> 
		    <?php
	}


?>








