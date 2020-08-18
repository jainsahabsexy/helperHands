<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>IndianHelps | Work Description</title>
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
	<div class="banner-bg2">
		<div class="banner-info bg3 inner">
			<h3>one click repair service</h3>
			<p>repair.&nbsp;improve.&nbsp;maintain</p>
		</div>
	</div>
	<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<span class="breadcrumbs">
				<a href="index.php">Home</a> |Work Description
			</span>
		</div>
	</div>
	<!--single -->
	<div class="section">
		<div class="container">

			<?php
			$id = $_GET['id'];
			include "dbcon.php";
			$query="select * from task_create where tid = '$id'";
			$result = mysqli_query($con,$query) or die(mysqli_error($con));
			while($row = mysqli_fetch_array($result))
			{
			?>

			<div class="single-left">
				<h5 class="main-title">Work Type : <?php echo $row['work_type'];?> 
				</h5>
				<div class="post-media col-md-7">
					<img src="images/g8.jpg" class="img-responsive" alt="">
					<div class="blog-text">
						<h5>Full Work Description</h5>
						<p><?php echo $row['work_dsc'];?></p>
					</div>
				</div>
				<div class="all-comments col-md-5">
					<div class="media-grids">
						<div class="media">
							<h5>Work Date and Time</h5>
							<div class="media-body">
								<p>Date : <?php echo $row['task_date'];?></p>
								<p>Time : <?php echo $row['task_time'];?></p>
								<!--<a href="projects.html"> View Other Tasks </a>-->
							</div>
						</div>
						<div class="media">
							<h5>Money Alloted for Work</h5>
							<div class="media-body">
								<p><?php echo $row['money'];?> Rupees</p>
								<!--<a href="projects.html"> view more </a>-->
							</div>
						</div>
						<div class="media">
							<h5>Address of Work Place</h5>
							<div class="media-body">
								<p>Locality : <?php echo $row['loc'];?></p>
								<p>Sub-Locality : <?php echo $row['subloc'];?></p>
								<p>Landmark : <?php echo $row['landmark'];?></p>
								<p>City : <?php echo $row['city'];?></p>
								<p>Pincode : <?php echo $row['pincode'];?>
								<!--<a href="projects.html"> view more </a>-->
							</div>
						</div>

					</div>


				</div>
				<br>
				<br>
				<center><BUTTON><a href="acceptfinally.php?id=<?php echo $row['tid'];?>"><b>Accept The Task Finally</b></a></BUTTON></center>
				<div class="clearfix"></div>
			</div>
			<?php } ?>
		</div>	
	</div>		
	<!-- //single -->
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