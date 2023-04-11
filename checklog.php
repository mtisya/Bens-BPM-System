<?php
include 'includes/Database.php';
$id = $_GET['id'];
$sql="SELECT entrylog.workorder,entrylog.entry,entrylog.clientname,entrylog.circuitid,entrylog.projectmanager,entrylog.date,entrylog.contact,entrylog.servicetype,entrylog.technology,entrylog.jobdescription,entrylog.execution,entrylog.status,entrylog.ipaddress,entrylog.physicallocation,entrylog.buildingname,entrylog.buildingid,entrylog.orderdeadline FROM entrylog WHERE entrylog.workorder='$id'";
$db = new Database($sql);
$resp = $db->execute_query();
$num = $db->getNumRows();
if ($num<=0){
	echo "0";
	}
else {
while ($row = mysqli_fetch_array($resp)){
	echo "$row[0]:$row[1]:$row[2]:$row[3]:$row[4]:$row[5]:$row[6]:$row[7]:$row[8]:$row[9]:$row[10]:$row[11]:$row[12]:$row[13]:$row[14]:$row[15]:$row[16]";
	}
}
?>