<?php

$time = $_REQUEST['time'];
$battery=$_REQUEST['battery'];
$signal=$_REQUEST['signal'];


include "mysql_open.php";


$sql="INSERT INTO `status`( `signal`, `battery`, `time`) VALUES ($signal,$battery,NOW())";

if(mysql_query($sql))
{
	echo "stored";
}
else
{
	echo "cannot be stored";
}

mysql_close();

?>