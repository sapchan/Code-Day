<?php
	include('../login/login.php');
	if (isset($_SESSION['login_user'])){
		// Signed In
		// Do nothing
	} else {
		header("location: http://tepatti.com/other/mhacks/login");
	}
	
	
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Finances | Firefly</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <script src="../js/bootstrap.js"></script>
  </head>

  <body>
    <!--navbar-->
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Firefly</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="http://tepatti.com/other/mhacks/graphs">Graphs</a></li>
            <li class="active"><a href="http://tepatti.com/other/mhacks/finance">Finances</a></li>
            <li><a href="http://tepatti.com/other/mhacks/about/">About</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
			  <li><a href="settings">Settings</a></li>
			  <li><a href="logout">Log Out</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <!--end of navbar -->
    
    <div class="container">
		<div class="page-header">
			<h1>Finances</h1>
		</div>
		<p>This is example text because we don't have a finished description yet. Bla bla bla, 
		bla bla bla, bla bla bla. Sometimes I bla bla bla, other times I bla bla bla with some 
		blah on top.</p>
	</div>
  </body>
</html>
