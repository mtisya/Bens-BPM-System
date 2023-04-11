<?php
include 'includes/Database.php';
$id = $_GET['id'];
$sql="SELECT workid.customid FROM workid ORDER BY customid DESC LIMIT 1";
$db = new Database($sql);
$resp = $db->execute_query();
$num = $db->getNumRows();
if ($num<=0){
	echo "0";
	}
else {
while ($row = mysqli_fetch_array($resp)){
	echo "$row[0]";
	}
}
?>