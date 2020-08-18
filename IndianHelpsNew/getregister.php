<?php
if(!isset($_POST['submit']))
{
	echo "<script>alert('Fill All The Details');window.location.href='register.php';</script>";
}
include "dbcon.php";
@$fname = $_POST['fname'];
@$lname = $_POST['lname'];
@$mobile = $_POST['mobile'];
@$altmobile = $_POST['altmobile'];
@$dob = $_POST['dob'];
@$gender = $_POST['gender'];
@$email = $_POST['email'];
@$password = $_POST['password'];
@$repassword = $_POST['repassword'];
@$iow = $_POST['iow'];
@$flat = $_POST['flat'];
@$locality = $_POST['locality'];
@$subloc = $_POST['subloc'];
@$landmark = $_POST['landmark'];
@$state = $_POST['state'];
@$city = $_POST['city'];
@$pincode = $_POST['pincode'];
@$aadharphoto = $_FILES['aadphoto']['name'];
//Insertion into database
$target='userimage/'.$aadharphoto;
//echo $target;
//die;
$query = "insert into register values(null,'$fname','$lname','$dob','$gender','$aadharphoto','$mobile','$altmobile','$email','$password','$repassword','$flat','$subloc','$locality','$landmark','$state','$city','$pincode','$iow','Pending')";
//echo $query;
//die;
$ext=strtolower(pathinfo($aadharphoto,PATHINFO_EXTENSION));
	if ($ext=="jpg"||$ext=="png"||$ext=="jpeg"||$ext=="gif") 
	{
	$moved = move_uploaded_file($_FILES['aadphoto']['tmp_name'],$target);
	$result = mysqli_query($con,$query) or die(mysqli_error($con));
	if($moved)
	{
		echo "<script type='text/javascript'>alert('Your Registration Request Would be approved within 24 hrs');window.location.href = 'index.php';</script>";
	}
	else
	{
		echo "<script type='text/javascript'>alert('Sorry some error were Found');window.location.href = 'index.php';</script>";
	}
}
?>