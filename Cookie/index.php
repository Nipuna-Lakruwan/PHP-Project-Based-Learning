<?php

  // Cookie = Information about a user stored in a user's browser
  //          targeted advertisings, browing preferences, shopping cart items
  //          can be used to store user information

  setcookie("fav_food", "pizza", time() + (86400 * 2), "/"); // Set a cookie for 2 days
  setcookie("fav_drink", "pizza", time() + (86400 * 3), "/"); // Set a cookie for 3 days
  setcookie("fav_color", "Black", time() + (86400 * 4), "/"); // Set a cookie for 4 days


  // foreach($_COOKIE as $key => $value){
  //   echo $key . " = " . $value . "<br>";
  // }

  if(isset($_COOKIE["fav_food"])){
    echo "Your favourite food is " . $_COOKIE["fav_food"] . "<br>";
  } else {
    echo "Cookie not set <br>";
  }

?>