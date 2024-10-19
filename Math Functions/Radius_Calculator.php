<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Radius Calculator</h1>
  <form action="#" method="post">
    <label>Radius:</label>
    <input type="text" name="radius"><br>
    <input type="submit" value="Calculate">
  </form><br>
</body>
</html>

<?php

  $radius = $_POST["radius"];
  $circumference = null;
  $area = null;
  $volume = null;

  $circumference = 2 * pi() * $radius;
  $circumference = round($circumference, 2);

  $area = pi() * pow($radius, 2);
  $area = round($area, 2);

  $volume = (4/3) * pi() * pow($radius, 3);
  $volume = round($volume, 2);

  echo "The circumference of a circle with a radius of {$radius} is {$circumference}cm <br>";
  echo "The area of a circle with a radius of {$radius} is {$area}cm <br>";
  echo "The volume of a sphere with a radius of {$radius} is {$volume}cm <br>";
?>