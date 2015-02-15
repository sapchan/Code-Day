<?php
// dun have multiple headers pls
include_once("inc/header.php");
$error='';
if(isset($_POST['submit'])){
  if(empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email'])) {
    $error = "Username, password, or Email Address is invalid.";
  } else {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $username = stripslashes($username);
    $password = stripslashes($password);
    $email = stripslashes($email);
    $username = mysql_real_escape_string($username);
    $password = mysql_real_escape_string($password);
    $email = mysql_real_escape_string($email);

    $db = mysql_select_db("tepavehl_firefly", $connection);
    $query = mysql_query("insert into accounts (username, password, email) values ('$username', '$password', '$email')", $connection);

    mysql_close($connection); // Closing Connection

  }
}
?>

<style>
  .login-box {
  background: #fff;
  border: 1px solid #ddd;
  margin: 100px 0;
  padding: 40px 20px 0 20px;
  }

</style>

<div class="large-3 large-centered columns">
  <div class="login-box">
  <div class="row">
  <div class="large-12 columns">
    <form action="" method="POST">
      <div class="row">
        <div class="large-12 columns">
            <input type="text" name="email" placeholder="Email" />
        </div>
      </div>
       <div class="row">
         <div class="large-12 columns">
             <input type="text" name="username" placeholder="Username" />
         </div>
       </div>
      <div class="row">
         <div class="large-12 columns">
             <input type="password" name="password" placeholder="Password" />
         </div>
      </div>
      <div class="row">
        <div class="large-12 large-centered columns">
          <input name="submit" type="submit" class="button expand" value="Signup"/>
        </div>
        <?php echo $yo; echo $error; ?>
      </div>
    </form>
  </div>
</div>
</div>
</div>

<?php
// dun have multiple footers pls
include_once("inc/footer.php");
?>
