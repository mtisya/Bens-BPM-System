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
<title>Ben's | LTE Report</title>
<link rel="shortcut icon" HREF="images/logo.jpg" />
<link rel="stylesheet" href="styles/formstyle.css" />
    <style type="text/css">
        .rowHighlight {
            background-color: darkkhaki;
        }
    </style>
<script src="js/jquery.js"></script>
<script src="js/report.js"></script>
<script src="js/links.js"></script>
<script src="js/utils.js"></script>
    <script type="text/javascript">
        $(document).ready(
            function () {
                $('tr').hover(
                    function(event) {
                        $(this).addClass('rowHighlight');
                    }
                    , 
                    function(event) {
                        $(this).removeClass('rowHighlight');
                    }
                );
            }
        );
    </script>
</head>
<body><br />
<div id="topdiv"><ul>
<li><a href="home.php">Back Home</a> | </li>
<li><a href=javascript:window.print()>Print</a> |</li>
<li><a href=#>Export as Excel</a> | </li>
<li><a href=#>Export as PDF</a> | </li>
<li><a href=#>Export as Word</a></li>
</ul></div><br /><br /><br /><br />
<div>
<?php
include 'includes/Database.php';
$sql = "SELECT * FROM entrylog WHERE technology = 'LTE' and (status ='WIP' OR status = 'Onhold')";
$db2 = new Database($sql);
$resp2 = $db2->execute_query();
echo "<table border=1 id=report>";
echo "<tr><th colspan=12><h4>Ongoing | WIP Links</h4></th></tr>";
echo "<tr bgcolor=#40FF40 colspan=12><th>Workorder</th><th>Circuit ID</th><th>Customer Name</th><th>Service Type</th><th>Technology</th><th>Project Manager</th><th>Date Received</th><th>Status</th><th>Comments</th><th colspan=12 bgcolor=#40FF40>Close Link/View/Update</th></tr>";
$num = 0;
while ($row = mysqli_fetch_row($resp2)){
	if ($num%2==0){
		echo "<tr id=even><td>$row[0]</td><td>$row[3]</td><td>$row[2]</td><td>$row[7]</td><td>$row[8]</td><td>$row[4]</td><td>$row[5]</td><td>$row[11]</td><td>$row[9]</td><td><a href=javascript:verifyPayments('$row[0]')>Close link</a></td>
	<td><a href=javascript:openWin('deploymentpopup.php?id=$row[0]',990,450)>View/Update</a></td></tr>";
		}
	else {
		echo "<tr><td>$row[0]</td><td>$row[3]</td><td>$row[2]</td><td>$row[7]</td><td>$row[8]</td><td>$row[4]</td><td>$row[5]</td><td>$row[11]</td><td>$row[9]</td><td><a href=javascript:verifyPayments('$row[0]')>Close link</a></td>
	<td><a href=javascript:openWin('deploymentpopup.php?id=$row[0]',990,450)>View/Update</a></td></tr>";
		}
	$num+=1;
	}
echo "</table>";
?>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<hr width="80%"/><br />
<?php
$sql = "SELECT * FROM entrylog WHERE technology = 'LTE' and (status ='Completed' OR status = 'Returned')";
$db2 = new Database($sql);
$resp2 = $db2->execute_query();
echo "<table border=1 id=report>";
echo "<tr><th colspan=12><h4>Completed | Returned Links</h4></th></tr>";
echo "<tr bgcolor=#40FF40 colspan=12><th>Workorder</th><th>Circuit ID</th><th>Customer Name</th><th>Service Type</th><th>Technology</th><th>Project Manager</th><th>Date Received</th><th>Status</th><th>Comments</th><th colspan=12 bgcolor=#40FF40>Close Link/View/Update</th></tr>";
$num = 0;
while ($row = mysqli_fetch_row($resp2)){
    if ($num%2==0){
        echo "<tr id=even><td>$row[0]</td><td>$row[3]</td><td>$row[2]</td><td>$row[7]</td><td>$row[8]</td><td>$row[4]</td><td>$row[5]</td><td>$row[11]</td><td>$row[9]</td><td><a href=javascript:openWin('deploymentpopup.php?id=$row[0]',990,450)>View/Update</a></td></tr>";
        }
    else {
        echo "<tr><td>$row[0]</td><td>$row[3]</td><td>$row[2]</td><td>$row[7]</td><td>$row[8]</td><td>$row[4]</td><td>$row[5]</td><td>$row[11]</td><td>$row[9]</td><td><a href=javascript:openWin('deploymentpopup.php?id=$row[0]',990,450)>View/Update</a></td></tr>";
        }
    $num+=1;
    }
echo "</table>";
?>
</div>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
</body>
</html>
