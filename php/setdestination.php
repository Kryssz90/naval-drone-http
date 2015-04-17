<?php

$lat=$_REQUEST['lat'];
$lon = $_REQUEST['lon'];
$time= $_REQUEST['time'];
$start=$_REQUEST['start'];
$finish=$_REQUEST['finish'];
$id=$_REQUEST['id'];

include "mysql_open.php";

if(isset($_REQUEST['lat']))
{
	$sql="INSERT INTO `destination`( `lat`, `lon`,`start`,`finish`,`time`) VALUES ($lat,$lon,0,0,NOW())";
}
else
{
	$sql="UPDATE `destination` SET start=$start , finish=$finish WHERE id=$id;";
}

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