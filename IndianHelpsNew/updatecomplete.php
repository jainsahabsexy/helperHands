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
$checkvalidate = $row11['service_id'];
if($checkvalidate != "")
{
	echo "<script>alert('Your have already completed your Service... Thanks For Using IndianHelps');window.location.href='userdashboard.php';</script>";
}

$query3 = "select spro_id from service_history where task_id = '$service'";
$result3 = mysqli_query($con,$query3) or die(mysqli_error($con));
$row3 = mysqli_fetch_array($result3);
$check = $row3['spro_id'];
if($check == "")
{
	echo "<script>alert('Your Task is not alloted to Anyone');window.location.href='userdashboard.php';</script>";	
}
$query4 = "select rid from task_create where tid = '$service'";
$result4 = mysqli_query($con,$query4) or die(mysqli_error($con));
$row4 = mysqli_fetch_array($result4);
$checkpoint = $row4['rid'];

if($check != $checkpoint)
{
	echo "<script>alert('This is not your service');window.location.href='userdashboard.php';</script>";
}

$query = "update task_create set stats = 'Completed' where tid = '$service'";
$result= mysqli_query($con,$query) or die(mysqli_error($con));
if($result>0)
{
	$query2 = "select * from service_history where task_id = '$service'";
	$result2 = mysqli_query($con,$query2) or die(mysqli_error($con));
	$row2 = mysqli_fetch_array($result2);

	$serviceid = $row2['sid'];
	$taskid = $row2['task_id'];
	$servicepro = $row2['spro_id'];
	$helperid = $row2['helper_id'];
	$status = $row2['stats'];

	$query5 = "insert into service_trackrecord values(null,'$taskid','$helperid','$servicepro','Completed')";
	$result5 = mysqli_query($con,$query5) or die(mysqli_error($con));
	if($result5>0)
	{
		$query6 = "delete from service_history where task_id = '$service'";
		$result6 = mysqli_query($con,$query6) or die(mysqli_error($con));
		if($result6>0)
		{
				echo "<script>alert('Your Task Was Complted Successfully... Thanks For Using IndianHelps');window.location.href='userdashboard.php';</script>";
			
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
?>