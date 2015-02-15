<?php
	if (isset($_SESSION['login_user'])){
		// Signed In
		header("location: http://tepatti.com/other/mhacks/graphs");
	} else {
		// Signed Out
		$loginlogout = "<li><a href=\"register\">Sign Up</a></li><li><a href=\"login\">Log In</a></li><li>";
		$navbar = "<li class=\"active\"><a href=\"http://tepatti.com/other/mhacks\">Home <span class=\"sr-only\">(current)</span></a></li><li><a href=\"http://tepatti.com/other/mhacks/about/\">About</a></li>";
	}
?>
