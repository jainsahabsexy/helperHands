<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>IndianHelps | Contact Us</title>
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
			<h3>Contact US</h3>
			<p>Send us your query, we will follow up soon.</p>
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
			<h4 class="main-title">contact us</h4>
			<div class="about-inner-main">
				<div class="col-md-6 contact-left">
					<div class="contact-top">
						<h4>address </h4>
						<p>Bhopal, Madhya Pradesh</p>
					</div>
					<div class="contact-bottom">

						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d234700.30415295996!2d77.26580340959153!3d23.199663279842934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397c428f8fd68fbd%3A0x2155716d572d4f8!2sBhopal%2C+Madhya+Pradesh!5e0!3m2!1sen!2sin!4v1550389939900" width="600" height="450" style="border:0" allowfullscreen></iframe>

						
					</div>
				</div>
				<div class="col-md-6 reg-form contact-form-row">
					<h4 class="form-con-txt">Send us your Query</h4>
					<form action="insertquery.php" method="post" class="banner_form contact-inner-form">
						<div class="contact-form-left contact-field1">
							<div class="sec-left">
								<label class="contact-form-text">Name</label>
								<input placeholder="your name " name="first" type="text" required="">
							</div>
							<div class="sec-right">
								<label class="contact-form-text">Email</label>
								<input placeholder="abc@xx.com " name="email" type="email" required="">
							</div>
						</div>
						<div class="contact-form-right contact-field2">
							<input name="submit" type="submit" value="send message">
						</div>
						<div class="clearfix"></div>
						<div class="form-tx contact-field3">
							<label class="contact-form-text">Query</label>
							<textarea placeholder="your query" required="" name="query"></textarea>
						</div>
					</form>
				</div>
				<div class="clearfix"></div>
			</div>
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