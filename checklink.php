<?php
include 'includes/Database.php';
$id = $_GET['id'];
$sql="SELECT bpmlinks.siebelcircuit,bpmlinks.customername,bpmlinks.physicaladdress,bpmlinks.cdetails,bpmlinks.datereceived,bpmlinks.projectmanager,bpmlinks.datecompleted FROM bpmlinks WHERE bpmlinks.siebelcircuit='$id'";
$db = new Database($sql);
$resp = $db->execute_query();
$num = $db->getNumRows();
if ($num<=0){
	echo "0";
	}
else {
while ($row = mysqli_fetch_array($resp)){
	echo "$row[0]:$row[1]:$row[2]:$row[3]:$row[4]:$row[5]:$row[6]";
	}
}
?>