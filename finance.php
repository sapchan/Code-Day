<?php
	if (isset($_SESSION['login_user'])){
		// Signed In
		// Do nothing
	} else {
		header("location: http://tepatti.com/other/mhacks/login");
	}
?>
