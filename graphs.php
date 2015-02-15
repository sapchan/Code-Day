<?php // content="text/plain; charset=utf-8"
session_start();
include("config.php");
require_once ('jpgraph/jpgraph.php');
require_once ('jpgraph/jpgraph_bar.php');


$y_array = array();
$x_array = array();
$username = $_SESSION['login_user'];
$db = mysql_select_db("tepavehl_firefly", $connection);
$sql = "SELECT * FROM tables WHERE username = '$username'";
$result = mysql_query($sql, $connection);
if (mysql_num_rows($result) > 0) {
  while($row = mysql_fetch_assoc($result)) {
    array_push($y_array, $row["amount"]);
    array_push($x_array, $row["date"]);
  }
}

$datay= $y_array;

// Create the graph. These two calls are always required
$graph = new Graph(800,600);
$graph->SetScale('intlin');

// Add a drop shadow
$graph->SetShadow();

// Adjust the margin a bit to make more room for titles
$graph->SetMargin(90,50,100,40);

// Create a bar pot
$bplot = new BarPlot($datay);

// Adjust fill color
$bplot->SetFillColor('orange');
$graph->Add($bplot);

// Setup the titles
$graph->title->Set('Date vs. Amount Graph');
$graph->xaxis->title->Set('ID');
$graph->yaxis->title->Set('Amount of Transaction');

$graph->title->SetFont(FF_FONT1,FS_BOLD);
$graph->yaxis->title->SetFont(FF_FONT1,FS_BOLD);
$graph->xaxis->title->SetFont(FF_FONT1,FS_BOLD);

// Display the graph

?>
<?php
 $graph->Stroke();
?>
<html>

</html>
