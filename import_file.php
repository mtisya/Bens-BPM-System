<?php
include("includes/connection.php");
if(isset($_POST["submit_file"]))
{
 $file = $_FILES["file"]["tmp_name"];
 $file_open = fopen($file,"r");
 while(($csv = fgetcsv($file_open, 3000, ",")) !== false)
 {
  $entry = $csv[0];
  $clientname = $csv[1];
  $circuitid = $csv[2];
  $date = $csv[3];
  $contact = $csv[4];
  $servicetype = $csv[5];
  $technology = $csv[6];
  $jobdescription = $csv[7];
  $execution = $csv[8];
  $status = $csv[9];
  $ipaddress = $csv[10];
  $physicallocation = $csv[11];
  $buildingname = $csv[12];
  $buildingid = $csv[13];
  $workorder = $csv[14];
 $sql="INSERT INTO entrylog VALUES('$workorder','$entry','$clientname','$circuitid','$date','$contact','$servicetype','$technology','$jobdescription','$execution','$status','$ipaddress','$physicallocation','$buildingname','$buildingid')" or die (mysql_error());
$insert= mysqli_query($link,$sql);
    if ($insert)
    {
    header("location:additem.php");
}
    else
     {
    echo "<br>Could not import file, Correct all Errors<br>" . mysqli_error($link);
    } 
}
}
?>