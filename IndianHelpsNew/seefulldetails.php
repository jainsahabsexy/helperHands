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
$query6 = "select rid from task_create where tid = '$service'";
$result6 = mysqli_query($con,$query6) or die(mysqli_error($con));
$row6 = mysqli_fetch_array($result6);
$parameter = $row6['rid'];
if($parameter != $validate)
{
	echo "<script>alert('Sorry This Task Dont Belong To You');window.location.href='index.php';</script>";
}
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>IndianHelps | See Details</title>
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
			<h3>See Full Details Of Work</h3>
			<p>Details.&nbsp;Helpers Informations.&nbsp;manage</p>
		</div>
	</div>
	<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<span class="breadcrumbs">
				<a href="index.php">Home</a> |
				<span>Work Details</span>
			</span>
		</div>
	</div>
		<!-- Stats -->
<br>
<br>
<?php
include "dbcon.php"; 
$query = "select * from task_create where tid = '$service'";
$result = mysqli_query($con,$query) or die(mysqli_error($con));
while($row = mysqli_fetch_array($result))
{
?>
	<div class="container">
		<div class="single-left serv-bottom">
			<center><h5 class="main-title">Manage Your Services</h5></center>
			<div class="post-media col-md-7">
				<img src="images/g2.jpg" class="img-responsive" alt="">

				<?php
				$query3 = "select spro_id from service_history where task_id = '$service'";
				$result3 = mysqli_query($con,$query3) or die(mysqli_error($con));
				$row3 = mysqli_fetch_array($result3);
				$check = $row3['spro_id'];
				if($check == "")
				{
				?>
				<div class="blog-text">
					<h5>Perform the Required Operations</h5>
					<p><b>I want To Delete my work :</b> &nbsp<a href="updatedelete.php?id=<?php echo $service;?>"><BUTTON style="background-color: darkred;color: white">Delete Work</BUTTON></a></p>
				</div>
			<?php } 
			else{
			?>	
				<div class="blog-text">
					<h5>Perform the Required Operations</h5>
					<p><b>Work Completed Successfully :</b> &nbsp<a href="updatecomplete.php?id=<?php echo $service;?>"><BUTTON style="background-color: green;color: white">Complete Work</BUTTON></a></p><br>
					<p><b>I want To Cancel The Work :</b> &nbsp<a href="cancelationreason.php?id=<?php echo $service;?>"><BUTTON style="background-color: orangered;color: white">Cancel Work</BUTTON></a></p><br>
					<p><b>I want To Delete my work :</b> &nbsp<a href="updatedelete.php?id=<?php echo $service;?>"><BUTTON style="background-color: darkred;color: white">Delete Work</BUTTON></a></p>
				</div>
			<?php } ?>
			</div>
			<div class="all-comments col-md-5">
				<div class="media-grids">
					
					<div class="media">
						<h5>Service Unique Id : <?php echo $row['t_otp'];?></h5><br>
						<p><b>Provide This Unique Id to your Helper so that he can approve your task.</b></p>
					</div>
					<div class="media">
						<h5>Work Address Details</h5>
						<div class="media-body">
							<p><b>Locality : <?php echo $row['loc'];?></b></p>
							<p><b>Sub-Locality : <?php echo $row['subloc'];?></b></p>
							<p><b>Landmark : <?php echo $row['landmark'];?></b></p>
							<p><b>City : <?php echo $row['city'];?></b></p>
						</div>
					</div>
					<div class="media">
						<h5>Work Description</h5>
						<div class="media-body">
							<p><b>Description : <?php echo $row['work_dsc'];?></b></p>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<?php } ?>
	<br>
	<hr>
	<br>
	<?php
	include "dbcon.php";
	$query4 = "select helper_id from service_history where task_id = '$service'";
	$result4 = mysqli_query($con,$query4) or die(mysqli_error($con));
	$row4 = mysqli_fetch_array($result4);
	$data1 = $row4['helper_id'];

	$query5 = "select * from register where rid = '$data1'";
	$result5 = mysqli_query($con,$query5) or die(mysqli_error($con));
	while($row5 = mysqli_fetch_array($result5))
	{
	?>
	<div class="container">
		<div class="single-left serv-bottom">
			<center><h5 class="main-title">Helper Details For This Work</h5></center>
			<div class="post-media col-md-7">
				<img src="images/g3.jpg" class="img-responsive" alt="">
			</div>		
			<div class="all-comments col-md-5">
				<div class="media-grids">
					<div class="media">
						<h5>Personal and Contact Information</h5>
						<div class="media-body">
							<p><b>Name : <?php echo $row5['fname'];?> <?php echo $row5['lname'];?></b></p>
							<p><b>Phone : <?php echo $row5['mobile']?></b></p>
							<p><b>Alternate Phone : <?php echo $row5['alt_mobile'];?></b></p>
							<p><b>Email : <?php echo $row5['email']?></b></p>
						</div>
					</div>
					<div class="media">
						<h5>Points To Note</h5>
						<div class="media-body">
							<p><b>Please demand for the Helpers AADHAR Card and see if the data is appropriate as given to you on the website. We ensure your Safety and Security.</b></p>
							<p><b>After the helper Completes the task Please update the status because the Help would be treated finished when you will update us.</b></p>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<?php } ?>
			
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