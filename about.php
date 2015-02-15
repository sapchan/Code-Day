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

<!DOCTYPE html>
<html>
  <head>
    <title>About Us | Firefly</title>
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
            <?php
				echo $navbar;
			?>
          </ul>
          <ul class="nav navbar-nav navbar-right">
			  <?php
				echo $loginlogout;
			  ?>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <!--end of navbar -->
    
    <div class="container">
		<div class="page-header">
			<h1>About Us</h1>
		</div>
		<p><b>Tim "Yung Ginger" Tepatti</b>
Tim Tepatti is a young high school programmer and is well known for winning "Funniest Hack" at MHacks IV by creating a batch script that exploited Yo's sparse platform, thus spamming users with Yo's every second. During his spare time, Tim enjoys flying expensive equipment into trees, and just in general being a ginger version of Young Thug but prefers to rap to Hardcore Terrorcore Speedcore Frenchcore music.
<br />
<b>Sacheth "Swift" Chandramouli</b>
Sacheth is in a abusive relationship with PHP. Make sure to repeatedly remind him that Node.JS that is the only real dev language, because he'll swiftly Nope.js his way right out of there. 
<br />
<b>Felix "4.0" Chang</b>
Felix is a legend. No one knows who he really is, we just know he did the crtypic Android development work.
<br />
<b>Rajan "Yasuo" Narang</b>
Rajan is the man with two monitors: one to play League of Legends and the other to code. Most likely at the same time.
<br />
<b>Divya "Not-Quite-a-Midget" Goel</b>
Divya is aspiring entrepeneur, and she boldly leads the way for the vertically challenged. This 4'10" girl wants to change people's lives, even if she can't see eye to eye with them.
<br />
<b>Tarun "Snoop Godd" Gogineni</b>
Tarun worships the one true god of Elon Musk and hopes one day to be the Pope of Elon Musk-ism. Tarun is known to spontaneously make dank memes.</p>
	</div>
  </body>
</html>
