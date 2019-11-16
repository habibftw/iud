<?php
   $uid2 = $_POST['uid2'];

	mysqli_connect();
	
	$con = mysqli_connect('localhost','root','','iud');
	$sql="delete from users where uid='{$uid2}'";
	$result = mysqli_query($con,$sql);
	mysqli_close($con);
	
	header('location: Registration.php')
?>

