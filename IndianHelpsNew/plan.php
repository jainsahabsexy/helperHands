<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>IndianHelps | Available Works</title>
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
	</div><!-- //header -->
	<div class="banner-bg2">
		<div class="banner-info bg3 inner">
				<h3>Choose Best Service Of Your Choice</h3>
				<p>Find.&nbsp;Help.&nbsp;Earn</p>
		</div>
	</div>
	<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<span class="breadcrumbs">
				<a href="index.php">Home</a> |
				<span>Available Works</span>
			</span>
		</div>
	</div>


	<br><br><br><br><br><br><br>
	<div class="banner-btm">
			<div class="container">
				<div class="banner-bottom-main">
					<div class="col-md-4 banner-btmg1">

						<div class="form-text">
							<center><h3>Choose the city in which you want to Work</h3></center>
							</div>
							<script type="text/javascript">
								function ajaxFunction(){
									var city = document.getElementById('selectcity').value;
									var queryString = "?city="+city;
								window.location.href="getplan.php"+queryString;
								}
							</script>
						<form action="getregister.php" method="post" class="banner_form" enctype="multipart/form-data">
							<div class="form-select sec-right col-md-12">
								<label class="contact-form-text">Select City</label>
								<select name="gender" onchange="ajaxFunction()" id="selectcity">
									<option>Select the helping location...</option>
									<?php
								include "dbcon.php";
								$query1 = "select distinct city from task_create";
								$result1 = mysqli_query($con,$query1) or die(mysqli_error($con));
								while($row1 = mysqli_fetch_array($result1))
								{
								?>
									<option><?php echo $row1['city'];?></option>
									<?php } ?>
									</select>
							</div>
							<br>
							<br>
							</form>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>


	<!-- plan -->

	<div class="section plans">
		<div class="container">
			<h4 class="main-title">Works Available</h4>
			<div class="services-main">
				<!-- maintenance essential plan -->

				<?php
				session_start();
				if(isset($_SESSION['uid']))
				{				
				$validate=$_SESSION['uid'];
				include "dbcon.php";
				$query = "select * from task_create where rid !='$validate' and stats = 'Active' ORDER BY tid DESC";
				$result = mysqli_query($con,$query) or die(mysqli_error($con));
				}
				else
				{
				include "dbcon.php";
				$query = "select * from task_create where stats = 'Active' ORDER BY tid DESC";
				$result = mysqli_query($con,$query) or die(mysqli_error($con));
				}
				while($row = mysqli_fetch_array($result))
				{
				?>
				
				
				<div class="col-md-4 col-sm-4 plan-grid1">
					<div class="pricing_grid_content">
						<h5><?php echo $row['work_type'];?></h5>
						<h3>
							<sup>₹</sup>
							<span class="counter agile_counter"><?php echo $row['money'];?>/</span>
								<label>For this work</label>
						</h3>
						<ul class="w3_count">
							<li>
								<span class="fa fa-check" aria-hidden="true"></span>
								<p><b>Work Date : <?php echo $row['task_date'];?></b></p>
							</li>
							<li>
								<span class="fa fa-check" aria-hidden="true"></span>
								<p><b>Work Time : <?php echo $row['task_time'];?></b></p>
							</li>
							<li>
								<span class="fa fa-check" aria-hidden="true"></span>
								<p><b>Work City : <?php echo $row['city'];?></b></p>
							</li>		
						</ul>
						<a href="workdesc.php?id=<?php echo $row['tid'];?>">See Full Description</a>
					</div>
					<br>
				</div>
			<?php } ?>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //plan -->

<!-- footer -->
	
	<?php
	include "footer.php";
	?>

	<!--//footer  -->	<!-- js -->
	
	

	<!--ModalBox-->
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