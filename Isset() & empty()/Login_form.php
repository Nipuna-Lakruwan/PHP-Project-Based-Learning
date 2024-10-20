<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="#" method="post">
    <label>Username:</label>
    <input type="text" name="username"><br>
    <label>Password:</label>
    <input type="password" name="password"><br>
    <input type="submit" value="Login" name="login">
  </form>
</body>
</html>

<?php

  // foreach($_POST as $key => $value) {
  //   echo "{$key}: {$value} <br>";
  // }

  // if(isset($_POST['login'])) {
  //   $username = $_POST['username'];
  //   $password = $_POST['password'];

  //   if(empty($username) || empty($password)) {
  //     echo "Please fill in all fields";
  //   }
  //   else {
  //     echo "Welcome {$username}";
  //   }
  // }

?>