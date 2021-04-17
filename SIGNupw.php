<?php
include('inter.php');
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="images/tick.png" sizes="1111">
	<title>Signup</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/regstyle.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<link rel="stylesheet" href="'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'  ">

</head>
<body>

	<div class="head">
		<header>
			&#x1F4DA;FunctionController 
		</header>
	</div>
	<nav class="topnav">
			<span><a href="login.html">LOGIN</a></span>
		</nav>
<div class="conatiner">
	<div class="register-left">
		<img src="images/avtr26.png" id="ncc-img">
	</div>
	<form action="signup_db.php">
	<div class="register-right">
		<div class="r-r-in">
			<h2 class="animated bounceInLeft">Registration Portal</h2>
		</div>
		<div class="r-r-in">
			<input class="animated bounceInLeft" type="text" name="flname" placeholder="FULL NAME">
			
		</div>
		<div class="r-r-in">
			<input class="animated bounceInRight" type="text" name="mail" placeholder="ENTER EMAIL">
		</div>
		<div class="r-r-in">
			<input class="animated bounceInLeft" type="radio" name="g" value="male">MALE
			<input class="animated bounceInRight" type="radio" name="g" value="female">FEMALE
		</div>
		<div class="r-r-in">
			<select  class="animated bounceInLeft" name="stated">
				<option>CHOOSE STATE</option>
				<option>Andhra Pradesh</option>
				<option>Arunachal Pradesh</option>
				<option>Assam</option>
				<option>Bihar</option>
				<option>Chhattisgarh</option>
				<option>Goa</option>
				<option>Gujarat</option>
				<option>Haryana</option>
				<option>Himachal Pradesh</option>
				<option>Jammu & Kashmir</option>
				<option>Jharkhand</option>
				<option>Karnataka</option>
				<option>Kerala</option>
				<option>Madhya Pradesh</option>
				<option>Maharashtra</option>
				<option>Manipur</option>
				<option>Meghalaya</option>
				<option>Mizoram</option>
				<option>Nagaland</option>
				<option>Odisha</option>
				<option>Punjab</option>
				<option>Rajasthan</option>
				<option>Sikkim</option>
				<option>Tamil Nadu</option>
				<option>Telangana</option>
				<option>Tripura</option>
				<option>Uttarakhand</option>
				<option>Uttar Pradesh</option>
				<option>West Bengal</option> 
			</select>	
		</div>

		<div id="Ct">
			<input  class="animated bounceInLeft" type="text" name="cityname" required="filled" placeholder="ENTER CITY">
		</div>

		<div class="r-r-in">
			<input class="animated bounceInLeft" type="password" name="password" placeholder="PASSWORD">
		</div>

		<div id="cps">
			<input class="animated bounceInLeft" type="password" name="password" placeholder="CONFIRM PASSWORD">
		</div>

		<div class="r-r-in">
				<input type="submit" class="lg-btn" src="signup_db.php" name="mt" value="SIGNUP">
		</div>
		</form action="signup_db.php">
	</div>
	</div>
	<div class="footer">
		<p>&#xA9;&#xFE0F; Copyright 2020 FunctionController Let's Execute Future	|	Designed and devloped by Nikhil kubde</p>
	</div>
</body>
</html>