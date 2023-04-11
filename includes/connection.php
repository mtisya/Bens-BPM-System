<?php
$mysqlserver="127.0.0.1";
$mysqlusername="root";
$mysqlpassword="";
$dbname = "benselectronics";
$link = mysqli_connect($mysqlserver, $mysqlusername, $mysqlpassword, $dbname ) or die ("Error connecting to mysql server: ".mysql_error());
 // change this to the name of your database
mysqli_select_db($link,$dbname) or die ("Error selecting specified database on mysql server: ".mysql_error());
?>
