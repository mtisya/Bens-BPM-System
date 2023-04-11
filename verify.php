<?php
//connect tothe database
include 'includes/Database.php';

//Error handling part
error_reporting(E_ALL);
ini_set('display_errors', '1');

//manipulate database
$id = $_GET['id'];
$workorder  = $_GET['workorder'];
$sql = "SELECT * FROM entrylog WHERE workorder  = '$id'";
$db = new Database($sql);
$resp = $db->execute_query();
while ($row = mysqli_fetch_row($resp)){
	$actworkorder = $row[0];
	if ($actworkorder == $workorder){
		$receipt = uniqid();
		$sql2 = "UPDATE entrylog SET Status = 'Completed' WHERE workorder  = '$id'" or die (mysqli_error());
		$db2 = new Database($sql2);
		$db2->execute_non_query();
		echo "1";
		}
	else {
		echo "-1";
		}
	}
?>