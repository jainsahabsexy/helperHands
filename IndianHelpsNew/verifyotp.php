<?php
if(isset($_POST['submit']))
{
	$otp = $_POST['otp'];
	$taskid = $_POST['hf'];
	include "dbcon.php";
	$query = "select t_otp from task_create where tid = '$taskid'";
	$result = mysqli_query($con,$query) or die(mysqli_error($con));
	$row = mysqli_fetch_array($result);
	$check = $row['t_otp'];

	if($check == $otp)
	{
		$query1 = "update task_create set stats = 'Work Accepted' where tid = '$taskid'";
		$result1 = mysqli_query($con,$query1) or die(mysqli_error($con));
		if($result1>0)
		{ 
			$query2 = "update service_history set stats = 'Work Accepted' where task_id = '$taskid'";
			$result2 = mysqli_query($con,$query2) or die(mysqli_error($con));
			if($result2>0)
			{
			echo "<script>alert('OTP Verified...Please Follow Up with the Given Details and Complete The Task');window.location.href='userdetails.php?id=$taskid';</script>";
			}
			else
			{
				echo "<script>alert('Verification Failed...Some Technical Issues are being faced by the website');window.location.href='userdetails.php?id=$taskid';</script>";
			}
		}
		else
		{
			echo "<script>alert('Verification Failed...Some Technical Issues are being faced by the website');window.location.href='userdetails.php?id=$taskid';</script>";
		}		
	}
	else
	{
		echo "<script>alert('OTP Not Verified...Please Re-Enter with the Appropriate Details');window.location.href='userdetails.php?id=$taskid';</script>";	
	}
}
else
{
	echo "<script>alert('Please Enter The OTP');window.location.href='index.php';</script>";
}
?>