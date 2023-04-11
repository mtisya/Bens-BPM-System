<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http:
//www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=itf-8" />
<link rel="stylesheet" href="/benselectronics/menu/menu.css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="menu/menu.js"></script>
</head>
<body>
  <div class="header">
  <a href="#"><img src="images/benslogo1.jpg" alt="Insert Logo Here"
   name="Insert_logo" width="100%" height="100%" id="Insert_logo" 
   style="background-color: #8090AB; display:block;" /></a>
  </div><br /> 
<div align="right" style="margin-right:6%" ><b>Welcome: <?php echo $_SESSION['Admin']; ?>  | <a href="logout.php" ><font color='orange'>Logout</font></a></b></div><br />
<div id="menu">
    <ul class="menu">
	         <li><a href="index.php" class="parent"><span>Home</span></a>
            <div><ul>
                <li><a href="session.php"><span>Set Session</span></a></li>
                <li><a href="addstaff.php"><span>Add Staff</span></a></li>
                <li><a href="staffdetails.php"><span>Staff Details</span></a></li>
            </ul></div>
        </li>
		        <li><a href="#" class="parent"><span>Deployment</span></a>
            <div><ul>
                 <li><a href="entryform.php"><span>Entry Log</span></a></li>
                 <li><a href="deploymentlinks.php"><span>Deployment Links</span></a></li>
                 <li><a href="ltelinks.php"><span>LTE Links</span></a></li>
            </ul></div>
        </li>
        <li><a href="#" class="parent"><span>Surveys</span></a>
            <div><ul>
                <li><a href="surveyform.php"><span>Add Survey</span></a></li>
                <li><a href="surveyreport.php"><span>Survey Report</span></a></li>
            </ul></div>
        </li>
            <li><a href="#" class="parent"><span>Support</span></a>
                <div><ul>
                    <li><a href="entryform.php"><span>Entry Log</span></a></li>
                    <li><a href="supportdetails.php"><span>Support Links</span></a></li>
                    <li><a href="retainer.php"><span>Search Retainer</span></a></li>
                </ul></div>
            </li>
            <li><a href="#" class="parent"><span>Others</span></a>
                <div><ul>
            <li><a href="turnaround.php"><span>TDoc</span></a></li>
            <li><a href="query.php"><span>Search Links</span></a></li>
            <li><a href="downloads.php"><span>Downloads</span></a></li>
                </ul></div>
            </li>
    </ul>
</div>
</body>
</html>