﻿<?php
	include '../../include/Confile.php';    
?>
<?php
$DateOfBirth=$_REQUEST["DateOfBirth"];
//$bday = new DateTime('12.12.1980');
$today = new DateTime($DateOfBirth);
// $today = new DateTime('00:00:00'); - use this for the current date
//$today = new DateTime('2016-04-01 00:00:00'); // for testing purposes

$bday = new DateTime('2019-03-31 00:00:00'); // for testing purposes

$diff = $today->diff($bday);

//printf('%d years, %d month', $diff->y, $diff->m);
printf('%d years, %d month, %d days', $diff->y, $diff->m, $diff->d);
?>