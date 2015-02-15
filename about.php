<?php
	include('../login/login.php');
	if (isset($_SESSION['login_user'])){
		// Signed In
		$loginlogout = "<li><a href=\"http://tepatti.com/other/mhacks/settings\">Settings</a></li><li><a href=\"http://tepatti.com/other/mhacks/logout\">Log Out</a></li>";
		$navbar = "<li><a href=\"http://tepatti.com/other/mhacks/graphs\">Graphs <span class=\"sr-only\">(current)</span></a></li><li><a href=\"http://tepatti.com/other/mhacks/finance\">Finances</a></li><li class=\"active\"><a href=\"http://tepatti.com/other/mhacks/about/\">About</a></li>";
	} else {
		// Signed Out
		$loginlogout = "<li><a href=\"http://tepatti.com/other/mhacks/register\">Sign Up</a></li><li><a href=\"http://tepatti.com/other/mhacks/login\">Log In</a></li><li>";
		$navbar = "<li><a href=\"http://tepatti.com/other/mhacks\">Home <span class=\"sr-only\">(current)</span></a></li><li class=\"active\"><a href=\"http://tepatti.com/other/mhacks/about/\">About</a></li>";
	}
?>
<?php
				echo $navbar;
?>

<?php
				echo $loginlogout;
?>
