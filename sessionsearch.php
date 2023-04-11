<?php
include 'includes/Database.php';
$year = $_GET['year'];
$session = $_GET['session'];
$sql = "";
$sql  = "SELECT * from bpmlinks";
$db2 = new Database($sql);
$resp2 = $db2->execute_query();
echo "<tr><th colspan=5><h4>Link | Order Details For the Year $year and Session $session</h4></th></tr>";
echo "<tr bgcolor=#40FF40><th>Circuit ID</th><th>Client Name</th><th>Service Type</th><th>Acces Medium</th><th>Bandwidth</th></tr>";
$num = 0;
while ($row = mysqli_fetch_row($resp2)){
	if ($num%2==0){
			echo "<tr id=even><td>$row[0]</td><td>$row[1]</td><td>$row[6]</td><td>$row[7]</td><td>$row[5]</td></tr>";

		}
		else {
			echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[6]</td><td>$row[7]</td><td>$row[5]</td></tr>";
		}
		$num+=1;
	}

?>