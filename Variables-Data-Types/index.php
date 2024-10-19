<?php

  // String
  $name = "Nipuna";
  $food = "Pizza";
  $email = "example@gmail.com";

  // Integer
  $age = 22;
  $users = 10;
  $quantity = 5;

  // float
  $gpa = 3.5;
  $price = 10.99;
  $tax_rate = 0.1;

  // Boolean (true or false)
  $employed = true;
  $online = false;
  $for_sale = true;

  // Temp variables
  $total = null;


  // echo "My name is {$name} <br>";
  // echo "My favorite food is {$food} <br>";
  // echo "My email address is {$email} <br>";

  // echo "My age is {$age} <br>";
  // echo "There are {$users} users in the system <br>";
  // echo "I have {$quantity} apples <br>";

  // echo "My GPA is {$gpa} <br>";
  // echo "The price is \${$price} <br>";
  // echo "The tax rate is {$tax_rate}% <br>";

  // echo "Am I employed: {$employed} <br>";
  // echo "Am I online: {$online} <br>";
  // echo "Is it for sale: {$for_sale} <br>";

  echo "You have ordered {$quantity} x {$food} pizzas. <br>";
  $total = $price * $quantity;
  echo "The total price is \${$total} <br>";
?>