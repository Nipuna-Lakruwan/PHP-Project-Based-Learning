<?php 
  include("database.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #f0f2f5;
      margin: 0;
      font-family: Arial, sans-serif;
    }
    form {
      background: white;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      width: 300px;
      text-align: center;
    }
    h2 {
      color: #1877f2;
      margin-bottom: 20px;
    }
    input[type="text"], input[type="password"] {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border: 1px solid #dddfe2;
      border-radius: 4px;
    }
    input[type="submit"] {
      width: 100%;
      padding: 10px;
      background-color: #1877f2;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
    }
    input[type="submit"]:hover {
      background-color: #165dbb;
    }
  </style>
</head>
<body>
  <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
    <h2>Welcome To FakeBook!</h2>
    UserName: <br>
    <input type="text" name="username" placeholder="Enter your username"><br>
    Password: <br>
    <input type="password" name="password" placeholder="Enter your password"><br>
    <input type="submit" name="submit" value="Register">
  </form>
</body>
</html>

<?php

  if($_SERVER["REQUEST_METHOD"] == "POST"){

    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

    if(empty($username)){
      echo "Username is required <br>";
    }
    if(empty($password)){
      echo "Password is required <br>";
    }
    else{
      $hash = password_hash($password, PASSWORD_DEFAULT);
      $sql = "INSERT INTO users (user, password) VALUES ('$username', '$hash')";

      try{
        mysqli_query($conn, $sql);
        echo "User registered successfully";
      }
      catch(mysqli_sql_exception $e){
        echo "Failed to register the user";
      }

    }
  }

  mysqli_close($conn);

?>
