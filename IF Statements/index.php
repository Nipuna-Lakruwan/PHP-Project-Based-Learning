<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
</body>
</html>

<?php

  // $age = 101;

  // if ($age >= 100) {
  //   echo "You are too old to enter the website";
  // }
  // else if ($age <= 0) {
  //   echo "This is not a valid age";
  // }
  // else if ($age >= 100) {
  //   echo "You are too old to enter the website";
  // }
  // else {
  //   echo "You are too young to enter the website";
  // }

  //$adult = true;

  // if ($adult == true) {
  //   echo "You are an adult";
  // }
  // else {
  //   echo "You are not an adult";
  // }

  // Salary Calculator

  $hours = 50;
  $rate = 15;
  $weekly_pay = null;

  if ($hours < 0) {
    $weekly_pay = 0;
  }
  else if ($hours <= 40) {
    $weekly_pay = $hours * $rate;
  }
  else {
    $weekly_pay = (40 * $rate) + (($hours - 40) * ($rate * 1.5));
  }

  echo "Hours worked: {$hours} <br>";
  echo "You made \${$weekly_pay} this week <br>";

?>