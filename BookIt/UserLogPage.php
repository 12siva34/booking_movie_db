<?php 
session_start();
?>
<!DOCTYPE html>
<?php include('navbar2.html'); ?> 
<html>
<link rel="stylesheet" href="css/styles.css">
  <body>
    <div class="user_login" style="margin-left:220px;">
      <form action="UserLogQ.php" method="POST" class="inputform">
        <img src="assets/icons/user1.png"><br></br>
        <input type="text" id="username" name="username" placeholder=" Username" required><br></br>
        <input type="password" id="password" name="password" placeholder=" **********" required><br></br>
        <input type="submit" value="Login" class="uni-btn">

      </form>
    </div>
    <div class="login_info">
      <form action="UserRegPage.php" class="inputform">
        <p style="margin-bottom:20px">New user?</p>
        <input type="submit" value="Register" class="uni-btn">
  </body>
</html>
