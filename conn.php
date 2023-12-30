<?php
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "welcome123";
$db = "project";
$con = mysqli_connect($dbservername,$dbusername,$dbpassword,$db );
if(!$con)
{
	echo " not connected";
}
else
{
	echo " connected           ";
}
?>
