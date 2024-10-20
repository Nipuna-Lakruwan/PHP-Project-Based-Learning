<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="post">
    <label>Username:</label>
    <input type="text" name="username"><br>
    <label>Age:</label>
    <input type="text" name="age"><br>
    <label>Email:</label>
    <input type="text" name="email"><br>
    <!--
    <label>Password:</label>
    <input type="password" name="password"><br> -->
    <input type="submit" value="login" name="login">
  </form>
</body>
</html>

<?php

  // Sanitizing Input
  // if(isset($_POST["login"])){

  //   //$username = $_POST["username"];

  //   // <script>alert('You have a VIRUS!')</script> // testing for XSS attack

  //   $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);

  //   $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_NUMBER_INT);

  //   $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    
  //   echo "Welcome {$age}";
  //   echo "Welcome {$username}";
  //   echo "Welcome {$email}";
  // }

  // Validating Input

  if(isset($_POST["login"])){

    $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);

    $emil = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

    if(empty($age)){
      echo "Please enter your age";
    }
    else{
      echo "You are {$age} years old";
    }

    if(empty($email)){
      echo "Please enter your email";
    }
    else{
      echo "Your email is {$email}";
    }
  }

?>