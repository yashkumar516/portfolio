<?php
	session_start();
	include 'session_validate.php';
	include 'confile.php';
	$id=$_REQUEST['bulletin_id'];
	$query=mysqli_query($con,"UPDATE `index_bulletins` SET `bulletin_status`='inactive' WHERE `bulletin_id`='$id' ");
	if($query)
	{		
		header('refresh:0;url=bulletin_management.php');
	}
?>