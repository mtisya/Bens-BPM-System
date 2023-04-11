<?php
include 'includes/connection.php';
if(isset($_POST['submit'])){
	$customid = $_POST['customid'];

	$checkid = "SELECT * FROM workid ORDER BY customid DESC LIMIT 1";
	$checkresult = mysqli_query($link, $checkid);

	if(mysqli_num_rows($checkresult)>0){

		if($row = mysqli_fetch_array($checkresult)){

			$workid = $row['customid'];
			$get_numbers = str_replace("BES", "", $workid);
			$id_increase = $get_numbers+1;
			$get_string = str_pad($id_increase, 4,0, STR_PAD_LEFT);
			$wid = "BES".$get_string;

			$insert_query = "INSERT INTO workid VALUES (null,'$wid')";
			$results = mysqli_query($link, $insert_query);
			if($results){
				echo "$wid";
				}
				else{
					echo "0";
				}
		}
	}
 	else{
 		$wid = "BES0001";
 		$insert_query = "INSERT INTO workid VALUES (null,'$wid')";
 		$results = mysqli_query($link, $insert_query);
		if($results){
			echo "Workid added successfuly". '<br>'. "Work ID is: ".$wid;
			}
			else{
				echo "error". mysqli_error($link);
			}

 	}

}
?>