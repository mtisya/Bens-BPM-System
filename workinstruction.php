<?php
// Inialize session
session_start();
// Check, if user is already login, then jump to secured page
if (!isset($_SESSION['Admin'])) {
header('Location: index.php');
}


require_once("includes/connection.php");
  if(isset($_POST['submit']))
	{
	//Insert Into Database
	$date=$_POST['date1'];
	$mhr=$_POST['mhr'];
	$pax=$_POST['pax'];
	$artisan=$_POST['artisan'];
	$instruction=$_POST['instruction'];
	$rate=$_POST['rate'];
	$amount1=$_POST['amount1'];
	$id=$_POST['workorder1'];
$sql="INSERT INTO instructions VALUES(null,'$date','$mhr','$pax','$artisan','$instruction','$rate','$amount1','$id')" or die (mysql_error());
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