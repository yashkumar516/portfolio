<?php
	session_start();
	include 'session_validate.php';
	include 'confile.php';
	$id=$_REQUEST['menu_id'];
	$fq=mysqli_query($con,"SELECT * FROM `menu` WHERE `menu_id`=$id ");
	$fqr=mysqli_fetch_assoc($fq);
	$check=$fqr['admin_status'];
	if($check=='active')
	{
		$cq=mysqli_query($con,"UPDATE `menu` SET `admin_status`='inactive' WHERE `menu_id`='$id' ");
	}
	else
	{
		$cq=mysqli_query($con,"UPDATE `menu` SET `admin_status`='active' WHERE `menu_id`='$id' ");
	}

	if($cq)
	{
		header('location:menu_management.php');
	}
?>