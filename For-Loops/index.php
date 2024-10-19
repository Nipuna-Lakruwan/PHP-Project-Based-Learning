<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="#" method="post">
    <label>Enter a number to count down from:</label>
    <input type="text" name="counter">
    <input type="submit" value="Count">
  </form>
</body>
</html>

<?php

  // For Loops = Execute a block of code a limited amount of times
  //             The For Loop is used when you know in advance how many times the script should run
  //             The For Loop is used when you know the number of iterations
  //             The For Loop is used when you know the start and end values

  // for($i = 10; $i >= 0; $i--) {
  //   echo "The number is: {$i} <br>";
  // }

  $count = $_POST["counter"];

  for($i = $counter; $i > 0; $i--) {
    echo "The number is: {$i} <br>";
  }

?>