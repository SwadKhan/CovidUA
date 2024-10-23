<?php
include("DBconnect2.php");
if(isset($_POST['submit'])&& isset($_POST['location'])&& isset($_POST['no_recovery'])&& isset($_POST['no_covid'])&& isset($_POST['district']))
{
	
	
	$location=$_POST['location'];
	$no_recovery=$_POST['no_recovery'];
	$district=$_POST['district'];
	$no_covid=$_POST['no_covid'];
	
	
	$query="insert info_red_area (info_id,location,no_recovery, no_covid,district) values ((select max(info_id) from information),'$location', '$no_recovery', '$no_covid','$district')";
    if(mysqli_query($con,$query)){
		echo " Data uploaded";
		header("Location:infoarea.php");
	}
	else{
		echo" Data not uploaded";
	echo mysqli_error($con);
	}
		
	
	



}
?>