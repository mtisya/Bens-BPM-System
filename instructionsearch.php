<table>
<?php
include 'includes/Database.php';
$str = $_GET['str'];
$sql = "";
if ($str == ""){
	$sql  = "SELECT * from instructions";
	}
	else {
		$sql  = "SELECT * from instructions  WHERE  orderid like '%$str%' " ;
		}
$db2 = new Database($sql);
$sum = 0;
$resp2 = $db2->execute_query();
echo "<table border=1  id=instruct>";
echo "<tr><th colspan=12><h1>Work Instructions</h1></th></tr>";
echo "<tr colspan=12><th>Date:</th><th>M/Hr:</th><th>Pax:</th><th>Artisan:</th><th>Instructions:</th><th>Rate:</th><th>Amount:</th></tr>";
while ($row = mysqli_fetch_row($resp2)){
$sum += $row[7];
echo "<tr><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td></tr>";
	}

?>
<tr bgcolor="#FFFF71" align="right"><th></th><th></th><th><th></th></th><th colspan=2 align="right">Total Amount : </th><th align="left"><?php echo $sum ?></th></tr>
</table><br/><br/>