<?php
//Error handling part
error_reporting(E_ALL);
ini_set('display_errors', '1');

//$id_GET['id'];
require_once("includes/connection.php");
$linkquery="SELECT entrylog.workorder,entrylog.entry,entrylog.clientname,entrylog.circuitid,entrylog.projectmanager,entrylog.date,entrylog.contact,entrylog.servicetype,entrylog.technology,entrylog.jobdescription,entrylog.execution,entrylog.status,entrylog.ipaddress,entrylog.physicallocation,entrylog.buildingname,entrylog.buildingid,entrylog.orderdeadline FROM entrylog WHERE entrylog.workorder='workorder'";
$linkresult = mysqli_query($link,$linkquery) or die ("Query to get data from bpmlinks failed: ".mysql_error($link));
$tworkorder="";
$tentry="";
$tclientname="";
$tcircuitid="";
$tprojectmanager="";
$tdate="";
$tcontact="";
$tservicetype="";
$ttechnology="";
$tjobdescription="";
$texecution="";
$tstatus="";
$tipaddress="";
$tphysicallocation="";
$tbuildingname="";
$tbuildingid="";
$torderdeadline="";
 while ($row = mysqli_fetch_array($linkresult)) 
 {
$tworkorder=$row["workorder"];
$tentry=$row["entryno"];
$tclientname=$row["client"];
$tcircuitid=$row["circuitid"];
$tprojectmanager=$row["projectmanager"];
$tdate=$row["date"];
$tcontact=$row["contact"];
$tservicetype=$row["servicetype"];
$ttechnology=$row["technology"];
$tjobdescription=$row["jobdescription"];
$texecution=$row["execution"];
$tstatus=$row["status"];
$tipaddress=$row["ipaddress"];
$tphysicallocation=$row["physicallocation"];
$tbuildingname=$row["buildingname"];
$tbuildingid=$row["buildingid"];
$torderdeadline=$row["orderdeadline"];
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