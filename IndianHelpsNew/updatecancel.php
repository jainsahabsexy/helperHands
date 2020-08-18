<?php
session_start();
if(!isset($_SESSION['uid']))
{
	echo "<script>alert('You are Not Signed In');window.location.href='login.php';</script>";
}
if(!isset($_POST['submit']))
{
	echo "<script>alert('Please select the service');window.location.href='userdashboard.php';</script>";	
}
$validate = $_SESSION['uid'];
$service = $_POST['hf'];
$reason = $_POST['reason'];
include "dbcon.php";
$query3 = "select spro_id from service_history where task_id = '$service'";
$result3 = mysqli_query($con,$query3) or die(mysqli_error($con));
$row3 = mysqli_fetch_array($result3);
$check = $row3['spro_id'];
if($check == "")
{
	echo "<script>alert('Sorry Your Service is not alloted to anyone');window.location.href='userdashboard.php';</script>";	
}
$query4 = "select rid from task_create where tid = '$service'";
$result4 = mysqli_query($con,$query4) or die(mysqli_error($con));
$row4 = mysqli_fetch_array($result4);
$checkpoint = $row4['rid'];

if($check != $checkpoint)
{
	echo "<script>alert('This is not your service');window.location.href='userdashboard.php';</script>";
}

$randomNumber = rand();
$query = "update task_create set stats = 'Active' , t_otp = '$randomNumber' where tid = '$service'";
$result = mysqli_query($con,$query) or die(mysqli_error($con));
if($result>0)
{
	$query2 = "delete from service_history where task_id = '$service'";
	$result2 = mysqli_query($con,$query2) or die(mysqli_error($con));
	if($result2>0)
	{
		echo "<script>alert('Your Service have been cancel Successfully');window.location.href='userdashboard.php';</script>";		
	}
	else
	{
		echo "<script>alert('Some Technical Issues Have Been Found...Try Again Later');window.location.href='userdashboard.php';</script>";
	}
}
else
{
	echo "<script>alert('Some Technical Issues Have Been Found...Try Again Later');window.location.href='userdashboard.php';</script>";	
}
?>