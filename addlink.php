<?php
// Inialize session
session_start();
// Check, if user is already signed in, then jump to secured page
if (!isset($_SESSION['Admin'])) {
header('Location: index.php');
}
//Error handling part
error_reporting(E_ALL);
ini_set('display_errors', '1');

//connect to database
require_once("db_connection.php");

//initialize variables
if(isset($_POST['submit']))
	{
	$siebelcircuit=$_POST['siebelcircuit'];
	$projectmanager=$_POST['projectmanager'];
	$customername=$_POST['customername'];
	$accountmanager= $_POST['accountmanager'];
	$physicaladdress=$_POST['physicaladdress'];
	$bandwidth=$_POST['bandwidth'];
	$servicetype=$_POST['servicetype'];
	$accessmedia=$_POST['accessmedia'];
	$contactperson=$_POST['contactperson'];
	$contactdetails=$_POST['contactdetails'];
	$status=$_POST['status'];
	$datereceived=$_POST['datereceived'];	
	$datecompleted=$_POST['datecompleted'];
	$comments=$_POST['comments'];

//Insert Into Database
$sql="INSERT INTO bpmlinks
 (siebelcircuit,customername,projectmanager,accountmanager,physicaladdress,bandwidth,servicetype,medium,cperson,cdetails,status,datereceived,datecompleted,comments)
VALUES('$siebelcircuit','$customername','$projectmanager','$accountmanager','$physicaladdress','$bandwidth','$servicetype','$accessmedia','$contactperson','$contactdetails','$status','$datereceived','$datecompleted','$comments')" or die (mysqli_error($sql));
$insert = mysqli_query($link,$sql);
	if ($insert)
	{
	header("location:newlinktask.php");
	}
	else
        {
	echo "<br>Registration Failed<br>" . mysqli_error($link);
	} 
} 
?>