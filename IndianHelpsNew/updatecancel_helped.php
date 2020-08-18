<?php
session_start();
if(!isset($_SESSION['uid']))
{
	echo "<script>alert('You are Not Signed In');window.location.href='login.php';</script>";
}
$validate = $_SESSION['uid'];
$service = $_GET['id'];

include "dbcon.php";
$query3 = "select * from service_history where task_id = '$service'";
$result3 = mysqli_query($con,$query3) or die(mysqli_error($con));
$row3 = mysqli_fetch_array($result3);
$checkhelper = $row3['helper_id'];
$servicestatus = $row3['stats'];
if($checkhelper != $validate)
{
	echo "<script>alert('Sorry this is not the service you accepted');window.location.href='userdashboard.php';</script>";	
}
else if($servicestatus == 'Processing Phase')
{
	echo "<script>alert('Sorry You Have Not Verified The Task Till Now,you would be allowed to delete the service when you verify the service');window.location.href='userdashboard.php';</script>";	
}
else
{
$randomNumber = rand();
$query = "update task_create set stats = 'Active' , t_otp = '$randomNumber' where tid = '$service'";
$result = mysqli_query($con,$query) or die(mysqli_error($con));
if($result>0)
{
	$query2 = "delete from service_history where task_id = '$service'";
	$result2 = mysqli_query($con,$query2) or die(mysqli_error($con));
	if($result2>0)
	{
		echo "<script>alert('This Booking have been cancelled Successfully');window.location.href='userdashboard.php';</script>";		
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
}
?>