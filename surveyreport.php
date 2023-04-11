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
<title>Ben's | Survey Report</title>
<link rel="shortcut icon" HREF="images/logo.jpg" />
<link rel="stylesheet" href="styles/formstyle.css" />
    <style type="text/css">
        .rowHighlight {
            background-color: darkkhaki;
        }
    </style>
<script src="js/jquery.js"></script>
<script src="js/report.js"></script>
<script src="js/payment.js"></script>
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
<body ><br />
<div id="topdiv"><ul>
<li><a href="home.php">Back Home</a> | </li>
<li><a href=javascript:window.print()>Print</a> |</li>
<li><a href=#>Export as Excel</a> | </li>
<li><a href=#>Export as PDF</a> | </li>
<li><a href=#>Export as Word</a></li>
</ul></div><br /><br /><br /><br />
<?php
include 'includes/Database.php';
$sql = "SELECT * FROM surveyjobs";
$db2 = new Database($sql);
$resp2 = $db2->execute_query();
echo "<table border=1 id=surveyreport>";
echo "<tr><th colspan=12><h4>Survey Details</h4></th></tr>";
echo "<tr bgcolor=#40FF40><th>Customer Name</th><th>Solution Architect</th><th>Physical Address</th><th>Survey Type</th><th>REQ Code</th><th>Contact Person</th><th>Contact Details</th><th>Field Engineer</th><th>Engineer's Tel</th><th>Date Received</th><th>Findings/Comments</th></tr>";
$num = 0;
while ($row = mysqli_fetch_row($resp2)){
	if ($num%2==0){
		echo "<tr id=even><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td><td>$row[8]</td><td>$row[9]</td><td>$row[10]</td><td>$row[11]</td></tr>";
		}
	else {
		echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td><td>$row[8]</td><td>$row[9]</td><td>$row[10]</td><td>$row[11]</td></tr>";
		}
	$num+=1;
	}
	echo "</table>";
?>
</table><br />
<hr width="80%"/><br />
<br /><br />
</body>
</html>
