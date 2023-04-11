<?php
include 'includes/Database.php';
$year = $_GET['year'];
$session = $_GET['session'];
$str = $_GET['str'];
$sql = "";
if ($str == ""){
	$sql  = "SELECT * from entrylog LIMIT 20";
	}
	else {
		$sql  = "SELECT * from entrylog  WHERE  workorder like '%$str%' or circuitid like '%$str%'or clientname like '%$str%' " ;
		}
$db2 = new Database($sql);
$resp2 = $db2->execute_query();
echo "<table border=1 id=tblres >";
echo "<tr><th colspan=12><h4>Link | Order Details for the Year $year and Session $session</h4></th></tr>";
echo "<tr bgcolor=#40FF40><th>Workorder</th><th>Circuit ID</th><th>Client Name</th><th>Project Manager</th><th>Date Received</th><th>Service Type</th><th>Technology</th><th>IP Address</th><th>Status</th><th>Physical Address</th><th>Building Name</th><th>Comments</th></tr>";
$num = 0;
while ($row = mysqli_fetch_row($resp2)){
	if ($num%2==0){
			echo "<tr id=even><td>$row[0]</td><td>$row[3]</td><td>$row[2]</td><td>$row[4]</td><td>$row[5]</td><td>$row[7]</td><td>$row[8]</td><td>$row[12]</td><td>$row[11]</td><td>$row[13]</td><td>$row[14]</td><td>$row[9]</td></tr>";
		}
		else {
			echo "<tr><td>$row[0]</td><td>$row[3]</td><td>$row[2]</td><td>$row[4]</td><td>$row[5]</td><td>$row[7]</td><td>$row[8]</td><td>$row[12]</td><td>$row[11]</td><td>$row[13]</td><td>$row[14]</td><td>$row[9]</td></tr>";
		}
		$num+=1;
	}

?>