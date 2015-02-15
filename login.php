<?php
include("inc/header.php");
$error='';
  if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
      $error = "Username or Password is invalid";
    }
    else
    {
      $username=$_POST['username'];
      $password=$_POST['password'];
      $username = stripslashes($username);
      $password = stripslashes($password);
      $username = mysql_real_escape_string($username);
      $password = mysql_real_escape_string($password);
      $db = mysql_select_db("tepavehl_firefly", $connection);
      $query = mysql_query("select * from accounts where password='$password' AND username='$username'", $connection);
      $rows = mysql_num_rows($query);
      if ($rows == 1) {
        $_SESSION['login_user'] = $username;
      } else {
        $error = "Username or Password is invalid";
      }
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
          <input name="submit" type="submit" class="button expand" value="Log In"/>
        </div>
        <?php if($login_status == true){
          echo "yep it works";
        }
        ?>
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
