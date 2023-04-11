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
<title>Ben's | Home Page</title>
<link rel="shortcut icon" HREF="images/logo.jpg" />
<link rel="stylesheet" href="styles/formstyle.css">
</head>
<body>
  <?php
  include_once("header.php");
  ?>
<br/><br/><br/><br/><br/>
<fieldset border=1 style="width: 70%; margin-left: 15%;">
<div id="homediv">
<p><u><b><a href="home.php" title="Admin Home Page" target="_self">Admin Module</a></b></u><br><br>
<em>With this System, Ben's Electronics Ltd Management Team Can Control and Manage System Data/Information, Generation of Different Reports and Doawnloads of Forms.</em></p>
</div>
</fieldset><br/><br/>
</body>
 <?php
   include_once("footer.php");
  ?>
</html>