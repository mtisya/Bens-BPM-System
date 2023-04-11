<?php 
// Inialize session
session_start();
// Check, if user is already login, then jump to secured page
if (!isset($_SESSION['Admin'])) {
header('Location: index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Ben's | Downloads Links</title>
<link rel="shortcut icon" HREF="images/logo.jpg" />
<link rel="stylesheet" href="styles/formstyle.css">
</head>
<body>
  <?php
  include_once("header.php");
  ?>
<br/><br/><br/><br/><br/>
<fieldset border=1 style="width: 70%; margin-left: 15%;">
<div style="margin-left: 5%;"><h3><u>Downloads Links</u></h3></div>
<div id="homedi">
<ul><p><b><em>
  <li><a href="files/E1 - SIP Checklist.pdf">1. E1 | SIP CHECKLIST.pdf</a></li><br/><br/>
  <li><a href="files/Leave application form.xlsx">2. LEAVE APPLICATION FORM.xlsx</a></li><br/><br/>
  <li><a href="files/MICROWAVE SURVEY REPORT TEMPLATE.xls">3. MICROWAVE SURVEY REPORT TEMPLATE.xlsx</a></li><br/><br/>
  <li><a href="files/All Media Survey Form.docx">4. All MEDIA SURVEY FORM TEMPLATE.docx</a></li><br/><br/>
  <li><a href="files/WIFI SURVEY REPORT TEMPLATE.docx">5. WIFI SURVEY REPORT TEMPLATE.docx</a></li><br/><br/>
  <li><a href="files/WIFI SURVEY - TEMPLATE.doc">6. WIFI SURVEY TEMPLATE.doc</a></li><br/><br/>
  <li><a href="files/Bens access letter.docx">7. ACCESS LETTER TEMPLATE.docx</a></li>
</em></b></p></ul>
</div>
</fieldset><br/><br/>
</body>
 <?php
   include_once("footer.php");
  ?>
</html>