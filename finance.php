<?php
include_once("inc/header.php");
$error='';
if(isset($_POST['submit'])){
  if(empty($_POST['source']) || empty($_POST['amount']) || empty($_POST['date'])) {
    $error = "Please enter all the following components";
  } else {
    $source = $_POST['source'];
    $amount = $_POST['amount'];
    $date = $_POST['date'];
    $username = $_SESSION['login_user'];
    $db = mysql_select_db("tepavehl_firefly", $connection);
    $query = mysql_query("insert into tables (amount, date, source, username) values ('$amount', '$date', '$source', '$username')", $connection);

    mysql_close($connection); // Closing Connection

    if($query) {
      $message = "The information has successfully been updated";
    }
  }
}
?>

<style>
  .login-box {
  background: #fff;
  border: 0px solid #ddd;
  margin: 100px 0;
  padding: 40px 20px 0 20px;
  }

</style>
<?php
if (!isset($_SESSION['login_user'])){
?>


<div class="large-3 large-centered columns">
  <div class="login-box">
  <div class="row">
  <div class="large-12 columns">
       <div class="row">
         <div class="large-12 columns">
           <a style="color:#222222;" href="login.php">Please sign in to continue</a>
         </div>
       </div>
  </div>
</div>
</div>
</div>

<?php
} else {
?>

  <div class="login-box">
    <div class="row">
      <form action="finance.php" method="POST">
      <div class="large-4 columns">
        <label>Source
          <input name="source" type="text" placeholder="Source" />
        </label>
      </div>
      <div class="large-4 columns">
        <label>Amount
          <input name="amount" type="text" placeholder="Amount" />
        </label>
      </div>
      <div class="large-4 columns">
          <label>Date of Transaction
            <input name="date" type="text" placeholder="MM/DD/YY" />
          </label>
        </div>
      </div>
      <div class="row">
        <div class="large-12 large-centered columns">
          <input name="submit" type="submit" class="button expand" value="Add Transaction"/>
        </div>
        <?php
          echo $message;
        ?>
      </div>
    </form>
</div>

<div class="row" style="text-align:center;">
  <div class="large-4 columns">
    <label>Source/Recipient</label>
  </div>
  <div class="large-4 columns">
    <label>Amount</label>
  </div>
  <div class="large-4 columns">
    <label>Date of Transaction</label>
  </div>

<?php
  $username = $_SESSION['login_user'];
  $db = mysql_select_db("tepavehl_firefly", $connection);
  $sqltwo = "SELECT sum(amount) FROM tables WHERE username = '$username'";
  $sum = mysql_query($sqltwo, $connection);
  $rowsum = mysql_fetch_array( $sum );
  $sql = "SELECT * FROM tables WHERE username = '$username'";
  $result = mysql_query($sql, $connection);
  if (mysql_num_rows($result) > 0) {
    while($row = mysql_fetch_assoc($result)) {
      echo "<div class='row'>";
      echo "<div class = 'large-4 columns'>";
      echo $row["source"];
      echo "</div>";
      echo "<div class = 'large-4 columns'>";
      echo "$" . $row["amount"];
      echo "</div>";
      echo "<div class = 'large-4 columns'>";
      echo $row["date"];
      echo "</div>";
      echo "</div>";
    }
}
?>
<br><br>
<div class="row">
  <div class="large-12 columns">
    sum: <?php echo "$" . $rowsum[0]; ?>
  </div>
  <div class="large-12 columns">
    <a target="_blank" href="graphs.php" style="color:#58A8BD"> View Graphs </a>
  </div>
</div>
</div>
<?php
}
?>
<?php
// dun have multiple footers pls
include_once("inc/footer.php");
?>
