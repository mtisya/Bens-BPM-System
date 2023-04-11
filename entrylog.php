<?php
//Connect to database
include("includes/connection.php");

//Error handling part
error_reporting(E_ALL);
ini_set('display_errors', '1');

//initiate variables
  $workorder = $_GET['workorder'];
  $entry = $_GET['entryno'];
  $client = $_GET['client'];
  $projectmanager = $_GET['projectmanager'];
  $address = $_GET['address'];
  $jobdescription = $_GET['jobdescription'];
  $cdetails = $_GET['cdetails'];
  $technology = $_GET['technology'];
  $circuitid = $_GET['circuitid'];
  $execution = $_GET['execution'];
  $servicetype = $_GET['servicetype'];
  $ipaddress = $_GET['ipaddress'];
  $buildingid = $_GET['buildingid'];
  $status = $_GET['status'];
  $buildingname = $_GET['buildingname'];
  $date = $_GET['startdate'];
  $orderdeadline = $_GET['orderdeadline'];
//insert data
 $sql="INSERT INTO entrylog VALUES('$workorder','$entry','$client','$circuitid','$projectmanager','$date','$cdetails','$servicetype','$technology','$jobdescription','$execution','$status','$ipaddress','$address','$buildingname','$buildingid','$orderdeadline')" or die (mysql_error($sql));
 $insert= mysqli_query($link,$sql);
    if ($insert)
    {
    header("location:additem.php");
    }
    else
     {
    echo "<br>Could not import file, Correct all Errors<br>" . mysqli_error($link);
    } 
?>