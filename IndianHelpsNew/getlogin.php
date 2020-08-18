<?php session_start();
	if(isset($_POST["submit"]))
	{
$username=$_POST['email'];
$password=$_POST['password'];
$status = 'Approved';
include "dbcon.php";
$query="select * from register";
$result=mysqli_query($con,$query) or die(mysqli_error($con));
$q="select count(*) from register";
$res=mysqli_query($con,$q) or die(mysqli_error($con));
$count=mysqli_num_rows($result) or die(mysqli_error($con));
$i=1;
while($row=mysqli_fetch_array($result) or die(mysqli_error($con)))
{
	if($username==$row["email"] && $password==$row["pass"] && $status==$row['approval'])
	{
		$_SESSION['uid'] = $row["rid"];
		echo "<script type='text/javascript'>alert('Login Successful');window.location.href='index.php';</script>";
		break;
	}
	if($i==$count)
	{
		echo "<script type='text/javascript'>alert('Login Unsuccessful');window.location.href='index.php';</script>";
	}		
	$i++;
	
}
}
else
{
	echo "<script type='text/javascript'>alert('Please Fill the information');window.location.href='index.php';</script>";
}
?>