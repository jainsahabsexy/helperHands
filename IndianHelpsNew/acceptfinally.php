<?php
session_start();
if(isset($_SESSION['uid']))
{
$validate=$_SESSION['uid'];
$id = $_GET['id'];

include "dbcon.php";
$query4 = "select sid from service_history where task_id = '$id' and helper_id = '$validate' and stats = 'Processing Phase'";
$result4 = mysqli_query($con,$query4) or die(mysqli_error($con));
$row = mysqli_fetch_array($result4);
$var = $row['sid'];
if($var !="")
{
	echo "<script>alert('You Have Already Accepted the Work...Please take Follow up from Service Status Page');window.location.href='userdetails.php?id=$id';</script>";
}
else
{
$query = "select rid from task_create where tid = '$id'";
$result = mysqli_query($con,$query) or die(mysqli_error($con));
$row = mysqli_fetch_array($result);
$spid = $row['rid'];

$query2 = "insert into service_history values(null,'$id','$spid','$validate','Processing Phase')";
$result2 = mysqli_query($con,$query2) or die(mysqli_error($con));
if($result2>0)
{
	$query3 = "update task_create set stats='Processing Phase' where tid = '$id'";
	$result3 = mysqli_query($con,$query3) or die(mysqli_error($con));
	if($result3>0)
	{
		echo "<script>alert('Please Follow Up With The Given Details and Submit The OTP(One Time Password) as soon as Possible');window.location.href='userdetails.php?id=$id';</script>";
	}
}
else
{
	echo "<script>alert('Network Faliure or Some Technical Issue');window.location.href='index.php';</script>";
}

}
}
else
{
	echo "<script>alert('You are Not Logged in');window.location.href='login.php';</script>";
}
?>