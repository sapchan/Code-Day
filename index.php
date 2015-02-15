<?php
	include('login/login.php');
	if (isset($_SESSION['login_user'])){
		// Signed In
		header("location: http://tepatti.com/other/mhacks/graphs");
	} else {
		// Signed Out
		$loginlogout = "<li><a href=\"register\">Sign Up</a></li><li><a href=\"login\">Log In</a></li><li>";
		$navbar = "<li class=\"active\"><a href=\"http://tepatti.com/other/mhacks\">Home <span class=\"sr-only\">(current)</span></a></li><li><a href=\"http://tepatti.com/other/mhacks/about/\">About</a></li>";
	}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Home | Firefly</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script src="js/bootstrap.js"></script>
		<style>
			body #splashscreen {
				background-color:#2D2D2D;
				height:100%;
				width:100%;
			}

			#splashscreen .title{
				text-align:center;
				padding-top:10%;
			}

			.firefly{
				font-family: Helvetica;
				font-size: 180px;
				color: #E1E1E1;
				line-height: 216px;
			}
			li {
				color:#E1E1E1;
			}
			a {
				text-decoration:none;
			}
		</style>
  </head>

  <body>
		<section id="splashscreen">
			<nav>
				<ul>
						<li>Home</li>
						<li>About</li>
						<li>Login</li>
						<li>Signup</li>
				</ul>
			</nav>
			<div class="container">
				<div class="title"><p class="firefly">Fire<span style="color:#E19E5D">Fly</span></p></div>
				<div class="buzzwords"></div>
			</div>
		</section>
		<script>
			document.getElementById("splashscreen").style.height = window.innerHeight + "px";
		</script>
  </body>
</html>
