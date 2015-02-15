<?php
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
    <title>New Graph | Firefly</title>
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
			<h1>New Graph</h1>
		</div>
		<div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Required Field</strong></div>
                <div class="form-group">
                    <label for="InputName">Enter Username</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="username" id="InputName" placeholder="Enter Username" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">Enter Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="InputEmailFirst" name="password" placeholder="Enter Password" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">Enter Email</label>
                    <div class="input-group">
                        <input type="email" class="form-control" id="InputEmail" name="email" placeholder="Confirm Email" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info pull-right">
				<span></span>
	</div>
  </body>
</html>
