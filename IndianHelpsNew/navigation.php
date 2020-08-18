<div class="logo-nav-left1">
				<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">Menu
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>

					<div class="collapse navbar-collapse" style="position: sticky;z-index: 1" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav">
							<li>
								<a href="index.php">Home</a>
							</li>
							<li>
								<a href="plan.php">Give Help</a>
							</li>
							<li>
								<a href="services.php">Services</a>
							</li>
							<li>
								<a href="userdashboard.php">Work Status</a>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">About<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="about.php" style="color: yellow; text-align: center;"><b>About Us</b></a></li>
									<li><a href="contact.php" style="color: yellow; text-align: center;"><b>Contact Us</b></a></li>
									</ul>
							</li>
							<li>
								<a href="terms.php">Our Terms</a>
							</li>
							<?php
							session_start();
							if(isset($_SESSION['uid']))
							{
							$validate=$_SESSION['uid'];
							if($validate !="")
							{
							?>	
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Account <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="profile.php" style="color: yellow; text-align: center;"><b>Profile</b></a></li>
									<li><a href="logout.php" style="color: yellow; text-align: center;"><b>Logout</b></a></li>
									</ul>
							</li>
							<?php }} else{ ?>
							<li>
								<a href="login.php">Login/Signup</a>
							</li>
						<?php } ?>
							<li class="s-bar">
								<div class="search">
									<input class="search_box" type="checkbox" id="search_box">
									<label class="icon-search" for="search_box">
										<span class="fa fa-search" aria-hidden="true"></span>
									</label>
									<div class="search_form">
										<form action="#" method="post">
											<input type="search" name="Search" placeholder=" " />
											<input type="submit" value="Search">
										</form>
									</div>
								</div>
							</li>
						</ul>
					</div>

				</nav>
			</div>