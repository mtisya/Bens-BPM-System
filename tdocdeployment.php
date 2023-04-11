<?php
// Inialize session
session_start();
// Check, if user is already login, then jump to secured page
if (!isset($_SESSION['username'])) {
header('Location: index.php');
}
//$id_GET['id'];
require_once("includes/db_connection.php");
$linkquery="SELECT bpmlinks.siebelcircuit,bpmlinks.customername,bpmlinks.physicaladdress,bpmlinks.cdetails,bpmlinks.datereceived,bpmlinks.projectmanager,bpmlinks.datecompleted FROM bpmlinks WHERE bpmlinks.siebelcircuit='siebelcircuit'";
$linkresult = mysqli_query($link,$linkquery) or die ("Query to get data from bpmlinks failed: ".mysql_error());
$tsiebelcircuit="";
$tcustomername="";
$tphysicaladdress="";
$tcdetails="";
$tdatereceived="";
$tprojectmanager="";
$tdatecompleted="";

 while ($row = mysqli_fetch_array($linkresult)) 
 {
$tsiebelcircuit=$row["siebelcircuit"];
$tcustomername=$row["customername"];
$tphysicaladdress=$row["physicaladdress"];
$tcdetails=$row["cdetails"];
$tdatereceived=$row["datereceived"];
$tprojectmanager=$row["projectmanager"];
$tdatecompleted=$row["datecompleted"];

if(isset($_POST['submit']))
	{
//Select from the Database

$workorder=$_POST['siebelcircuit'];
$client=$_POST['customername'];
$address=$_POST['physicaladdress'];
$telephone=$_POST['cdetails'];
$datereceived=$_POST['datereceived'];
$projectmanager=$_POST['projectmanager'];
$orderdeadline=$_POST['datecompleted'];
if($workorder==$tsiebelcircuit && $client==$tcustomername && $address=$tphysicaladdress && $telephone==$tcdetails && $datereceived== $tdatereceived && $projectmanager== $tprojectmanager && $orderdeadline== $tdatecompleted){
header("location:xxx.php");
}
else
{
	echo "There is no order related to that CI";
}
	}
 }
?>