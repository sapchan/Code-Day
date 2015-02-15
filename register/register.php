<?php
	session_start();
	$error='';
	if(isset($_POST['submit'])){
		if(empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email'])) {
			$error = "Username, password, or Email Address is invalid.";
		} else {
			$username = $_POST['username'];
			$password = $_POST['password'];
			$email = $_POST['email'];

			$connection = mysql_connect('localhost','tepavehl_root','password101');

			$username = stripslashes($username);
			$password = stripslashes($password);
			$email = stripslashes($email);
			$username = mysql_real_escape_string($username);
			$password = mysql_real_escape_string($password);
			$email = mysql_real_escape_string($email);

			$db = mysql_select_db("tepavehl_firefly", $connection);

			$query = mysql_query("insert into accounts (username, password, email) values ('$username', '$password', '$email')", $connection);

			mysql_close($connection); // Closing Connection

			header("location: http://tepatti.com/other/mhacks");
		}
	}
?>
