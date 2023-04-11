<?php
// Inialize session
session_start();
// Check, if user is already login, then jump to secured page
if (!isset($_SESSION['Admin'])) {
header('Location: index.php');
}
require_once("includes/connection.php");
?>
<?php
  if(isset($_POST['submit']))
	{
	//Insert Into Database
	$stockcode=$_POST['stockcode'];
	$qty1=$_POST['qty1'];
	$um1=$_POST['um1'];
	$description=$_POST['description'];
	$up1=$_POST['up1'];
	$value=$_POST['value'];
	$workorder2=$_POST['workorder2'];
$sql="INSERT INTO orderitems VALUES(null,'$stockcode','$qty1','$um1','$description','$up1','$value','$workorder2')" or die (mysql_error());
$insert= mysqli_query($link,$sql);
	if ($insert)
	{
	header("location:turnaround.php");
}
	else
     {
	echo "<br>Correct all Errors<br>" . mysqli_error($link);
	} 
}
?>