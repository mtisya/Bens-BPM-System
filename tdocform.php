<?php
//Error handling part
error_reporting(E_ALL);
ini_set('display_errors', '1');

//$id_GET['id'];
require_once("includes/connection.php");
$linkquery="SELECT bpmlinks.siebelcircuit,bpmlinks.customername,bpmlinks.physicaladdress,bpmlinks.cdetails,bpmlinks.datereceived,bpmlinks.projectmanager,bpmlinks.datecompleted FROM bpmlinks WHERE bpmlinks.siebelcircuit='siebelcircuit'";
$linkresult = mysqli_query($link,$linkquery) or die ("Query to get data from bpmlinks failed: ".mysql_error());
$tsiebelcircuit="";
$tcustomername="";
$tphysicaladdress="";
$tcdetails="";
$tdatereceived="";
$tprojectmanager="";
$tdatecompleted="";
$circuitid="";
$circuititem="";
 while ($row = mysqli_fetch_array($linkresult)) 
 {
$tsiebelcircuit=$row["siebelcircuit"];
$tcustomername=$row["customername"];
$tphysicaladdress=$row["physicaladdress"];
$tcdetails=$row["cdetails"];
$tdatereceived=$row["datereceived"];
$tprojectmanager=$row["projectmanager"];
$tdatecompleted=$row["datecompleted"];
$circuitid=$row["siebelcircuit"];
$circuititem=$row["siebelcircuit"];
if(isset($_POST['submit']))
	{
//Select from the Database

$workorder=$_POST['siebelcircuit'];
$client=$_POST['customername'];
$address=$_POST['physicaladdress'];
$telephone=$_POST['address'];
$datereceived=$_POST['datereceived'];
$projectmanager=$_POST['projectmanager'];
$orderdeadline=$_POST['orderdeadline'];
if($workorder==$tsiebelcircuit && $client==$tcustomername && $address=$tphysicaladdress && $telephone==$tcdetails && $datereceived== $tdatereceived && $projectmanager== $tprojectmanager && $orderdeadline== $tdatecompleted){
header("location:turnaround1.php");
}
else
{
	echo "There is no order related to that CI";
}
	}
 }
?>