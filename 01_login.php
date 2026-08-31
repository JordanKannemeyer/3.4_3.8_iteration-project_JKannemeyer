<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset = "utf-8" />
		<title>01_Login</title>
		<link rel="stylesheet" type="text/css" href="css/divs.css">
		<link rel="stylesheet" type="text/css" href="css/fonts.css">
		<link rel="stylesheet" type="text/css" href="css/nav.css">
	</head>
	<body>
		<main>
			<div class="wrapper"><!-- the div that holds the grid -->
				<div class="header"><!-- Holds the heading image -->
					<img src = "images/header01.jpg" alt = "An image as a place holder" class = "image01" />
				</div>
				<div class="title"><!-- Holds the page title -->
					<h1 class = "grey"><center>L3_Database_2025_LOGIN</center></h1>
				</div>
				<div class="nav"><!-- Holds the page navigation -->
					<?php
						//Pulls the links from the nav.php page and places them in the navigation div
						require '07_nav.php'; //'require' is 100% needed for the site to run 
					?>
				</div>
				<div class="content"><!-- Holds the main page content -->
					<h1 class = "white"><b>Login Form Code goes here...</b></h1>
				</div>
				<div class="footer"><!-- Holds the foot notes -->
					<p class = "grey">&copy; Copyright David Foulds 2025</p>
				</div>
			</div>
		</main>	
	</body>
</html>

