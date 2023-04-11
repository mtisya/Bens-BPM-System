<?php
//connect to database
include ('includes/connection.php');

//Error handling part
error_reporting(E_ALL);
ini_set('display_errors', '1');

  $siebelcircuit = $_GET['siebelcircuit'];
  $customername = $_GET['customername'];
	$projectmanager = $_GET['projectmanager'];
	$accountmanager = $_GET['accountmanager'];
	$physicaladdress= $_GET['physicaladdress'];
	$bandwidth=$_GET['bandwidth'];
	$servicetype=$_GET['servicetype'];
	$accessmedia=$_GET['accessmedia'];
	$contactperson=$_GET['contactperson'];
	$contactdetails=$_GET['contactdetails'];
	$status=$_GET['status'];
	$datereceived=$_GET['datereceived'];	
	$datecompleted=$_GET['datecompleted'];
	$comments=$_GET['comments'];

//Insert Into Database
$sql="INSERT INTO bpmlinks VALUES('$siebelcircuit','$customername','$projectmanager','$accountmanager','$physicaladdress','$bandwidth','$servicetype','$accessmedia','$contactperson','$contactdetails','$status','$datereceived','$datecompleted','$comments')" or die (mysqli_error());
$insert = mysqli_query($link,$sql);
	if ($insert)
	{
	header("location:newlinktask.php");
	}
	else
   {
	echo "<br>Could not insert into database<br>" . mysqli_error($link);
	}

?>