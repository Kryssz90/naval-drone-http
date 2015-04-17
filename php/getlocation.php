<?php
include "mysql_open.php";

$sql = "SELECT `hassignal`, `lat`, `lon`, `acc`, `bear`, `time` FROM recieved ORDER BY time DESC LIMIT 1";
//$sql = "SELECT id, `hassignal`, `lat`, `lon`, `acc`, `bear`, `time` FROM recieved WHERE time < NOW() + INTERVAL 81 MINUTE ORDER BY time DESC LIMIT 1";
$res = mysql_query($sql) or die("fail");

if(mysql_num_rows($res)>0)
{
	$sor = mysql_fetch_array($res);
	echo $sor['hassignal'].";".$sor['lat'].";".$sor['lon'].";".$sor['acc'].";".$sor['bear'].";".$sor['time'];
}
else
{
	echo "nodata";
}
?>