<?php
session_start();
if(!isset($_SESSION['uid']))
{ 
	echo "<script type='text/javascript'>alert('Get Yourself Logged In First');window.location.href='login.php';</script>";
}
$validate=$_SESSION['uid'];
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>IndianHelps | UserDetails</title>
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
	</div><!-- //header -->
	<div class="banner-bg2 ">
		<div class="banner-info bg3 inner">
			<h3>one click repair service</h3>
			<p>repair.&nbsp;improve.&nbsp;maintain</p>
		</div>
	</div>
	<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<span class="breadcrumbs">
				<a href="index.html">Home</a> |
				<span>Contact Us</span>
			</span>
		</div>
	</div>
	<!-- //breadcrumbs -->
	<!-- contact -->

	
	<div class="section banner-single">
		<div class="container">
			<?php
			include "dbcon.php";
			$id = $_GET['id'];
			$query3 = "select helper_id from service_history where task_id = '$id'";
			$result3 = mysqli_query($con,$query3) or die(mysqli_error($con));
			$row3 = mysqli_fetch_array($result3);
			$var1 = $row3['helper_id'];
			if($var1 != $validate)
			{
				echo "<script>alert('If You Want To Access The Details...You Have To Accept The Task');window.location.href='plan.php';</script>";
			}
			$query = "select rid from task_create where tid = '$id'";
			$result = mysqli_query($con,$query) or die(mysqli_error($con));
			$row = mysqli_fetch_array($result);
			$var = $row['rid'];

			$query2 = "select * from register where rid = '$var'";
			$result2 = mysqli_query($con,$query2) or die(mysqli_error($con));
			while($row2 = mysqli_fetch_array($result2))
			{
			?>

			<h4 class="main-title">Details of The Service Provider</h4>
			<div class="about-inner-main">
				<div class="col-md-6 contact-left">
					<div class="contact-top">
						<h4>Personal Details</h4>
						<p><b><?php echo $row2['fname']?> <?echo $row2['lname'];?></b></p>
						<p></p>
					</div>
					<br>
					<div class="contact-top">
						<h4>Contact Details</h4>
						<p><b>Mobile No : <?php echo $row2['mobile']?>, &nbsp&nbspAlternate No : <?echo $row2['alt_mobile'];?></b></p>
						<p><b>Email : <?php echo $row2['email'];?></b></p>
					</div>
					<br>
					<div class="contact-top">
						<h4>Address Details</h4>
						<p><b>House/Flat No : <?php echo $row2['flatno']?>,&nbsp&nbspSub-Locality : <?php echo $row2['subloc']?>, &nbsp&nbspLocality : <?php echo $row2['loc']?>, &nbsp&nbspLandmark : <?php echo $row2['landmark']?>, &nbsp&nbspCity : <?php echo $row2['city']?>, &nbsp&nbspState : <?php echo $row2['State']?>, &nbsp&nbspPincode : <?php echo $row2['pincode']?></b></p>
					</div>
					<br>
				</div>

				<?php
				$query4 = "select stats from task_create where tid = '$id'";
				$result4 = mysqli_query($con,$query4) or die(mysqli_error($con));
				$row4 = mysqli_fetch_array($result4);
				$checkstatus = $row4['stats'];
				if($checkstatus != 'Work Accepted')
				{
				?>
				<div class="col-md-6 reg-form contact-form-row">
					<h4 class="form-con-txt">Verify The Task Code.</h4>
					 <label class="contact-form-text">Please Take The Follow Ups from the Service Provider and Get The Task Code and Get it verified from here so that we can assign you this Work.</label>
					<form action="verifyotp.php" method="post" class="banner_form contact-inner-form">
						<div class="contact-form-left contact-field1">
							<div class="sec-right">
								<label class="contact-form-text">Enter Task Code</label>
								<input placeholder="Please Enter Task Code " name="otp" type="number" required="">
							</div>
						</div>
						<div class="contact-form-right contact-field2">
							<input type = "hidden" name="hf" value="<?php echo $id;?>"/>
							<input type="submit" name="submit" value="Verify"/>
						</div>
						<div class="clearfix"></div>
					</form>
				</div>
			<?php }
			else
			{?>
				<div class="col-md-6 reg-form contact-form-row">
					<h4 class="form-con-txt">Your OTP is verified Successfully.</h4>
					 <label class="contact-form-text">Please Take The Follow Ups from the Service Provider and get the task done.</label>
					 <label class="contact-form-text">Please carry your AADHAR card with you.It can be asked to you at the work time to validate you are the correct person who has accepted the work.</label>
					 <label class="contact-form-text">Please Ask your service provider to change the task status from Accepted to Completed. As the Task Get Completed it would be counted as a successfull Work.</label>
					<label class="contact-form-text">It Would be your responsibilty to take the money from the service provider after you complete the task.</label>
				</div>
			 
				<div class="clearfix"></div>
			</div>
		<?php }} ?>
		</div>
	</div>
	
	<!-- contact -->
	<div class="section app-head">
		<div class="container">
			<div class="col-md-4 col-sm-4 app-mobile">
				<img src="images/mobile.png" alt="" class="img-responsive" />
			</div>
			<div class="col-md-8 col-sm-8 app-main">
				<h6>home services at your
					<span>finger tips!</span>
				</h6>
				<div class="app-form">
					<p>get the SMS link to download free app </p>
					<form action="#" method="post" class="banner_form">
						<div class="sec-left">
							<input placeholder="Enter your mobile #" name="first name" type="text" required="">
						</div>
						<input type="submit" value="get the app">
						<div class="clearfix"></div>
					</form>
				</div>
				<ul class="app-links">
					<li>
						<a href="#">
							<img src="images/1.png" alt="">
						</a>
					</li>
					<li>
						<a href="#">
							<img src="images/2.png" alt="">
						</a>
					</li>
				</ul>

			</div>
			<div class="clearfix"></div>
		</div>
	</div>
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
	<script  src="js/easing.js"></script>
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
	<!-- smooth-scrolling-of-move-up-->
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