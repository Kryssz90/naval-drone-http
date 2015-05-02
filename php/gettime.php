<?php

include "mysql_open.php";
$res = mysql_query("SELECT NOW();") or die("HIBA");

$sor = mysql_fetch_array($res);
echo $sor[0];
?>