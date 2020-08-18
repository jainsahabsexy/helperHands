<?php
session_start();
if(!isset($_SESSION['uid']))
{
	echo "<script>alert('You are not Signed in.');window.location.href='login.php';</script>";
}
$validate = $_SESSION['uid'];
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>IndianHelps | User Dashboard</title>
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
	<!-- required-js-files-->
	<!--clients slider  -->
	<link href="css/owl.carousel.css" rel="stylesheet">
	<!-- //clients slider  -->
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
	<div class="banner-bg2">
		<div class="banner-info bg3 inner">
			<h3>User Dashboard</h3>
			<p>complete.&nbsp;cancel.&nbsp;manage</p>
		</div>
	</div>
	<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<span class="breadcrumbs">
				<a href="index.php">Home</a> |
				<span>User Dashboard</span>
			</span>
		</div>
	</div>
	<!-- Stats -->
	<br>
	<br>
<div class="container">
		<div class="single-left serv-bottom">
			<center><h5 class="main-title">Manage Your Services Here</h5></center>
			<div class="post-media col-md-7">
				<img src="images/g8.jpg" class="img-responsive" alt="">
				<div class="blog-text">
					<h5>Get Every Information and Track Your Service</h5>
					<p>Here You will see all the actions taken on your task by the People around you. You can see the Unique Work Code given to you for every work Creation. When You will give your work code to the Helper then only your work will be considered accepted by the Helper. Take The Follow ups From Here and Get Your Work Done.</p>
				</div>
			</div>
			<div class="all-comments col-md-5">
				<div class="media-grids">
					<div class="media">
						<h5>1.<a href="createdworks.php"><u>Works You Created</u></a></h5><br>
						<h5>2.<a href="acceptedworks.php"><u>Works You Accepted</u></a></h5>
					</div>
					<div class="media">
						<h5>Work Created</h5>
						<div class="media-body">
							<p>These are the work which you have created. Here you will see your work status and you will get the details of the person who has accepted the work. If You Share your Work Unique Code to the Helper, then only your work would be followed up by the Helper.</p>
						</div>
					</div>
					<div class="media">
						<h5>Help Provided</h5>
						<div class="media-body">
							<p>Here you can see the details of the works you have accepted to provide Help. You can see that what works you have completed or cancelled due to some reasons. You need to Get the Unique Work Code from the service provider and verify so as to confirm the person that you are going to help. </p>
						</div>
					</div>

				</div>


			</div>
			<div class="clearfix"></div>
		</div>
	</div>
		<!-- //Stats -->
	<!-- footer -->
	
	<?php
	include "footer.php";
	?>

	<!--//footer  -->
	<!--//footer  -->
	<!-- js -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- //js-->
	
	<!--search-bar-->
	<script src="js/main.js"></script>
	<!--//search-bar-->
	<!-- clients slider-->
	<script src="js/owl.carousel.js"></script>
	<script>
		$(document).ready(function () {
			$("#owl-demo").owlCarousel({
				items: 1,
				lazyLoad: true,
				autoPlay:true,
				navigation: true,
				navigationText: false,
				pagination: true,
			});
		});
	</script>
	<!-- //clients slider-->
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
	<!-- Numscroller -->
	<script src="js/numscroller-1.0.js"></script>
	<!-- //Numscroller -->
	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="js/bootstrap.js"></script>
</body>

</html>