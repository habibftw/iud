<?php

		
$uid2 = $_POST['uid2'];

	mysqli_connect();
	
	$con = mysqli_connect('localhost','root','','iud');
	$sql="select * from users where uid='{$uid2}'";
	$result = mysqli_query($con,$sql);
	mysqli_close($con);
	
	if($result == true)
	{
		while($data= mysqli_fetch_assoc($result))
		{
			$uid=$data['uid'];
			$uname=$data['uname'];
			$email=$data['email'];
			
		}
	}
	
?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>





	<center>
	<form method="POST" action="updateaction.php">
		
			<center><legend><b>Update<hr width="150"></b></legend></center>
			<table border="0">
			<tr>
				<td>
				Username:<br><input type="text" name="uname" value=<?= $uname;?>>
				</td>
			</tr>
			
			<tr>
				<td>
				Email:<br><input type="email" name="email" value=<?= $email;?>>
				</td>
			</tr>
			
			<tr>
				<td>
				User Id: <br><input type="number" name="uid" value=<?= $uid;?>>
				</td>
			</tr>
			
			
			
			<tr>
				<td> <br> </td>
			</tr>

		
			
		


	</form>
	</center>
	
	

	

			<tr>
			<td style="border-top:1px solid #888;">
			<input type="submit" name="update" value="Update"/><br>
			</td>
			
		
			
			
			
			</table>

		


	</form>
	</center>
	
	
	


</body>
</html>