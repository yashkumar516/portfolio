<?php
	
	if(!isset($_SESSION['user']))
	{
		echo '<script>alert("not set session");</script>';
		header('location: ../login.php');
	}
	
?>