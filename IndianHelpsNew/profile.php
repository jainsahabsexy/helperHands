<?php
session_start();
if(!isset($_SESSION['uid']))
{
	echo "<script>alert('Please Log In to see your profile');window.location.href='login.php';</script>";
}
$validate = $_SESSION['uid'];
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>IndianHelps | Profile</title>
	<!-- for-mobile-apps -->
	<link rel="shortcut icon" href="images/presentation1.png" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="A2Z Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //for-mobile-apps -->
	<link rel="stylesheet" type="text/css" href="css/customstyle.css" media="all" />
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="//fonts.googleapis.com/css?family=Noto+Serif:400,400i,700,700i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">

</head>

<body>
	<!-- header -->
	<div class="header">
		<div class="container">

			<div class="logo-nav">
				<div class="logo-nav-left" style="width: 230px;height: 130px">
					<img src="images/presentation1.png" height="100%" width="100%">
				</div>
					<div style="float: right;height: 100px;width: 325px;margin-top: 20px">
						<center><h1 style="color: midnightblue"><i><b>IndianHelps</b></i></h1></center>
						<center><h3 style="color: midnightblue"><i><b>Give Help Get Help</b></i></h3></center>
					</div>

				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
			<!--Navigation Bar-->
			<?php include 'navigation.php';?>
			<!--Navigation Bar Finished-->
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="banner-bg2">
		<div class="banner-info bg3 inner">
				<h3>Profile Details</h3>
				<p>Manage Your Profile</p>
		</div>
	</div>
	<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<span class="breadcrumbs">
				<a href="index.php">Home</a> |
				<span>Profile</span>
			</span>
		</div>
	</div><!-- //header -->
	<!-- //breadcrumbs -->
	<br>
	<br>
	<?php
	include "dbcon.php";
	$query = "select * from register where rid = '$validate'";
	$result = mysqli_query($con,$query) or die(mysqli_error($con));
	while($row = mysqli_fetch_array($result))
	{
	?>
	<div class="container">
		<div class="single-left serv-bottom">
			<h4 class="main-title">Profile Details
			</h4>
			<br>
			<div class="post-media col-md-7">
				<img src="images/g1.jpg" class="img-responsive" alt="">
				<div class="blog-text">
					<h5>Your Profile Details</h5>
					<p><b>You can update you account detrails such as address details and the phone number details and the email id but you cannot update you aadhar card image and your first name and your last name because you have been verified by IndianHelps.</b></p>
				</div>
			</div>
			<div class="all-comments col-md-5">
				<div class="media-grids">
					<div class="media">
						<h5>Personal Details</h5>
						<div class="media-body">
							<p><b>First Name: <?php echo $row['fname'];?></b></p>
							<p><b>Last Name: <?php echo $row['lname'];?></b></p>
							<p><b>Email: <?php echo $row['email'];?></b></p>
							<p><b>Phone No: <?php echo $row['mobile'];?></b></p>
							<p><b>Alt Phone No: <?php echo $row['alt_mobile'];?></b></p>
							</div>
					</div>
					<div class="media">
						<h5>Address Details</h5>
						<div class="media-body">
							<p><b>House No: <?php echo $row['flatno'];?></b></p>
							<p><b>Locality: <?php echo $row['loc'];?></b></p>
							<p><b>Sub-Locality: <?php echo $row['subloc'];?></b></p>
							<p><b>Landmark: <?php echo $row['landmark'];?></b></p>
							<p><b>State: <?php echo $row['State'];?></b></p>
							<p><b>City: <?php echo $row['city'];?></b></p>
							<p><b>Pincode: <?php echo $row['pincode'];?></b></p>
						</div>
					</div>
					<div class="media">
						<h5>Edit Profile</h5>
						<div class="media-body">
							<p><a href="editprofile.php"><button>Edit Profile</button></a></p>
							<p><a href="changepassword.php"><button>Change Password</button></a></p>
							</div>
					</div>
				</div>


			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<?php } ?>
	<!-- footer -->
	
	<?php
	include "footer.php";
	?>

	<!--//footer  -->
	<!-- js -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- //js-->
	<!--search-bar-->
	<script src="js/main.js"></script>
	<!--//search-bar-->
	<!-- start-smooth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->
	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<script src="js/SmoothScroll.min.js"></script>
	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="js/bootstrap.js"></script>
</body>

</html>