<?php
// Inialize session
session_start();
// Check, if user is already login, then jump to secured page
if (!isset($_SESSION['Admin'])) {
header('Location: index.php');
}
//connection to db
require_once("includes/connection.php");

  if(isset($_POST['submit']))
	{
	$fname= $_POST['firstname'];
	$lname= $_POST['lastname'];
	$id_no= $_POST['id_no'];
	$email= $_POST['email'];
	$username= $_POST['username'];
	$mobileno = $_POST['mobileno'];
	
//Insert Into Database
$sql="INSERT INTO staff (id,firstname,lastname,id_no,email,username,mobileno )
VALUES(null,'$fname','$lname','$id_no','$email','$username','$mobileno')"or die (mysql_error());
 $insert= mysqli_query($link,$sql);
	if ($insert)
		echo "<h2>Registration Successful!</h2>";
		echo "<p>Congratulations <b>$username</b>, your registration was successful. You may now login.</p>";
	{
	header("location:index.php");	 
	}
}
?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Ben's | Add Staff</title>
<link rel="shortcut icon" HREF="images/logo.jpg" />
<link rel="stylesheet" href="/hostel1/admin/styles/formstyle.css" />
<script src="js/jquery.js"></script>
<script src="js/jquery.nyroModal.custom.js"></script>
<script src="js/login.js"></script>
</head>
<body>
  <?php
  include_once("header.php");
  ?>
 <br/><br/><br/>
<fieldset id="addstaff"><br />
<legend>Add New Staff</legend>
<form action="addstaff.php" method="post">
<label for="firstname">Firstname*:</label> 
<input type="text" name="firstname" id="firstname" required />
<label for="lastname">Lastname*:</label>
<input type="text" name="lastname" id="lastname" required />
<label for="id_no">ID Number*:</label>
<input type="text" name="id_no" id="id_no" required />
<label for="email">Email*: </label>
<input type="email" name="email" id="email" required /> 
<label for="username">Username*:</label>
<input type="text" name="username" id="username" required />
<label for="mobileno">Mobile Number*:</label>
<input type="text" name="mobileno" id="mobileno" required /><br /><br />
<input type="submit" name="submit" id="submit" value="Submit" align="middle" />
</form>
</fieldset><br /><br />
</body>
 <?php
   include_once("footer.php");
  ?>
</html>
