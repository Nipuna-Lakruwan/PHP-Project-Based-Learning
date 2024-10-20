<?php

  // Hashing = Transforming sensitive data (passwords)
  //           into letters, numbers, and/or symbols
  //           via a mathematical process. (simmilar to encryption)
  //           Hides the original data from 3rd parties.

  $password = "pizza123"; // Original password

  $hash = password_hash($password, PASSWORD_DEFAULT); // Hash the password

  // PASSWORD_DEFAULT = Use the bcrypt algorithm. (default as of PHP 5.5.0) Do not use MD5 or SHA1 as they are not secure. Use bcrypt, Argon2, or scrypt. 
  // PASSWORD_BCRYPT = Use the bcrypt algorithm. (identical to PASSWORD_DEFAULT)

  //echo $hash . "<br>"; // Display the hashed password
  // $2y$10$w8mMlMae3x/svvo8Ywq.aOqReNVkHgh3.XYaWbs1mM6W838CFqNPG (hashed password)

  if(password_verify("pizza123", $hash)) {
    echo "Password is correct <br>";
  }
  else {
    echo "Password is incorrect <br>";
  }

?>