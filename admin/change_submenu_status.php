<?php
	session_start();
	include 'session_validate.php';
	include 'confile.php';
	$id=$_REQUEST['sno'];
	$fq=mysqli_query($con,"SELECT * FROM `submenu` WHERE `sno`=$id ");
	$fqr=mysqli_fetch_assoc($fq);
	$check=$fqr['submenu_status'];
	if($check=='active')
	{
		$cq=mysqli_query($con,"UPDATE `submenu` SET `submenu_status`='inactive' WHERE `sno`='$id' ");
	}
	else
	{
		$cq=mysqli_query($con,"UPDATE `submenu` SET `submenu_status`='active' WHERE `sno`='$id' ");
	}

	if($cq)
	{
		header('location:submenu_mgt.php');
	}
?>