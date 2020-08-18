<?php
$con = mysqli_connect('148.72.232.175:3306',"digibin_test","Test@123") or die(mysqli_error($con));
mysqli_select_db($con,"digibin_test") or die (mysqli_error($con));
?>