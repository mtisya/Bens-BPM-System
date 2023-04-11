<?php 
// Inialize session
session_start();
// Check, if user is already login, then jump to secured page
if (!isset($_SESSION['Admin'])) {
header('Location: index.php');
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ben's | Support Details</title>
<link rel="shortcut icon" HREF="images/logo.jpg" />
<link rel="stylesheet" href="styles/formstyle.css" />
<script src="js/jquery.js"></script>
<script src="js/links.js"></script>
<script src="js/utils.js"></script>
</head>
<body ><br />
<div id="topdiv"><ul>
<li><a href="home.php">Back Home</a> | </li>
<li><a href=javascript:window.print()>Print</a>|</li>
<li><a href=#>Export as Excel</a> | </li>
<li><a href=#>Export as PDF</a> | </li>
<li><a href=#>Export as Word</a></li>
</ul></div><br /><br /><br /><br />
<table border=1 id=tblunveri width="100%" align="center">
<tr><th colspan=12><h1>Uncompleted | Pending Jobs</h1></th></tr>
<tr bgcolor="#40FF40"><th>Workorder</th><th>Circuit ID</th><th width="200">Customer Name</th><th>Service Type</th><th>Technology</th><th>Project Manager</th><th>Date Received</th><th>Status</th><th>Comments</th><th colspan=12 bgcolor="#40FF40">Close Link/View/Update</th></tr>
<?php
include 'includes/Database.php';
$sql = "SELECT * FROM entrylog WHERE status = 'WIP' AND execution = 'Support'";
$db = new Database($sql);
$sum = 0;
$resp = $db->execute_query();
while ($row = mysqli_fetch_row($resp)){
	$sum = $row[3];
	echo "<tr><td>$row[0]</td><td>$row[3]</td><td>$row[2]</td><td>$row[7]</td><td>$row[8]</td><td>$row[4]</td><td>$row[5]</td><td>$row[11]</td><td>$row[9]</td><td><a href=javascript:verifyPayments('$row[0]')>Close link</a></td>
	<td><a href=javascript:openWin('supportpopup.php?id=$row[0]',990,450)>View/Update</a></td></tr>";
	}
?>
</table><br />
<hr width="80%"/><br />
<table border=1 id=tblveri width="100%" align="center">
<tr><th colspan=12><h1>Completed/Returned Jobs</h1></th></tr>
<tr bgcolor="#40FF40"><th>Workorder</th><th>Circuit ID</th><th width="200">Customer Name</th><th>Service Type</th><th>Technology</th><th>Project Manager</th><th>Date Received</th><th>Status</th><th>Comments</th><th colspan=12 bgcolor="#40FF40">View | Status</th></tr>

<?php
$sql = "SELECT * FROM entrylog WHERE execution = 'Support' AND (status = 'Completed' OR status = 'Returned')";
$db = new Database($sql);
$sum = 0;
$resp = $db->execute_query();
while ($row = mysqli_fetch_row($resp)){
	$sum = $row[3];
	echo "<tr><td>$row[0]</td><td>$row[3]</td><td>$row[2]</td><td>$row[7]</td><td>$row[8]</td><td>$row[4]</td><td>$row[5]</td><td>$row[11]</td><td>$row[9]</td><td><a href=javascript:openWin('supportpopup.php?id=$row[0]',990,450)>View/Update</a></td></tr>";
	}
?>
</table><br /><br />
</body>
</html>
