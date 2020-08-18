<?php
session_start();
if(isset($_SESSION['uid']))
{
	echo "<script>alert('You Are Already Logged In');window.location.href='index.php';</script>";
}
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>IndianHelps | Login</title>
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
	<!-- breadcrumbs -->
	<!-- //breadcrumbs -->
	<!-- track order -->

	<div class="section">
		<div class="container">
			<div class="register-top">
				<div class="col-md-5 col-sm-5 register-left">
					<img src="images/order.jpg" alt="" class="img-responsive" />
				</div>
				<div class="col-md-7 col-sm-7 register-right">
					<form action="getlogin.php" method="POST" class="banner_form">
						<h6>Login/Sign Up</h6>
						<div class="sec-right">
							<label class="contact-form-text">Email</label>
							<input placeholder="abc@xx.com " name="email" type="email" required="">
						</div>
						<div class="sec-left">
							<label class="contact-form-text">Password</label>
							<input placeholder="Your Password" name="password" type="password" required="">
						</div>
						<input type="submit" value="Submit" name="submit"/>
					</form>
					<a href="forgotpassword.php">Forgot Password?</a>&nbsp&nbsp
					<a href="register.php">New User Register Here</a>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //track order -->

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