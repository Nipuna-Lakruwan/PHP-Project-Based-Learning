<?php 
  include("database.php");

  $username = "Patrick";
  $password = "rock1";
  $hash = password_hash($password, PASSWORD_DEFAULT);

  $sql = "INSERT INTO users (user, password) VALUES ('$username', '$hash')";

  //$sql = "INSERT INTO users (user, password) VALUES ('Spongebob', 'pineapple1')";

  try{
    mysqli_query($conn, $sql);
    echo "User is now registered";
  }
  catch(Exception $e){
    echo "Failed to register user";
  }
  
  mysqli_close($conn);

  ?>
