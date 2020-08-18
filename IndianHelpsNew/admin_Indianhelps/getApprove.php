<?php
	include "dbcon.php";
	if(isset($_POST["submit"])){
		$app = $_POST["txtapp"];
		$id = $_POST["hf"];
		if($app == "Not Approved"){
			$comm = $_POST["comm"];
			$query = "delete from register WHERE rid='$id'";
		}
		else{
			if($app=="Approved"){
				$query = "update register SET approval='$app' WHERE rid='$id'";
			}
		}
		$result = mysqli_query($con,$query) or die(mysqli_error($con));
		if($result>0){
			echo "<script type='text/javascript'>alert('Request get Approved Completely');window.location.href='managereg.php';</script>";
		}else{
			header('location : managereg.php');
		}
	}
?>