<html>
<head>
<title>Ben's | Search Link/Order</title>
<link rel="shortcut icon" HREF="images/logo.jpg" />
<link rel=stylesheet href="styles/reports.css" />
    <style type="text/css">
        .rowHighlight {
            background-color: darkkhaki;
        }
    </style>
<script src="js/jquery.js"></script>
<script src="js/reports.js"></script>
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
<br />
<div id="topdiv"> <ul>
<li><a href=home.php>Back Home</a> |</li>
<li><a href=javascript:window.print()>Print</a> |</li>
<li><a href=#>Export as Excel</a> | </li>
<li><a href=#>Export as PDF</a> | </li>
<li><a href=#>Export as Word</a></li>
</ul>
</div><br /><br /><br /><br /><br />
<div id=controls>
<label for=cboyear><b>Select Year :</b></label>
<select id=cboyear><option>select year</option></select>
<label for=cbosession><b>Select Session :</b></label>
<select id=cbosession>
<option value=1>1</option>
<option value=2>2</option>
</select>
<input type="button" id=btnfilter value="Filter"/>
<input type="search" placeholder="Enter Search Term" id=txtsearch />
</div>
<?php
include 'includes/Database.php';
$year = "";
$session = "";
$sql1 = "SELECT year,session FROM session";
$db = new Database($sql1);
$resp = $db->execute_query();
while ($row = mysqli_fetch_row($resp)){
	$year = $row[0];
	$session = $row[1];
	}
$sql  = "SELECT *  FROM entrylog LIMIT 20";
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
echo "</table>";
?>
<br />
</body>
</html>