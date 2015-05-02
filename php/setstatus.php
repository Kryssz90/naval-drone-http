<?php

//$time = $_REQUEST['time'];
$battery=$_REQUEST['battery'];
$signal=$_REQUEST['signal'];
$gps=$_REQUEST['gps'];
$voltage=$_REQUEST['voltage'];
$bluetooh=$_REQUEST['bluetooth'];


include "mysql_open.php";


$sql="INSERT INTO `status`( `signal`, `battery`, `time`, `gps`, `voltage`,`bluetooth`) VALUES ($signal,$battery,NOW(),$gps,$voltage,$bluetooh)";

if(mysql_query($sql))
{
	echo "stored";
}
else
{
	echo "cannot be stored <br />".mysql_error();
}

mysql_close();

?>