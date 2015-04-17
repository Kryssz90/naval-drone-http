<?php
  $mysql_user="legogroup3";
  $mysql_password="amkgroup3";
  $mysql_database="legogroup3";
   mysql_connect('localhost',$mysql_user,$mysql_password);
   @mysql_select_db($mysql_database) or die( "Adatbázis kapcsolódási hiba");
   
   mysql_query("SET NAMES UTF8");
   
?>