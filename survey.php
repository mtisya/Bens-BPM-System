<?php
//connect to database
include ('includes/connection.php');

//Error handling part
error_reporting(E_ALL);
ini_set('display_errors', '1');

  $customername = $_GET['customername'];
  $solutionarchitect = $_GET['solutionarchitect'];
	$physicaladdress = $_GET['physicaladdress'];
	$coordinates = $_GET['coordinates'];
	$surveytype= $_GET['surveytype'];
	$reqcode=$_GET['reqcode'];
	$contactperson=$_GET['contactperson'];
	$contactdetails=$_GET['contactdetails'];
	$fieldengineer=$_GET['fieldengineer'];
	$engcontacts=$_GET['engcontacts'];
	$datereceived=$_GET['datereceived'];
	$comments=$_GET['comments'];	

//Insert Into Database
$sql="INSERT INTO surveyjobs VALUES('$customername','$solutionarchitect','$physicaladdress','$coordinates','$surveytype','$reqcode','$contactperson','$contactdetails','$fieldengineer','$engcontacts','$datereceived','$comments')" or die (mysqli_error());
$insert = mysqli_query($link,$sql);
	if ($insert)
	{
	header("location:surveyform.php");
	}
	else
   {
	echo "<br>Could not insert into database<br>" . mysqli_error($link);
	}

?>