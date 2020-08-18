<?php
if(isset($_POST['submit']))
{
	session_start();
	if(!isset($_SESSION['uid']))
	{
		echo "<script>alert('You Are Not Logged In');window.location.href='login.php';</script>";
	}
	$validate = $_SESSION['uid'];
	$password = $_POST['password'];
	$repassword = $_POST['repassword'];

	include "dbcon.php";
	$query = "update register set pass='$password',re_pass='$repassword' where rid = '$validate'";
	$result = mysqli_query($con,$query) or die(mysqli_error($con));
	if($result>0)
	{
		echo "<script>alert('Password Changed Successfully');window.location.href='index.php';</script>";
	}
	else
	{
		echo "<script>alert('Some Problem Occured');window.location.href='changepassword.php.php';</script>";
	} 
}
else
{
	echo "<script>alert('Please fill the details Properly');window.location.href='login.php';</script>";
}
?>