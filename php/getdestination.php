<?php
include "mysql_open.php";

$sql = "SELECT  `lat`, `lon`,`start`,`finish`, `time` FROM destination ORDER BY time DESC LIMIT 1";

$res = mysql_query($sql) or die("fail");

if(mysql_num_rows($res)>0)
{
	$sor = mysql_fetch_array($res);
	echo $sor['lat'].";".$sor['lon'].";".$sor['start'].";".$sor['finish'].";" .$sor['time'];
}
else
{
	echo "nodata";
}
?>