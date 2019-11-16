<?php
if(isset($_POST['signup']))
{
		
	
		
		if(empty($uname)==true || empty($email)==true || empty($uid) == true ){
			echo "Fill all!";
		}
		

		else{
		}
	
		

}

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php


	mysqli_connect();
	
	$con = mysqli_connect('localhost','root','','iud');
	$sql="select * from users";
	$result = mysqli_query($con,$sql);
	
	if($result == true)
	{
		while($data= mysqli_fetch_assoc($result))
		{
			$uid=$data['uid'];
			$uname=$data['uname'];
			$email=$data['email'];
			echo "$uid"."==="."$uname"."==="."$email"."<br>";
		}
	}
	
	else
	{
		echo"ki shauwa korli?";
	}
	
	
	mysqli_close($con);
?>



	<center>
	<form method="POST" action="insert.php">
		
			<center><legend><b>REGISTRATION<hr width="150"></b></legend></center>
			<table border="0">
			<tr>
				<td>
				Username:<br><input type="text" name="uname" value="">
				</td>
			</tr>
			
			<tr>
				<td>
				Email:<br><input type="email" name="email" value="">
				</td>
			</tr>
			
			<tr>
				<td>
				User Id: <br><input type="number" name="uid" value="">
				</td>
			</tr>
			
			
			
			<tr>
				<td> <br> </td>
			</tr>

		
			
			<tr>
				<td> <br> </td>
			</tr>
			
			<tr>
			<td style="border-top:1px solid #888;">
			<input type="submit" name="signup" value="Sign Up"/><br>
			</td>
			</tr>
			
			<tr>
				<td> <br> </td>
			</tr>
			<tr>
			<td>
			Already a menmber? <a href="Login.php">Sign In</a>
			</td>
			</tr>
			
			</table>

		


	</form>
	</center>
	
	

	
	<center>
	<form method="POST" action="check.php">
		
			<table border="0">
	
			<tr>
				<td>
				User Id: <br><input type="number" name="uid2" value="">
				</td>
			</tr>
			
			
			
			<tr>
				<td> <br> </td>
			</tr>

		
			
			<tr>
				<td> <br> </td>
			</tr>
			
			<tr>
			<td style="border-top:1px solid #888;">
			<input type="submit" name="update" value="Update"/><br>
			</td>
			
		
			
			</tr>
			
			
			
			</table>

		


	</form>
	</center>
	
	
	<center>
	<form method="POST" action="delete.php">
		
			<table border="0">
	
			<tr>
				<td>
				User Id: <br><input type="number" name="uid2" value="">
				</td>
			</tr>
			
			
			
			<tr>
				<td> <br> </td>
			</tr>

		
			
			<tr>
				<td> <br> </td>
			</tr>
			
			<tr>
			
			
			<td style="border-top:1px solid #888;">
			<input type="submit" name="delete" value="Delete"/><br>
			</td>
			
			</tr>
			
			
			
			</table>

		


	</form>
	</center>
	
	


</body>
</html>