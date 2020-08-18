<?php
session_start();
if(isset($_POST['Submit']))
{
if(isset($_SESSION['uid']))
{
$validate=$_SESSION['uid'];
	

	include "dbcon.php";

	$wtype = $_POST["t1"];
	$wdesc = $_POST["t2"];
	$date = $_POST["t3"];
	$time = $_POST["t4"];
	$money = $_POST["t5"];
	$wloc = $_POST["t6"];
	$instance = date("d/m/y");

	if ($wloc=="Remote Location")
	{
		$pname = $_POST["t7"];
		$mob = $_POST["t8"];
		$flatno = $_POST["t9"];
		$loc = $_POST["t10"];
		$sloc = $_POST["t11"];
		$landm = $_POST["t12"];
		$state = $_POST["t13"];
		$city = $_POST["t14"];
		$pin = $_POST["t15"];	
	}
	else
	{
		$query = "select * from register where rid = '$validate'";
		$result = mysqli_query($con, $query) or die(mysqli_error($con));
		while($row = mysqli_fetch_array($result))
		{
			$pname = $row["fname"].$row["lname"];
			$mob = $row["mobile"];
			$flatno = $row["flatno"];
			$loc = $row["loc"];
			$sloc = $row["subloc"];
			$landm = $row["landmark"];
			$state = $row["State"];
			$city = $row["city"];
			$pin = $row["pincode"];
		}			
	}

	$randomNumber = rand();
	
	$query1 = "insert into task_create values(null,'$validate','$wtype','$date','$time','$money','$wdesc','$randomNumber','$pname','$mob','$flatno','$loc','$sloc','$landm','$state','$city','$pin','$instance','Active')";
	$result1 = mysqli_query($con, $query1) or die(mysqli_error($con));

	if ($result1>0) 
	{
		echo "<script type='text/javascript'>alert('Thanks For Using IndianHelps...Your Service is created Successfully');window.location.href='index.php';</script>";
	}
	else
	{
		echo "<script type='text/javascript'>alert('Sorry Network Issues or Server Busy');window.location.href='login.php';</script>";		
	}
}
else
{
	echo "<script type='text/javascript'>alert('Please Log in For Creating Service');window.location.href='login.php';</script>";
}
}
else
{
	echo "<script type='text/javascript'>alert('Please Fill All The Details');window.location.href='index.php';</script>";	
}
?>
