<?php

			$uname = $_POST['uname'];
		$email = $_POST['email'];
		$uid = $_POST['uid'];

	mysqli_connect();
	
	$con = mysqli_connect('localhost','root','','iud');
	$sql="update users set  uname='$uname',
								
								email= '$email' where uid='$uid'";
	
	
	
	
	$result = mysqli_query($con,$sql);
	mysqli_close($con);

	header('location: Registration.php')

?>
