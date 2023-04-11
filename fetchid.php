<?php
//Error handling part
error_reporting(E_ALL);
ini_set('display_errors', '1');

//$id_GET['id'];
require_once("includes/connection.php");
$linkquery="SELECT workid.customid FROM workid LIMIT 1";
$linkresult = mysqli_query($link,$linkquery) or die ("Query to get data from bpmlinks failed: ".mysql_error());
$tcustomid="";
 while ($row = mysqli_fetch_array($linkresult)) 
	 {
	$tcustomid=$row["customid"];
 }
?>