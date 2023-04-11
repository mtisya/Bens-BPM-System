<?php
// Inialize session
session_start();
// Check, if user is already signed in, then jump to secured page
if (!isset($_SESSION['Admin'])) {
header('Location: index.php');
}
?>
<!DOCTYPE html>
<head>
<title>Ben's | New Link Form</title>
<link rel="shortcut icon" HREF="images/logo.jpg" />
<link rel="stylesheet" href="styles/formstyle.css"/>
<script src="js/jquery.js"></script>
<script src="js/addlink.js"></script>
</head>
<body>
  <?php
  include_once("header.php");
  ?>
<br/><br/><br/>
<h3 align="center">Fill in Details for New Link | Task</h3> 
<table id="profile1">
<form method="POST" action="" id="newlinktask">
<tr><td align="center"><label for='siebelcircuit'>Siebel Circuit ID*:
<input type='text' name='siebelcircuit' id='siebelcircuit' maxlength="30" required/></label></td>
<td align="left"><label for='projectmanager'>Project Manager*: 
<input type='text' name='projectmanager' id='projectmanager' maxlength="50" required/></label></td></tr>
<tr><td align="center"><label for='customername'>Customer Name*:
<input type='text' name='customername' id='customername' maxlength="30" required/></label></td>
<td align="left"><label for='accountmanager'>Account Manager*: 
<input type='text' name='accountmanager' id='accountmanager' maxlength="50" required/></label></td></tr>
<tr><td align="center"><label for='physicaladdress'>Physical Address*:
<input type='text' name='physicaladdress' id='physicaladdress' maxlength="30" required/></label></td>
<td align="left"><label for='bandwidth'>Bandwidth*: 
<input type='text' name='bandwidth' id='bandwidth' maxlength="50" required/></label></td></tr>
<tr><td align="center"><label for='servicetype'>Service Type*:
<input type='text' name='servicetype' id='servicetype' maxlength="30" required/></label></td>
<td align="left"><label for='accessmedia'>Access Medium*: 
<input type='text' name='accessmedia' id='accessmedia' maxlength="50" required/></label></td></tr>
<tr><td align="center"><label for='contactperson'>Contact Person*:
<input type='text' name='contactperson' id='contactperson' maxlength="30" required/></label></td>
<td align="left"><label for='contactdetails'>Contact Details*: 
<input type='text' name='contactdetails' id='contactdetails' maxlength="50" required/></label></td></tr>
<tr><td align="center"><label for='status'>Status*:
<input type='text' name='status' id='status' maxlength="30" required/></label></td>
<td align="left"><label for='datereceived'>Date Received*: 
<input type='date' name='datereceived' id='datereceived' maxlength="50" required/></label></td></tr>
<tr><td align="center"><label for='datecompleted'>Date Completed*:
<input type='date' name='datecompleted' id='datecompleted' maxlength="30" required/></label></td>
<td align="left"><label for='comments'>Comments*: 
<input type='text' name='comments' id='comments' maxlength="50" required/></label></td></tr>
<fieldset id="notify">test</fieldset>
<td align="right" style="padding-right: 5px;"><button id=btnaddlink type='button'>Submit</button></td>
<td align="left" style="padding-right: 10%;"><button type='button' >Clear</button></td>
</form>
</table><br/><br/><br/>
</body>
 <?php
   include_once("footer.php");
  ?>
</html>

