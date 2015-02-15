<?php
// TODO: Google Analytics
?>
<?php
$files = glob('assets/js/*.{js}', GLOB_BRACE);
foreach($files as $file) {
  echo "<script src='$file'></script>\n";
}
?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="http://d3js.org/d3.v3.min.js" charset="utf-8"></script>
</body>
</html>
