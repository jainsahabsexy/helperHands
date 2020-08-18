<?php
session_start();
if(!isset($_SESSION['uid']))
{
	echo "<script>alert('You are not Signed in.');window.location.href='login.php';</script>";
}
$validate = $_SESSION['uid'];
$service = $_GET['id'];
?>
<?php
include "dbcon.php";
$query6 = "select helper_id from service_history where task_id = '$service'";
$result6 = mysqli_query($con,$query6) or die(mysqli_error($con));
$row6 = mysqli_fetch_array($result6);
$parameter = $row6['helper_id'];
if($parameter != $validate)
{
	echo "<script>alert('Sorry This Task Dont Belong To You');window.location.href='index.php';</script>";
}
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>IndianHelps | Details</title>
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
			<h3>See Full Details</h3>
			<p>Full Details of your accepted task</p>
		</div>
	</div>
	<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<span class="breadcrumbs">
				<a href="index.php">Home</a> |
				<span>Details</span>
			</span>
		</div>
	</div>
		<!-- Stats -->
<br>
<br>
<div class="section">
	<div class="container">
		<?php
		include "dbcon.php"; 
		$query = "select * from task_create where tid = '$service'";
		$result = mysqli_query($con,$query) or die(mysqli_error($con));
		while($row = mysqli_fetch_array($result))
		{
		?>

		<div class="single-left serv-bottom">
			<h5 class="main-title">Service and its Providers Details
			</h5>
			<div class="post-media col-md-7">
				<img src="images/g1.jpg" class="img-responsive" alt="">
				<div class="blog-text">
					<h5>Work Descriptions</h5>
					<p><?php echo $row['work_dsc'];?></p>
				</div>
			</div>
			<div class="all-comments col-md-5">
				<div class="media-grids">
					<div class="media">
						<h5>Personal Details</h5>
						<div class="media-body">
							<p><?php echo $row['p_name'];?></p>
						</div>
					</div>
					<div class="media">
						<h5>Contact Details</h5>
						<div class="media-body">
							<p><?php echo $row['mobile'];?></p>
							<p><?php echo $row['alt_mobile'];?></p>
							<p><?php echo $row['email'];?></p>
						</div>
					</div>
					<div class="media">
						<h5>Address Details</h5>
						<div class="media-body">
							<p>House/Flat No : <?php echo $row['flatno'];?></p>
							<p>Locality : <?php echo $row['loc'];?></p>
							<p>Sub-Locality : <?php echo $row['subloc'];?></p>
							<p>Landmark : <?php echo $row['landmark'];?></p>
							<p>City : <?php echo $row['city'];?></p>
							<p>Pincode : <?php echo $row['pincode'];?></p>
						</div>
					</div>

				</div>


			</div>
				<br>
				<br>
				<?php
				if($row['stats'] == 'Work Accepted')
				{
					?>
				<center><BUTTON><a href="updatecancel_helped.php?id=<?php echo $service;?>"><b>I Want To Cancel This Booking</b></a></BUTTON></center>
			<?php }
			else
			{
			 ?>
			 <br>
			 <br>
			 <center><p><b>Please Verify The Otp unless You would not be treated as the Helper For this Task. Get the OTP From the service Provider and get it verified as soon as Possible.</b></p>
			<BUTTON><a href="acceptfinally.php?id=<?php echo $service;?>"><b>Verify Otp</b></a></BUTTON></center>
			<div class="clearfix"></div>
		</div>
		<?php }} ?>
	</div>
</div>
		<!-- //Stats -->
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