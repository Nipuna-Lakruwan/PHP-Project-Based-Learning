<?php

// Session = SGB (Session Global Variable) used to store information on a user
//           to be used across multiple pages.
//           A user is assigned a session ID which is stored in a cookie
//           ex. login credentials, shopping cart items, user profile


session_start(); // Start the session
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="index.php" method="post">
    <label>Username: </label><br>
    <input type="text" name="username"><br>
    <label>Password: </label><br>
    <input type="password" name="password"><br>
    <input type="submit" name="login" value="login">
  </form>
</body>

</html>

<?php

// $_SESSION['username'] = "Nipuna"; // Set the session variable
// $_SESSION['password'] = "pizza123"; // Set the session variable

// echo $_SESSION['username'] . "<br>"; // Get the session variable
// echo $_SESSION['password'] . "<br>"; // Get the session variable

if (isset($_POST["login"])){
  if(!empty($_POST["username"]) && !empty($_POST["password"])){

    $_SESSION["username"] = $_POST["username"];
    $_SESSION["password"] = $_POST["password"];

    // echo $_SESSION["username"] . "<br>"; // use only for testing
    // echo $_SESSION["password"] . "<br>";

    header("Location: home.php");
  }
  else{
    echo "Please enter your username and password";
  }
}

?>