<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ben's | Turnaround Doc</title>
<link rel="shortcut icon" HREF="images/logo.jpg" />
<link rel="stylesheet" href="styles/tdoc.css" />
<script src="js/jquery.js"></script>
<script src="js/entrydetails.js"></script>
<script src="js/reports.js"></script>
</head>
<body ><br />
<div id="topdiv"><ul>
<li><a href="home.php">Back Home</a> | </li>
<li><a href=javascript:window.print()>Print</a> |</li>
<li><a href=#>Export as Excel</a> | </li>
<li><a href=#>Export as PDF</a> | </li>
<li><a href=#>Export as Word</a></li>
</ul></div><br /><br /><br /><br />
<fieldset>
<table border=1 id=tbl1 align="center">
<tr><th colspan=12><h1>Workorder Details</h1></th></tr>
<tr><td align="right">Work Order#</td><td><input type="text" name="workorder" id="workorder"></td><td align="right">Entry No#</td><td><input type="text" name="entryno" id="entryno"></td></tr>
<tr><td align="right">Client Name:</td><td><input type="text" name="client" id="client"></td><td align="right">Project Manager:</td><td><input type="text" name="projectmanager" id="projectmanager"></td></tr>
<tr><td align="right">Address:</td><td><input type="text" name="address" id="address"></td><td align="right">Job Description:</td><td><input type="text" name="jobdescription" id="jobdescription"></td></tr>
<tr><td align="right">Contact Details:</td><td><input type="text" name="cdetails" id="cdetails"></td><td align="right">Technology:</td><td><select name="technology" id="technology">
<option ></option>
<option>Active Fiber</option>
<option>Passive Fiber</option>
<option>Bespoke</option>
<option>Ceragon</option>
<option>LTE</option>
</select></td></tr>
<tr><td align="right">Circuit ID:</td><td><input type="text" name="circuitid" id="circuitid"></td><td align="right">Execution:</td><td><select name="execution" id="execution">
<option></option>
<option>Deployment</option>
<option>Support</option>
</select></td></tr>
<tr><td align="right">Service Type:</td><td>
<select name="servicetype" id="servicetype">
<option></option>
<option>E1/SIP</option>
<option>Internet</option>
<option>WAN/IP MPLS</option>
<option>PTP</option>
<option>Video Conference</option>
<option>Wi-Fi</option>
</select></td><td align="right">IP Address:</td><td><input type="text" name="ipaddress" id="ipaddress" placeholder="172.210.132.15"  ></td></tr>
<tr><td align="right">Building ID:</td><td><input type="text" name="buildingid" id="buildingid"></td><td align="right">Status:</td><td><select name="status" id="status">
<option></option>
<option>Completed</option>
<option>WIP</option>
<option>Returned</option>
<option>Pending</option>
<option>Onhold</option>
</select></td></tr>
<tr><td align="right">Building Name:</td><td><input type="text" name="buildingname" id="buildingname"></td><td>Start Date:<input type="date" name="startdate" id="startdate" title="Date Job Completed"></td><td>Order Deadline:<input type="date" name="orderdeadline" id="orderdeadline"></td></tr>
</table>
<form action="workinstruction.php" method="post" id="tbl2">
<table border=1 id="tbl2">
<tr><th colspan=12><h1>Issue Work Ticket </h1></th></tr>
<tr><td align="left"><b>Work Order</b><input type="text" name="workorder1" id="workorder1"></td><td></td><td><b>Search CI Items</b></td><td><input type="search" placeholder="Search" id=instsearch name="instsearch" /></td></tr>
<tr colspan=12><th>Date:</th><th>M/Hr:</th><th>Pax:</th><th>Artisan:</th></tr>
<tr><td><input type="date" name="date1" id="date1"></td><td><input type="text" name="mhr" id="mhr"></td><td><input type="text" name="pax" id="pax"></td><td><input type="text" name="artisan" id="artisan"></td></tr>
<tr colspan=12><th>Instructions:</th><th>Rate:</th><th>Amount:</th></tr>
<tr><td><input type="text" name="instruction" id="instruction"></td><td><input type="text" name="rate" id="rate"></td><td><input type="text" name="amount1" id="amount1"/></td><td width="120"><input type="submit" name="submit" id="submit" value="Add Item"/></td></tr></table>
<table>
<?php
include 'includes/db_connection.php';
$sql  = "SELECT * from instructions LIMIT 3";	
$db2 = new Database1($sql);
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
<tr bgcolor="#FFFF71" align="right"><th></th><th></th><th><th></th></th><th colspan=2 align="right">Total Lobour(Ksh): </th><th align="left"><?php echo $sum ?></th></tr>
</table><br/><br/>
<table border=1 id="tbl2">
<tr><td width="200"></td><td style="width: 120px;">Total Labour:</td><td><input type="Number" name="amount" id="amount" style="width:150px;"></td></tr>
<tr><td></td><td style="width: 120px;">Material + Labor (M+L):</td><td><input type="Number" name="amount" id="amount" style="width:150px;"></td></tr>
<tr><td></td><td style="width: 120px;">Overhead at 17.32%:</td><td><input type="Number" name="amount" id="amount" style="width:150px;"></td></tr>
<tr><td></td><td style="width: 120px;">Ex-Work:</td><td><input type="Number" name="amount" id="amount" style="width:150px;"></td></tr>
</table>
</form>
<table border=1 id="item" align="left">
<tr><th colspan=12><h1>Job Description</h1></th></tr>
<tr><td>Specification:<textarea name="specification" id="specification" rows="1" cols="20"></textarea></td><td>Qty:<input type="Number" name="qty" id="qty"></td><td >UM:<input type="text" name="um" id="um"></td><td>U.P:<input type="text" name="up" id="up"></td><td>Amount:<input type="text" name="amount" id="amount"></td></tr>
</table>
<form action="orderitems.php" method="post" id="">
<table border=1 id=item align="left">
<tr><th colspan=12><h1>Bill of Materials</h1></th>
<tr><td align="left"><b>Work Order</b><input type="text" name="workorder2" id="workorder2"></td><td></td><td><b>Search CI Items</b></td><td><input type="search" placeholder="Search" id=itemsearch name="itemsearch" /></td></tr>
<tr colspan=12><th>Stock-Code:</th><th>Qty:</th><th>UM:</th><th>Description:</th><th>UP:</th><th>Value:</th></tr>
<tr><td><input type="text" name="stockcode" id="stockcode"></td><td><input type="Number" name="qty1" id="qty1"></td><td><input type="text" name="um1" id="um1"></td><td><input type="text" name="description" id="description"></td><td width="100"><input type="text" name="up1" id="up1"></td><td colspan="1"><input type="text" name="value" id="value" width="100"></td></tr>
<tr><td></td><td></td><td></td><td></td><td></td><td><input type="submit" name="submit" id="submit" value="Add Item"/></td></tr>
<?php
include 'includes/Database.php';
$sql = "SELECT * FROM orderitems LIMIT 5";
$db = new Database($sql);
$sum = 0;
$resp = $db->execute_query();
echo "<table border=1 id=items>";
echo "<tr><th colspan=12><h1>Items | Materials</h1></th></tr>";
echo "<tr colspan=12><th>Stock-Code:</th><th>Qty:</th><th>UM:</th><th>Description:</th><th>UP:</th><th>Value:</th></tr>";
while ($row = mysqli_fetch_row($resp)){
$sum += $row[6];
echo "<tr><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td></tr>";
	}
?>
<tr bgcolor="#FFFF71" align="right"><th></th><th><th></th></th><th colspan=2 align="right">Total Materials(Ksh): </th><th align="left"><?php echo $sum ?></th></tr>
</table>
</form>

</fieldset>
</body>
</html>
