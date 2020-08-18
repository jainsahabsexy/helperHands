<?php
if(!isset($_POST['submit']))
{
	echo "<script>alert('Fill All The Details');window.location.href='contact.php';</script>";
}
include "dbcon.php";
$name = $_POST['first'];
$email = $_POST['email'];
$query = $_POST['query'];

$query = "insert into userquery values(null,'$name','$email','$query')";
$result = mysqli_query($con,$query) or die(mysql_error($con));
if($result>0)
{
	echo "<script>alert('Thanks For Interactiong with us . we will follow up soon');window.location.href='contact.php';</script>";
}
else
{
	echo "<script>alert('Some Technical Problem occurred');window.location.href='contact.php';</script>";	
}
?>