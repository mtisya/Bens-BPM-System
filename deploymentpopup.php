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
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Ben's | Workorder Details</title>
<link rel="shortcut icon" HREF="images/logo.jpg" />
<link rel="stylesheet" href="styles/popupform.css" />
<script src="js/jquery.js"></script>
<script src="js/entrydetails.js"></script>
<script src="js/updatelog1.js"></script>
</head>
<body>
<table border=1 id=tbl align="center">
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
<option>Microwave</option>
<option>Wimax</option>
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
<tr><td></td><td align="right"><button id=entrylog type='button' disabled>Submit</button></td><td align="right" style="padding-right: 5px;"><button id=updatelog type='button'>Update</button><button type='button'>Clear</button></td><td align="left"><button id="" type='button'>Cancel</button></td></tr>
</table>
</body>
<br/><br/>
</html>