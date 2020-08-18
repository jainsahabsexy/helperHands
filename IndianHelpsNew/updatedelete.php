<?php
session_start();
if(!isset($_SESSION['uid']))
{
	echo "<script>alert('You are Not Signed In');window.location.href='login.php';</script>";
}
$validate = $_SESSION['uid'];
$service = $_GET['id'];

include "dbcon.php";

$query11 = "select service_id from service_trackrecord where service_id = '$service'";
$result11 = mysqli_query($con,$query11) or die(mysqli_error($con));
$row11 = mysqli_fetch_array($result11);
$verify = $row11['service_id'];
if($verify != "")
{
	echo "<script>alert('Your have already deleted your Service... Thanks For Using IndianHelps');window.location.href='userdashboard.php';</script>";
}

$query3 = "select spro_id from service_history where task_id = '$service'";
$result3 = mysqli_query($con,$query3) or die(mysqli_error($con));
$row3 = mysqli_fetch_array($result3);
$check = $row3['spro_id'];
if($check == "")
{
	$query8 = "select * from task_create where tid = '$service'";
	$result8 = mysqli_query($con,$query8) or die(mysqli_error($con));
	$row8 = mysqli_fetch_array($result8);

	$serviceid = $row8['tid'];
	$servicepro = $row8['rid'];
	$status = "Deleted";
	$helperid = "No Actions";

	$query9 = "insert into service_trackrecord values(null,'$serviceid','$helperid','$servicepro','$status')";
	$result9 = mysqli_query($con,$query9) or die(mysqli_error($con));
	if($result9>0)
	{
			$query10 = "update task_create set stats = 'Deleted' where tid = '$service'";
			$result10 = mysqli_query($con,$query10) or die(mysqli_error($con));
			if($result10>0)
			{
				echo "<script>alert('Your work was Deleted Successfully... Thanks For Using IndianHelps');window.location.href='userdashboard.php';</script>";
			}
			else
			{
				echo "<script>alert('Some Technical Problems Are there...Please Try After Some Time');window.location.href='userdashboard.php';</script>";
			}		
	}
	else
	{
		echo "<script>alert('Some Technical Problem Has Occured');window.location.href='userdashboard.php';</script>";
	}
}
else
{
$query4 = "select rid from task_create where tid = '$service'";
$result4 = mysqli_query($con,$query4) or die(mysqli_error($con));
$row4 = mysqli_fetch_array($result4);
$checkpoint = $row4['rid'];

if($check != $checkpoint)
{
	echo "<script>alert('This is not your service');window.location.href='userdashboard.php';</script>";
}

$query = "update task_create set stats = 'Deleted' where tid = '$service'";
$result= mysqli_query($con,$query) or die(mysqli_error($con));
if($result>0)
{
	$query2 = "select * from service_history where task_id = '$service'";
	$result2 = mysqli_query($con,$query2) or die(mysqli_error($con));
	$row2 = mysqli_fetch_array($result2);

	$taskid = $row2['task_id'];
	$servicepro = $row2['spro_id'];
	$helperid = $row2['helper_id'];
	$status = 'Deleted';

	$query5 = "insert into service_trackrecord values(null,'$taskid','$helperid','$servicepro','$status')";
	$result5 = mysqli_query($con,$query5) or die(mysqli_error($con));
	if($result5>0)
	{
		$query6 = "delete from service_history where task_id = '$service'";
		$result6 = mysqli_query($con,$query6) or die(mysqli_error($con));
		if($result6>0)
		{
				echo "<script>alert('Your Task Was Deleted Successfully... Thanks For Using IndianHelps');window.location.href='userdashboard.php';</script>";
			
		}
		else
		{
			echo "<script>alert('Some Technical Problems Are there...Please Try After Some Time');window.location.href='userdashboard.php';</script>";
		}
	}
	else
	{
		echo "<script>alert('Some Technical Problems Are there...Please Try After Some Time');window.location.href='userdashboard.php';</script>";		
	}
}
else
{
	echo "<script>alert('Some Technical Problems Are there...Please Try After Some Time');window.location.href='userdashboard.php';</script>";	
}
}
?>