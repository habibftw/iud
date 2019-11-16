<?php

		$uname = $_POST['uname'];
		$email = $_POST['email'];
		$uid = $_POST['uid'];

	mysqli_connect();
	
	$con = mysqli_connect('localhost','root','','iud');
	$sql="insert into users set uname='$uname',
								uid = '$uid',
								email= '$email'";
	$result = mysqli_query($con,$sql);
	mysqli_close($con);
	
	if($result==true)
	{
		header('location: Registration.php');
	}
	else
	{
		echo "bop";
	}
	
?>