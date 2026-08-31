<?php
	ob_start();
	session_start();
		$error = NULL;
		if($_SERVER["REQUEST_METHOD"] == "POST") {
			//connect.php (tells where to connect servername, dbasename, username, password)
			require "91902DatabaseAssessment_mysqli.php";
	
	
			// username and password sent from form
			$myusername = mysqli_real_escape_string($conn,$_POST['username']);
			$mypassword = mysqli_real_escape_string($conn,$_POST['password']);

			$query = "SELECT Users_ID FROM users WHERE Users_ID = '$myusername' and Password = '$mypassword'";

			$result = mysqli_query($conn,$query);
			$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

			$count = mysqli_num_rows($result);

	if ($count == 1) {
		$_SESSION['login_user'] = $myusername;

		// Check if the user is 'Graeme'
		if ($myusername == "Graeme" || $myusername == "graeme") {
			header("location:04_add_user.php");
			} else {
				header("location:ManyToMany_Query01.php");
		}
	} else {
			$error = "Error Invalid username or password";
		}
	}
	ob_end_flush();
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset = "utf-8">
		<meta name="Keywords" content="Music Website, Music Database, Music, Spotify, Soundcloud"/>
		<meta name="Author" content="Jordan Kannemeyer"/>
		<meta name="Description" content="Music Database Website"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Login Page</title>
		<link rel="stylesheet" type="text/css" href="css/divs.css">
		<link rel="stylesheet" type="text/css" href="css/fonts.css">
		<link rel="stylesheet" type="text/css" href="css/nav.css">
	</head>
	<body>
		<main>	
			<div class="wrapper"><!-- the div that holds the grid -->
				<div class="header"><!-- Holds the heading image -->
					<img src = "images/DatabaseBanner.jpg" alt = "An image as a place holder" class = "image01" />
				</div>
				<div class="title"><!-- Holds the page title -->
					<h1 class = "grey"><center>Login</center></h1>
				</div>
				<div class="nav"><!-- Holds the page navigation -->
					<?php
						//Pulls the links from the nav.php page and places them in the navigation div
						require '07_nav.php'; //'require' is 100% needed for the site to run 
					?>
				</div>
				
				<div class="content"><!-- Holds the main page content -->
					<div class="section3"><!-- Holds the main page content -->
						<h3><form method = "post" id= "01_login">
							<h4><label for = 'login'>Username:</label></h4>
							<input type = "text" name= "username" placeholder = "Enter user name" required/><br/><br/>
							<h4><label for = 'login'>Password:</label></h4>
							<input type = "password" name= "password" placeholder = "Enter user password" required/><br/><br/>
							<input type = "submit" value = " Submit "/><br />
							</form></h3>
					</div>	
					
				</div>
				<div class="footer"><!-- Holds the foot notes -->
					<p class = "grey">&copy; Copyright Jordan Kannemeyer 2026</p>
					<p class = "grey">&copy; Images from pixlr.com</p>
				</div>
			</div>
		</main>	
	</body>
</html>
