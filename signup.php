<?php
    require 'connect.php';
    if(isset($_POST['btn-reg'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $phone_number = $_POST['numberphone'];
        $password = $_POST['password'];
        $rPassword = $_POST['password2'];

        $sql = "insert into users (username, email, phone_number, password, rPassword) values ('$username', '$email', '$phone_number', '$password', '$rPassword')";
        if($conn->query($sql) === TRUE){
            echo "<script>alert('Đăng ký thành công')</script>";
            require_once 'login.php';
        }
        else{
            echo "<script>alert('Đăng ký thất bại')</script>";
        }
    }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/signup.css">
    <script src="script.js"></script>
</head>
<body>
    <div class="container">
        <form id="form" action="" method="POST">
            <h1>Sign up</h1>
            <div class="input-control">
                <label for="username">Username</label>
                <input id="username" name="username" type="text">
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="email">Email</label>
                <input id="email" name="email" type="text">
                <div class="error"></div>
            </div>
            <div class="input-control">
              <label for="numberphone">NumberPhone</label>
              <input id="numberphone" name="numberphone" type="text">
              <div class="error"></div>
          </div>
            <div class="input-control">
                <label for="password">Password</label>
                <input id="password"name="password" type="password">
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="password2">Password again</label>
                <input id="password2"name="password2" type="password">
                <div class="error"></div>
            </div>
            <button type="submit" name="btn-reg">Sign up</button>
        </form>
    </div>    
</body>
</html>