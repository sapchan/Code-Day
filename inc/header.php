<?php
  session_start();
  include("config.php");
?>

<!DOCTYPE html>
<html lang="en-us">
<head>
  <title>FireFly</title>
  <?php
  $files = glob('assets/css/*.{css}', GLOB_BRACE);
  foreach($files as $file) {
    echo "<link rel='stylesheet' href='$file' media='all'>\n";
  }
  if (isset($_SESSION['login_user'])){
    $login_status = true;
  } else {
    $login_status = false;
  }
  ?>
  <meta name="description" content="MittenHacks is a Michigan-based hackathon happening in the summer of 2015.">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <nav class="navbar">
    <div class="center">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <?php
          if($login_status !== true) {
        ?>
          <li><a href="login.php">Login</a></li>
          <li><a href="signup.php">Signup</a></li>
        <?php
          } else {
        ?>
          <li><a href="finance.php">Finances</a></li>
          <li><a href="logout.php">Logout</a></li>
        <?php
        }
        ?>
      </ul>
    </div>
</nav>
