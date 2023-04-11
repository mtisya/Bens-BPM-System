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
<title>Ben's | Survey Form</title>
<link rel="shortcut icon" HREF="images/logo.jpg" />
<link rel="stylesheet" href="styles/formstyle.css"/>
<script src="js/jquery.js"></script>
<script src="js/survey.js"></script>
</head>
<body>
  <?php
  include_once("header.php");
  ?>
<br/><br/><br/>
<h3 align="center">Enter Details for New Survey</h3> 
<table id="profile1">
<form method="POST" action="" id="newlinktask">
<tr><td align="center"><label for='customername'>Customer Name*:
<input type='text' name='customername' id='customername' maxlength="30" required/></label></td>
<td align="left"><label for='solutionarchitect'>Solution Architect*: 
<input type='text' name='solutionarchitect' id='solutionarchitect' maxlength="50" required/></label></td></tr>
<tr><td align="center"><label for='physicaladdress'>Physical Address*:
<input type='text' name='physicaladdress' id='physicaladdress' maxlength="30" required/></label></td>
<td align="left"><label for='coordinates'>GPS Coordinates*: 
<input type='text' name='coordinates' id='coordinates' maxlength="50" required/></label></td></tr>
<tr><td align="center"><label for='surveytype'>Survey Type*:
<input type='text' name='surveytype' id='surveytype' maxlength="30" required/></label></td>
<td align="left"><label for='reqcode'>REQ Code*: 
<input type='text' name='reqcode' id='reqcode' maxlength="50" required/></label></td></tr>
<tr><td align="center"><label for='contactperson'>Contact Person*:
<input type='text' name='contactperson' id='contactperson' maxlength="30" required/></label></td>
<td align="left"><label for='contactdetails'>Contact Details*: 
<input type='tel' name='contactdetails' id='contactdetails' maxlength="50" required/></label></td></tr>
<tr><td align="center"><label for='fieldengineer'>Field Engineer*:
<input type='text' name='fieldengineer' id='fieldengineer' maxlength="30" required/></label></td>
<td align="left"><label for='engcontacts'>Engineer Tel*: 
<input type='tel' name='engcontacts' id='engcontacts' maxlength="50" required/></label></td></tr>
<tr><td align="center"><label for='datereceived'>Date Received*:
<input type='date' name='datereceived' id='datereceived' maxlength="30" required/></label></td>
<td><label for='comments'>Findings/Comments*:</td></tr>
<tr><td></td><td align="center"><textarea name="comments" id="comments" rows="4" cols="35"></textarea></label></td></tr>
<fieldset id="notify">test</fieldset>
<td align="right" style="padding-right: 5px;"><button id=btnaddsurvey type='button'>Submit</button></td>
<td align="left" style="padding-right: 10%;"><button type='button' >Clear</button></td>
</form>
</table><br/><br/><br/>
</body>
 <?php
   include_once("footer.php");
  ?>
</html>

