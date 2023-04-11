<?php
$id = $_GET['id'];
include 'includes/Database.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="styles/particulars.css" />
<script src="js/utils.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ben's | Link Details</title>
<link rel="shortcut icon" HREF="images/logo.jpg" />
</head>
<body>
<form><br />
<h2 align="center">Workorder# | Link Details</h2>
<hr width=40% /><br />
<div style="background-color:biege; width:100%; float:right; text-align:right; margin-right:2%">
<span id=pid><b>Workorder: <b><span class=det ><?php echo $id ; ?></span></span><br />
<span id=dte><b>Date : <b><span class=det><?php echo date('d-m-Y'); ?></span></span>
</div><br /><br />
<table id=tblunveri border="=1" width="100%" align="center">
<tr><th colspan="12"><b>Link Details<b></th></tr>
<tr bgcolor="#40FF40"><th>Workorder</th><th>Circuit ID</th><th>Customer Name</th><th>Service Type</th><th>Technology</th><th>Project Manager</th><th>Date Received</th><th>Status</th><th>Comments</th></tr>
<?php
$sql = "select * from entrylog where workorder = '$id'";
$db = new Database($sql);
$resp = $db->execute_query();
while ($row = mysqli_fetch_row($resp)){
echo "<tr><td>$row[0]</td><td>$row[3]</td><td>$row[2]</td><td>$row[7]</td><td>$row[8]</td><td>$row[4]</td><td>$row[5]</td><td>$row[11]</td><td>$row[9]</td></tr>";
	} 
?>
</table><br />
<hr width=90% /><br />
<div align="center" width=30%>
<button a id=btnprint onclick="printer()">Print</button>
<button id=btnpdf>Save As PDF</button>
<button id=btnword>Save As Word</button>
</div>
</form><br /><br /><br />
</body>
</html>
