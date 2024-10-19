<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
<form action="form.php" method="post">
  <label>Quantity: </label><br>
  <input type="number" name="quantity"><br>
  <input type="submit" value="total">
</form>
</body>
</html>

<?php

  $item = "Pizza";
  $price = 10.99;
  $quantity = $_POST['quantity'];
  $total = null;

  $total = $price * $quantity;

  echo "You have ordered {$quantity} x {$item}. <br>";
  echo "The total price is \${$total} <br>";

?>