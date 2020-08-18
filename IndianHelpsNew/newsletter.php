<?php
$email = $_POST['email'];
if($email == "")
{
	echo "<script>alert('Please Enter Your Email');window.location.href='index.php';</script>";
}
include "dbcon.php";
$query = "insert into newsletter values(null,'$email')";
$result = mysqli_query($con,$query) or die(mysqli_error($con));
if($result>0)
{
	echo "<script>alert('Thanks....We will Update you With all our informations');window.location.href='index.php';</script>";
}
else
{
	echo "<script>alert('Some Problem Occured');window.location.href='index.php';</script>";
}
?>