<?php

$uid2 = $_POST['uid2'];

if(isset($_POST['update']))
{
	
	header('location: update.php');
	
	
	

}

else if (isset($_POST['delete']))
{
	header('location: delete.php');
}

?>