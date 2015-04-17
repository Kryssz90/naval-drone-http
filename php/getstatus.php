<?php
include "mysql_open.php";

$sql = "SELECT  `signal`, `battery`, `time` FROM status ORDER BY time DESC LIMIT 1";

$res = mysql_query($sql) or die("fail");

if(mysql_num_rows($res)>0)
{
	$sor = mysql_fetch_array($res);
	echo $sor['signal'].";".$sor['battery'].";".$sor['time'];
}
else
{
	echo "nodata";
}

?>