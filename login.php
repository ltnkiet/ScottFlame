<?php

  session_start();
  include("connect.php");
  error_reporting(0);

  if(session_id() == '') session_start();
  if (isset($_SESSION['username']) == true) {
    header("location: index.php");
    exit();
  }

  if (isset($_POST["btn-log"])) {
    $username = $_POST["username"];   
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM users WHERE username='$username' AND password= '$password'";
    $rs = mysqli_query($conn, $sql);
    if(mysqli_num_rows($rs) == 1){

      // $_SESSION['username'] = $username;
      echo "<script> alert('Đăng nhập thành công') </script>";
    require_once 'index.php';
    }
    else{
      echo "<script> alert('Lỗi! Vui lòng kiểm tra lại tên đăng nhập hoặc mật khẩu!') </script>";
      require_once 'login.php';
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Scott Flame</title>
	<link rel="stylesheet" type="text/css" href="./css/login.css">
</head>
<body>
  <div>
    <div class="container">
      <form id="form" action="" method="POST">
        <h1>Login</h1>
        <div class="input-control">
          <label for="username">User Name</label>
          <input id="username" name="username" type="text" >
        </div>
        <div class="input-control">
          <label for="password">Password</label>
          <input id="password" name="password" type="password">
        </div>
        <div class="container">
          <button type="submit" href="#" name="btn-log">Login</button>
          <button type="submit"><a href="signup.php">Sign up</a></button>
        <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>

        <div class="container" style="background-color:#f1f1f1">
          <button type="button" href="index.php" class="cancelbtn">Cancel</button>
          <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
      </form>
    </div>
    <script>

      // Get the modal
      var modal = document.getElementById('form');
      
      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
          if (event.target == modal) {
              modal.style.display = "none";
          }
      }
      </script>
	</div>
</body>
</html>