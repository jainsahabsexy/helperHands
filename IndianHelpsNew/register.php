<?php
session_start();
if(isset($_SESSION['uid']))
{
	echo "<script>alert('You are already registered');window.location.href='index.php';</script>";
}
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>IndianHelps | Register</title>
	<!-- for-mobile-apps -->
	<link rel="shortcut icon" href="images/presentation1.png" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="a2z Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script> 
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<!-- //for-mobile-apps -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!--banner slider  -->
	<link href="css/JiSlider.css" rel="stylesheet">
	<!-- //banner-slider -->
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
	<!-- //header -->
	<!-- banner -->
	<div class="banner-silder">
		<div id="JiSlider" class="jislider">
			<ul>
				<li>
					<div class="banner-top banner-top1">
						<div class="container">
							<div class="banner-info info2">
								<h3>one stop home services</h3>
								<p>let us do it for you.</p>

							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="banner-top banner-top2">
						<div class="container">
							<div class="banner-info bg3 info2">
								<h3>one click repair service</h3>
								<p>repair.&nbsp;improve.&nbsp;maintain</p>
							</div>

						</div>
					</div>
				</li>
				<li>
					<div class="banner-top banner-top3">
						<div class="container">
							<div class="banner-info bg3">
								<h3>Property Maintenance Services</h3>
								<p>one call does it all.</p>
							</div>

						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>	
		<!-- //banner -->
		<!-- banner bottom -->
		<div class="banner-btm">
			<div class="container">
				<div class="banner-bottom-main">
					<div class="col-md-4 banner-btmg1">

						<div class="form-text">
							<center><h3>Personal Details</h3></center>
							</div>
							<script type="text/javascript">
                                function myfun(){
                                var a=document.getElementById("mobilenumber").value;
                                if (a.length<10){
                                   document.getElementById("message").innerHTML="** Please fill 10 digit mobile number**";
                                    return false;
                                    } 
                                    var b=document.getElementById("mobile").value;
                                if (b.length<10){
                                   document.getElementById("mes").innerHTML="** Please fill 10 digit mobile number**";
                                    return false;
                                    } 
                                     var c=document.getElementById("pass").value;
                                if (c.length<8){
                                   document.getElementById("pas").innerHTML="** Please enter strong password grater then 8 digit**";
                                    return false;
                                    } 
                                     var d=document.getElementById("password").value;
                                if (d!=c){
                                   document.getElementById("passw").innerHTML="** Password do not match **";
                                    return false;
                                    } 
                                     var e=document.getElementById("code").value;
                                if (e.length<6){
                                   document.getElementById("pin").innerHTML="** Please enter Valid Pincode**";
                                    return false;
                                    } 
                                     
                                }
							</script>
						<form action="getregister.php" method="post" class="banner_form" enctype="multipart/form-data" onsubmit='return myfun()'>
							<div class="sec-left col-md-6">
								<label class="contact-form-text">First Name</label>
								<input placeholder="Your First Name" name="fname" type="text" required="">
							</div>
							<div class="sec-left col-md-6">
								<label class="contact-form-text">Last Name</label>
								<input placeholder="Your Last Name" name="lname" type="text" required="">
							</div>
							<div class="sec-left col-md-6">
								<label class="contact-form-text">Mobile no.</label>
								<span id="message" style="color: red"></span>
								<input placeholder="Your Mobile No" name="mobile" id="mobilenumber" type="number" required="">
							</div>
							<div class="sec-left col-md-6">
								<label class="contact-form-text">Alternate Mobile no.</label>
								<span id="mes" style="color: red"></span>
								<input placeholder="Your Mobile No" id="mobile" name="altmobile" type="number" required="">
							</div>
							<div class="sec-left col-md-6">
								<label class="contact-form-text">Date Of Birth</label>
								<input placeholder="DOB" name="dob" type="date" required="">
							</div>
							<div class="form-select sec-right col-md-6">
								<label class="contact-form-text">Your Gender</label>
								<select name="gender">
									<option>Male</option>
									<option>Female</option>
									<option>Others</option>
								</select>
							</div>
							<div class="col-md-12">
							<br>
							<br>
							<center><h3>Verification Details</h3></center>
							<br>
							</div>
							<div class="sec-left col-md-6">
								<label class="contact-form-text">Email</label>
								<input placeholder="abc@xx.com " name="email" type="email" required="">
							</div>
							<div class="sec-left col-md-6">
								<label class="contact-form-text">Password</label>
								<span id="pas" style="color: red;"></span>
								<input placeholder="Your Password" name="password" id="pass" type="password" required="">
							</div>
							<div class="sec-left col-md-6">
								<label class="contact-form-text">Re-Enter Password</label>
								<span id="passw" style="color: green;"></span>
								<input placeholder="Re-Enter Password" name="repassword" id="password" type="password" required="" >
							</div>
							<div class="sec-left col-md-6">
								<label class="contact-form-text">Aadhar Photo</label>
								<input data-toggle="tooltip" title="We demand your Aadhar Photo because our website deals with your personal identity and it needs to be accurate." data-placement="bottom" placeholder="Aadhar Card Photo" name="aadphoto" type="file" required="">
							</div>

							<script>
							$(document).ready(function(){
							  $('[data-toggle="tooltip"]').tooltip();   
							});
							</script>


							<div class="form-select sec-right col-md-6">
								<label class="contact-form-text">Interest of Work</label>
								<select name="iow">
									<option>---- SELECT ----</option>
									<option>Indoor</option>
									<option>Outdoor</option>
									<option>Travel</option>
									<option>Household</option>
									<option>Technical</option>
								</select>
							</div>
							<div class="col-md-12">
							<br>
							<br>
							<center><h3>Address Details</h3></center>
							<br>
							</div>
							
							<div class="sec-left col-md-6">
								<label class="contact-form-text">Flat/House No</label>
								<input placeholder="Enter Flat/House No" name="flat" type="text" required="">
							</div>
							<div class="sec-left col-md-6">
								<label class="contact-form-text">Locality</label>
								<input placeholder="Enter Your Locality" name="locality" type="text" required="">
							</div>
							<div class="sec-left col-md-6">
								<label class="contact-form-text">Sub-Locality</label>
								<input placeholder="Enter Sub-Locality" name="subloc" type="text" required="">
							</div>
							<div class="sec-left col-md-6">
								<label class="contact-form-text">Nearest Landmark</label>
								<input placeholder="Enter Nearest Landmark" name="landmark" type="text" required="">
							</div>
							<div class="form-select sec-right col-md-6">
								<label class="contact-form-text">State</label>
								<input type="hidden" name="country" id="countryId" value="IN"/>
								<select name="state" class="states order-alpha" id="stateId">
								    <option value="">Select State</option>
								</select>
							</div>
							<div class="form-select sec-right col-md-6">
								<label class="contact-form-text">City</label>
								<select name="city" class="cities order-alpha" id="cityId">
							    	<option value="">Select City</option>
								</select>
							</div>
							<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
							<script src="//geodata.solutions/includes/statecity.js"></script>
							<div class="sec-left col-md-6">
								<label class="contact-form-text">Pincode</label>
								<span id="pin" style="color: green;"></span>
								<input placeholder="Enter your Pincode" id="code" name="pincode" type="number" required="">
							</div>
							<center>
							<div class="col-md-12">
							<input type="submit" name="submit" value="Submit">
							</div>
							</center>
						</form>
					</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<!-- //banner bottom -->
		
	<!-- footer -->
	
	<?php
	include "footer.php";
	?>

	<!--//footer  -->
	<!-- js -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- //js-->
	<!--banner-slider-->
	<script src="js/JiSlider.js"></script>
	<script> 
		$(window).load(function () {
			$('#JiSlider').JiSlider({
				color: '#fff',
				start: 1,
				reverse: false
			}).addClass('ff')
		})
	</script>
	<!-- //banner-slider -->
	<!--search-bar-->
	<script src="js/main.js"></script>
	<!--//search-bar-->
	<!-- start-smooth-scrolling -->
	<script  src="js/move-top.js"></script>
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
	<script  src="js/SmoothScroll.min.js"></script>
	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="js/bootstrap.js"></script>
</body>

</html>