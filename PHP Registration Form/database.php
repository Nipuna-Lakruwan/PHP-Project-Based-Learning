<?php


  $db_server = "localhost";
  $db_username = "root";
  $db_password = "";
  $db_name = "businessdb";
  $conn = "";

  $conn = mysqli_connect($db_server, $db_username, $db_password, $db_name);

  // If get the error

  // try{
  //   $conn = mysqli_connect($db_server, $db_username, $db_password, $db_name);
  // }

  // catch(mysqli_sql_execption){
  //   echo "Failed to connect to the database";
  // }

  if($conn){
    // echo "Connected to the database<br>";
  }
  else{
    echo "Failed to connect to the database <br>";
  }

?>