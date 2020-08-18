<!DOCTYPE html>
<html lang="en">
<head>
	<title>IndianHelps - Admin|Login</title>
	<meta charset="utf-8">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</head>
<body style="background: linear-gradient(to right,red, yellow);">	
	<center>
		<div class="container" style="margin-top: 6%;color: blue;">
			<label style="font-size: 250%;">IndianHelps</label>
		</div>
	<div class="container">
		<div  style="background-color: orange;min-height:80px;height: auto;max-width: 40%;margin-top: 3%;">
			<label style="font-size: 200%;color: white;font-family: Times New Roman;">Login</label>			

			<form action="getLogin.php" method="POST" class="form-group">
			<div class="form-inline block" style="margin-left: 14%; margin-bottom: 1%;" >
				<label style="display: inline-block; color: white;font-size: 120%">User Name &nbsp </label>
				<input type="text" name="txtname" class="form-control" style="width: 80%;font-family: Times New Roman;" placeholder="Enter UserName " required="" />				
			</div>
			<div class="form-inline block" style="margin-left: 14%; margin-bottom: 1%;">
				<label style="display: inline-block; color: white;font-size: 120%;">Password &nbsp</label>
				<input type="Password" name="txtpass" class="form-control" style="width: 80%;font-family: Times New Roman;" placeholder="Enter Password" required=""/>
			</div>
			<div class="form-inline block" style="margin-left: 14%; margin-bottom: 4%;">
				<label style="display: inline-block; color: white;font-size: 120%;">Code &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
				<input type="text" name="key" onfocus="(this.type='number')" class="form-control" style="width: 80%;font-family: Times New Roman;" placeholder="Enter Code of login" required=""/>
			</div>
			<input type="submit" name="submit" value="Login" class="btn-primary" style="font-size: 120%;margin-bottom: 5%;color: white;width: 25%;border-radius: 17px;pointer-events: painted; cursor: pointer;" >
		</form>

		</div>		
	</div>
</center>
</body>
</html>