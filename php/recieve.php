<?php
//error_reporting(E_ALL);
 $has = $_REQUEST['has'];
 $lat = $_REQUEST['lat'];
 $lon = $_REQUEST['lon'];
 $acc = $_REQUEST['acc'];
 $bear = $_REQUEST['bear'];
 $time = $_REQUEST['time'];
 
 $time = round($time/1000);
 
include "mysql_open.php";

$sql="INSERT INTO `recieved`( `hassignal`, `lat`, `lon`, `acc`, `bear`, `time`) VALUES ($has,$lat,$lon,$acc,$bear,'".date("Y-m-d G:i:s",$time)."')";

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