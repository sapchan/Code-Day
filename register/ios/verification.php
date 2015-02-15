<?php
	session_start();
	$username=$_POST['username'];
	$password=$_POST['password'];
	$connection = mysql_connect('localhost','tepavehl_root','password101');
	$username = stripslashes($username);
	$password = stripslashes($password);
	$username = mysql_real_escape_string($username);
	$password = mysql_real_escape_string($password);
	$db = mysql_select_db("tepavehl_firefly", $connection);
	$query = mysql_query("SELECT * FROM accounts WHERE password='$password' AND username='$username'", $connection);
	$rows = mysql_num_rows($query);
	if ($rows == 1) {
	  echo "8cf2c5f49f4cbd151721673a7df87882c537361a";
	} else {
	  $error = "Username or Password is invalid";
	}
	  mysql_close($connection);
?>
