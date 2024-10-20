<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="post">
    <input type="checkbox" name="foods[]" value="Pizza">
    <label>Pizza</label><br>
    <input type="checkbox" name="foods[]" value="Burger">
    <label>Burger</label><br>
    <input type="checkbox" name="foods[]" value="Fries">
    <label>Fries</label><br>
    <input type="checkbox" name="foods[]" value="Taco">
    <label>Taco</label><br>
    <input type="submit" name="Order">
  </form>
</body>
</html>

<?php

  // if(isset($_POST["Order"])){

  //   if(isset($_POST["pizza"])){
  //     echo "You have ordered Pizza <br>";
  //   }
  //   if(isset($_POST["burger"])){
  //     echo "You have ordered Burger <br>";
  //   }
  //   if(isset($_POST["fries"])){
  //     echo "You have ordered Fries <br>";
  //   }
  //   if(isset($_POST["taco"])){
  //     echo "You have ordered Taco <br>";
  //   }
  //   if(empty($_POST["pizza"])){
  //     echo "You don't Like Pizza <br>";
  //   }
  //   if(empty($_POST["burger"])){
  //     echo "You don't Like Burger <br>";
  //   }
  //   if(empty($_POST["fries"])){
  //     echo "You don't Like Fries <br>";
  //   }
  //   if(empty($_POST["taco"])){
  //     echo "You don't Like Taco <br>";
  //   }
  // }

  if(isset($_POST["Order"])){

    $foods = $_POST["foods"];
    
    foreach($foods as $food){
      echo "You have ordered {$food} <br>";
    }
  }

    
?>