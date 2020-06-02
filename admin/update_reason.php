<?php
	session_start();
    include 'session_validate.php';
    include 'confile.php';
    $id=$_POST['r_id'];

    if (isset($_POST['submit'])) {
    	$t=$_POST['utitle'];
    	$d=$_POST['udesc'];

    $uq=mysqli_query($con,"UPDATE `master_reason` SET `mr_title`='$'t',`mr_desc`='$d' WHERE `mr_id`='$id' ");
    if($uq)
    {
    	echo '<script>alert("Success!");</script>';
    	header('url=reason_management.php');
    }
    else
    {
    	echo '<script>alert("Failed!");</script>';
    	header('url=reason_management.php');
    }

    }
    
?>