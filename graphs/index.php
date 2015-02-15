<?php
	if (isset($_SESSION['login_user'])){
		// Signed In
		// Do nothing
	} else {
		header("location: http://tepatti.com/other/mhacks/login");
	}

	$username = $_SESSION['login_user'];
	$content = "";
	$connection = mysql_connect('localhost','tepavehl_root','password101');
	$db = mysql_select_db("tepavehl_firefly", $connection);
	$query = mysql_query("select * from graphs where username='$username'", $connection);
	$rows = mysql_num_rows($query);
	if ($rows > 0) {
		// Load Saved Graphs + offer to make new one
		$loadquery = mysql_query("select graphname from graphs where username='$username'", $connection);
		$i = 0;
		$finalstring;
		// LOL BLACK MAGIC HAPPENS HERE HOLY S**T THIS FINALLY WORKS
		while ($loadrows = mysql_fetch_array($loadquery)) {
			$finalstring = str_replace($username . '_', '', $loadrows[0]);
			$graphdata = $graphdata . "<h2><span class=\"label label-info\">" . $finalstring . "</span> <span class=\"label label-primary\">View Graph</span> <span class=\"label label-default\">Edit Graph</span> <span class=\"label label-danger\">Delete Graph</span></h2><br />";
			$i = $i + 1;
		}
		// END BLACK MAGIC START FORMATTING PAGE
		$pagecontent = "<div class=\"container\">
			<div class=\"page-header\">
			<h1>Graphs</h1>
			</div>
			<p>Please select a graph to open, or create a new one.</p>
			<a href=\"newgraph.php\"><input name=\"newgraph\" id=\"submit\" value=\"New Graph\" class=\"btn btn-lg btn-primary\" type=\"submit\"></a><br /><br />" . $graphdata . "</div>";
	} else {
		// Offer to create new graph
		$pagecontent = "<div class=\"container\">
			<div class=\"page-header\">
			<h1>Graphs</h1>
			</div>
			<p>It looks like you don't have any graphs! Would you like to create a new one?</p>
			<a href=\"newgraph.php\"><input name=\"newgraph\" id=\"submit\" value=\"New Graph\" class=\"btn btn-lg btn-primary\" type=\"submit\"></a>
			</div>";
	}
	mysql_close($connection); // Closing Connection
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Graphs | Firefly</title>
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
            <li class="active"><a href="http://tepatti.com/other/mhacks/graphs">Graphs</a></li>
            <li><a href="http://tepatti.com/other/mhacks/finance">Finances</a></li>
            <li><a href="http://tepatti.com/other/mhacks/about/">About</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
			  <li><a href="http://tepatti.com/other/mhacks/settings">Settings</a></li>
			  <li><a href="http://tepatti.com/other/mhacks/logout">Log Out</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <!--end of navbar -->
    <?php
		echo $pagecontent;
	?>
  </body>
</html>
