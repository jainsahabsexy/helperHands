<?php 
session_start();
if(!isset($_SESSION['log']))
{
	echo "<script>alert('You are not logged in');window.location.href='index.php';</script>";
}
else
{
	$validate = $_SESSION['log'];
	if(isset($_POST['submit']))
	{
		$value = $_POST['hf'];
		include "dbcon.php";
		$query = "select task_id from service_history where task_id = '$value'";
		$result = mysqli_query($con,$query) or die(mysqli_error($con));
		if($result>0)
		{
			$query2 = "delete from service_history where task_id = '$value'";
			$result2 = mysqli_query($con,$query2) or die(mysqli_error($con));
			if($result2>0)
			{
				$query3 = "delete from task_create where tid = '$value'";
				$result3 = mysqli_query($con,$query3) or die(mysqli_error($con));
				if($result3>0)
				{
				echo "<script>alert('Service Deleted');window.location.href='manageservice.php';</script>";
				}
				else
				{
					echo "<script>alert('Some Problem Occured');window.location.href='manageservice.php';</script>";
				}				
			}
			else
			{
				echo "<script>alert('Some Problem Occured');window.location.href='manageservice.php';</script>";
			}
		}
		else
		{
			$query4 = "delete from task_create where tid = '$value'";
			$result4 = mysqli_query($con,$query4) or die(mysqli_error($con));
			if($result4>0)
			{
				echo "<script>alert('service deleted');window.location.href='manageservice.php';</script>";
			}
			else
			{
				echo "<script>alert('Some Problem Occured');window.location.href='manageservice.php';</script>";
			}
 		}
	}
	else
	{
		echo "<script>alert('Please select the service');window.location.href='index.php';</script>";		
	}
}
?>