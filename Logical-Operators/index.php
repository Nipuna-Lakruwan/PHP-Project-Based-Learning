<?php

  // // Logical Operators

  // // AND
  // $x = true;
  // $y = false;
  // $z = null;

  // $z = $x && $y;
  // echo "AND: {$z} <br>";

  // // OR
  // $z = $x || $y;
  // echo "OR: {$z} <br>";

  // // NOT
  // $z = !$x;
  // echo "NOT: {$z} <br>";

  // // XOR
  // $z = $x xor $y;
  // echo "XOR: {$z} <br>";

  // // Comparison Operators

  // // Equal
  // $z = $x == $y;
  // echo "Equal: {$z} <br>";

  // // Identical
  // $z = $x === $y;
  // echo "Identical: {$z} <br>";

  // // Not Equal
  // $z = $x != $y;
  // echo "Not Equal: {$z} <br>";

  // // Not Identical
  // $z = $x !== $y;
  // echo "Not Identical: {$z} <br>";

  // // Greater Than
  // $z = $x > $y;
  // echo "Greater Than: {$z} <br>";

  // // Less Than
  // $z = $x < $y;
  // echo "Less Than: {$z} <br>";

  // // Greater Than or Equal To
  // $z = $x >= $y;
  // echo "Greater Than or Equal To: {$z} <br>";

  // // Less Than or Equal To
  // $z = $x <= $y;
  // echo "Less Than or Equal To: {$z} <br>";

  // // Spaceship
  // $z = $x <=> $y;
  // echo "Spaceship: {$z} <br>";

  // // Null Coalescing
  // $z = $x ?? $y;
  // echo "Null Coalescing: {$z} <br>";

  // // Ternary
  // $z = $x ? "True" : "False";
  // echo "Ternary: {$z} <br>";

  // // Conditional Assignment
  // $z = $x ?: $y;
  // echo "Conditional Assignment: {$z} <br>";

  // // String Operators

  // $first_name = "Nipuna";
  // $last_name = "Lakruwan";
  // $full_name = null;

  // // Concatenation
  // $full_name = $first_name . " " . $last_name;
  // echo "Concatenation: {$full_name} <br>";

  // // Concatenation Assignment
  // $full_name .= " Jr.";
  // echo "Concatenation Assignment: {$full_name} <br>";

  // // Spaceship
  // $z = $first_name <=> $last_name;
  // echo "Spaceship: {$z} <br>";

  // // Null Coalescing
  // $z = $first_name ?? $last_name;
  // echo "Null Coalescing: {$z} <br>";

  // $temp = 15;
  // $cloudy = true;

  // if($temp < 0 && $temp > -10) {
  //   echo "It's very cold <br>";
  // } elseif($temp < 10 && $temp >= 0) {
  //   echo "It's cold <br>";
  // } elseif($temp < 20 && $temp >= 10) {
  //   echo "It's cool <br>";
  // } elseif($temp < 30 && $temp >= 20) {
  //   echo "It's warm <br>";
  // } else {
  //   echo "It's hot <br>";
  // }

  // if($temp < 0 || $temp > 30) {
  //   echo "Extreme weather conditions <br>";
  // }

  // if(!$cloudy) {
  //   echo "It's not cloudy <br>";
  // }
  // else {
  //   echo "It's cloudy <br>";
  // }

  // $age = 12;
  // $citizen = true;

  // if($age >= 18 && $citizen) {
  //   echo "You can vote <br>";
  // }
  // else {
  //   echo "You can't vote <br>";
  // }

  // if(!$age >= 18 && !$citizen) {
  //   echo "You can't vote <br>";
  // }
  // else {
  //   echo "You can vote <br>";
  // }

  // Movie ticket counter

  $child = true;
  $senior = true;
  $ticket = null;

  if ($child || $senior) {
    $ticket = 5;
  }
  else {
    $ticket = 10;
  }

  echo "The ticket price is \${$ticket} <br>";

?>