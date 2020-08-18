<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>HelperHands| Home</title>
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
	<div class="header">
		<div class="container">

			<div class="logo-nav">
				<div class="logo-nav-left" style="width: 230px;height: 130px">
					<img src="images/presentation1.png" height="100%" width="100%">
				</div>
					<div style="float: right;height: 100px;width: 325px;margin-top: 20px">
						<center><h1 style="color: midnightblue"><i><b>IHelperHands</b></i></h1></center>
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
	</div>	<!-- banner -->
	<div class="banner-silder">
		<div id="JiSlider" class="jislider">
			<ul>
				<li>
					<div class="banner-top banner-top1">
						<div class="container">
							<div class="banner-info info2">
								<h3>one stop indoor services</h3>
								<p>let us do it for you.</p>

							</div>
						</div>
					</div>
				</li>


				<li>
					<div class="banner-top banner-top2">
						<div class="container">
							<div class="banner-info bg3 info2">
								<h3>one click can resolve all needs</h3>
								<p>fast.&nbsp;secured.&nbsp;appropriate</p>
							</div>

						</div>
					</div>
				</li>
				<li>
					<div class="banner-top banner-top3">
						<div class="container">
							<div class="banner-info bg3">
								<h3>Property Maintenance Services</h3>
								<p>one click does it all.</p>
							</div>

						</div>
					</div>
				</li>
			</ul>
		</div>
		<!-- //banner -->
		<!-- banner bottom -->
		<div class="banner-btm">
			<div class="container">
				<div class="banner-bottom-main">
					<div class="col-md-4 banner-btmg1">

						<div class="form-text">
							<h3>Looking for a Handyman?</h3>
							<p>We Provide Help for your Every Need!</p>
							<img src="images/f1.png" alt="" />
						</div>
						<script type="text/javascript">
							function myfun()
							{
								var a= document.getElementById("Mobile").value;
								if (a.length<10) {
									document.getElementById("message").innerHTML="** Please Enter 10 digit mobile number **";
									return false;
								}
								var b= document.getElementById("pin").value;
								if (b=="") {
									document.getElementById("code").innerHTML="** This field is Required**";
									return false;
								}
								if (b.length<6) {
									document.getElementById("code").innerHTML="** Invalid Pincode **";
									return false;
								}
								var c= document.getElementById("stateId").value;
								if (c=="Select State") {
									document.getElementById("state").innerHTML="** This field is Required**";
									return false;
                                  }
                                  var d= document.getElementById("cityId").value;
								if (d=="Select City") {
									document.getElementById("cit").innerHTML="** This field is Required**";
									return false;
                                  }
                                  var e= document.getElementById("land").value;
                                  if (e=="") {
                                  	document.getElementById("mark").innerHTML="** This field is Required**";
									return false;
                                  }
                                  var f=document.getElementById("sub").value;
                                  if (f=="") {
                                  document.getElementById("loc").innerHTML="** This field is Required **";
                                  return false;
						 	        }
						 	        var g=document.getElementById("no").value;
                                  if (g=="") {
                                  document.getElementById("flat").innerHTML="** This field is Required **";
                                  return false;
						 	        }
						 	        var h=document.getElementById("loca").value;
                                  if (h=="") {
                                  document.getElementById("lity").innerHTML="** This field is Required **";
                                  return false;
						 	        }
						 	        var i=document.getElementById("name").value;
						 	        if (i=="") {
						 	        	document.getElementById("nam").innerHTML="** This field is Required **";
						 	        	return false;
						 	        }

							}
						</script>
						<form action="insert_service.php" method="POST" class="banner_form" onsubmit="return myfun()">
							<div class="form-select sec-right">
								<label class="contact-form-text">Work Type</label>
								<select name="t1">
									<option>Indoor</option>
									<option>Outdoor</option>
									<option>Travel</option>
									<option>Household</option>
									<option>Education</option>
									<option>Technical</option>
								</select>
							</div>
							<div class="form-tx">
								<label class="contact-form-text">Work Description</label>
								<textarea name="t2" placeholder="Describe your Work" required=""></textarea>
							</div>

							<div class="sec-left">
								<label class="contact-form-text">Service Date</label>
								<input name="t3" placeholder="Work Date" class="textbox-n" type="text" name="date" onfocus="(this.type='date')"  id="date">
							</div>
							<div class="sec-left">
								<label class="contact-form-text">Service Time</label>
								<input name="t4" placeholder="Work Time" class="textbox-n" type="text" name="time" onfocus="(this.type='time')"  id="time">
							</div>
							<div class="sec-right">
								<label class="contact-form-text">Money</label>
								<input name="t5" placeholder="Payable Amount for Work" name="money" type="number" min="0" required="">
							</div>

							<div class="form-select sec-right">
								<label class="contact-form-text">Work Location</label>
								<select onchange="fun()" id="selectme" name="t6">
									<option>---- SELECT ----</option>
									<option>Registered Address</option>
									<option>Remote Location</option>
								</select>
							</div>

							<!--Address JQuery-->
								<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
								<script>
									function fun()
									{
										var select = $('#selectme').val();
										if(select == 'Remote Location')
										{
											$('#manas').show();
										}
										else
										{
											$('#manas').hide();
										}
									}
								</script>
							<!--Address JQuery-->

							<div id="manas" style="display: none;">
								<br>
								<div class="form-text">
							<h3>Share Location Details</h3>
							<p>We need your Remote Address to give Help</p>
							</div>
						
								<div class="sec-right">
								<label class="contact-form-text">Person Name</label>
								<span id="nam" style="color: red;"></span>
								<input placeholder="Persons Name" name="t7" id="name" type="text">
								</div>

								<div class="sec-right">
								<label class="contact-form-text">Mobile No</label>
								<span id="message" style="color: red;"></span>
								<input placeholder="Mobile No" id="Mobile" min="0" name="t8" type="number">
								</div>

								<div class="sec-right">
								<label class="contact-form-text">Flat/House No</label>
								<span id="flat" style="color: red;"></span>
								<input placeholder="Flat / House No" name="t9" id="no" type="text">
								</div>

								<div class="sec-right">
								<label class="contact-form-text">Locality</label>
								<span id="lity" style="color: red;"></span>
								<input placeholder="Locality" name="t10" id="loca" type="text">
								</div>

								<div class="sec-right">
								<label class="contact-form-text">Sub-Locality</label>
								<span id="loc" style="color: red;"></span>
								<input placeholder="Sub-Locality" name="t11" id="sub" type="text">
								</div>

								<div class="sec-right">
								<label class="contact-form-text">Nearest Landmark</label>
								<span id="mark" style="color: red;"></span>
								<input placeholder="Famous Place Near You" name="t12" id="land" type="text">
								</div>


                                <div class="form-select sec-right">
								<label class="contact-form-text">State</label>
								<span id="state" style="color: red;"></span>
								<input type="text"  id="countryId" value="IN"/>
								<select name="t13" class="states order-alpha" id="stateId">
								    <option value="Select State">Select State</option>
								</select>
								</div>

								<div class="form-select sec-right">
								<label class="contact-form-text">City</label>
								<span id="cit" style="color: red;"></span>
								<select name="t14" class="cities order-alpha" id="cityId">
							    	<option value="Select City">Select City</option>
								</select>
								</div>


								<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
								<script src="//geodata.solutions/includes/statecity.js"></script>

								<div class="sec-right">
								<label class="contact-form-text">Pincode<span style="color: red">**</span></label>
								<span id="code" style="color: red;"></span>
								<input placeholder="Pincode" name="t15" id="pin" type="number">
								</div>		
							</div>
							<input type="Submit" value="Submit" name="Submit">
						</form>
					</div>
					<div class="col-md-8 banner-btm-grid2">
						<div class="col-md-4 banner-grid2">
							<div class="banner-subg1">
								<h3>Household Works</h3>
								<p><b>Get help in any kind of household works at your workplace such as Dusting, Sweeping, Vacuuming, Feeding pets, Doing laundry, Cleaning bathrooms.</b></p>
								<span class="fa fa-cog" aria-hidden="true"></span>
								
							</div>
							<div class="banner-subg1">
								<h3>Indoor Works</h3>
								<p><b>Works that don't reqiure skills : Washing bedding, Mopping floors, Watering plants, Weeding the garden, Taking out the trash, Wash the car.</b></p>
								<span class="fa fa-check-square-o" aria-hidden="true"></span>
							</div>

						</div>
						<div class="col-md-4 banner-grid2">
							<div class="banner-subg1">
								<h3>Outdoor Works</h3>
								<p><b>Create or Accept any Outdoor Works that don't require any skills such as Shampooing the carpets, Winterize the house, Prune trees and shrubs.</b></p>
								<span class="fa fa-yelp" aria-hidden="true"></span>
							</div>
							<div class="banner-subg1">
								<h3>Travel/Education</h3>
								<p><b>You can Provide travel related helps such as Drops and Pick-Ups. You can Provide educational helps such as you can help a person in making Projects etc.</b></p>
								<span class="fa fa-gg" aria-hidden="true"></span>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<!-- //banner bottom -->
		<!-- about -->
		<div class="about-main">
			<div class="col-md-4 about-left">
				<div class="about-main-bg text-center">
					<h4 class="about-title">Why</h4>
					<h4 class="sub">
						<span>c</span>hoose
						<span>u</span>s?</h4>
				</div>
			</div>
			<div class="col-md-8 about-bottom-g1">
				<h4>One Stop Solution for your every kind of needs</h4>
				<!-- <h4>get easy home repairs and upgrades with professional home service providers</h4> your complete home solution.-->
				<div class="about-grid">
					<div class="about-bottom-right">
						<div class="abouthome-grid">
							<span class="hi-icon hi-icon-archive fa fa-check"> </span>
						</div>
						<div class="about-bottom">
							<h5>Get Help</h5>
							<p>Create Your Service and Get help At your Desired Location.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="about-bottom-right">
						<div class="abouthome-grid">
							<span class="hi-icon hi-icon-archive  fa fa-book"> </span>
						</div>
						<div class="about-bottom">
							<h5>Give Help</h5>
							<p>Select a service of Your Choice and Help the person in need.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class=" about-bottom-right">
						<div class="abouthome-grid">
							<span class="hi-icon hi-icon-archive fa fa-photo"> </span>
						</div>
						<div class="about-bottom">
							<h5>Flexibility</h5>
							<p>Create, Cancel, Delete, complete Your Work without Hesitation.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class=" about-bottom-right">
						<div class="abouthome-grid">
							<span class="hi-icon hi-icon-archive fa fa-briefcase"> </span>
						</div>
						<div class="about-bottom">
							<h5>24*7 support</h5>
							<p>How to use the Platform? Don't Worry we are here to guide you.</p>
							</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="abt-img">
					<img src="images/a1.png" alt="" class="img-responsive" />
				</div>
				<div class="clearfix"></div>
			</div>

			<div class="clearfix"></div>
		</div>
	</div>
	<!-- //about -->
	<!--  about bottom -->
	<div class="section">
		<div class="container">
			<div class="main-bottom">
				<div class="col-md-6 col-sm-6 mb-left">

				</div>
				<div class="col-md-6 col-sm-6 mb-right">
					<h4>service you can trust</h4>
					<p>Choose best service according to your wish.</p>
					<a href="plan.php">view all services</a>
				</div>

			</div>
		</div>
	</div>
	<!--  //about bottom -->
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
