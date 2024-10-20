<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="post">
    <input type="radio" name="credit_card" value="Visa">
    <label>Visa</label><br>
    <input type="radio" name="credit_card" value="Mastercard">
    <label>Mastercard</label><br>
    <input type="radio" name="credit_card" value="American Express">
    <label>American Express</label><br>
    <input type="submit" value="Confirm" name="Confirm">
  </form>
</body>
</html>

<?php

  // $credit_card = $_POST['credit_card'];

  // if(isset($_POST["Confirm"])){
  //   if($credit_card == "Visa"){
  //     echo "You have selected Visa";
  //   }
  //   elseif($credit_card == "Mastercard"){
  //     echo "You have selected Mastercard";
  //   }
  //   elseif($credit_card == "American Express"){
  //     echo "You have selected American Express";
  //   }

  // }

  // if(isset($_POST["Confirm"])){
  //   if(isset($_POST["credit_card"])){
  //     $credit_card = $_POST["credit_card"];
  //     echo "You have selected {$credit_card}";
  //   }
  //   else{
  //     echo "Please select a credit card";
  //   }
  // }

  // if(isset($_POST["Confirm"])){

  //   $credit_card = null;

  //   if(empty($_POST["credit_card"])){
  //     $credit_card = $_POST["credit_card"];
  //   }
  //   if($credit_card == "Visa"){
  //     echo "You have selected Visa";
  //   }
  //   elseif($credit_card == "Mastercard"){
  //     echo "You have selected Mastercard";
  //   }
  //   elseif($credit_card == "American Express"){
  //     echo "You have selected American Express";
  //   }
  //   else{
  //     echo "Please select a credit card";
  //   }

  // }

  $credit_card = null;

  if(isset($_POST["Confirm"])){
    $credit_card = $_POST["credit_card"];
  }

  switch($credit_card){
    case "Visa":
      echo "You have selected Visa";
      break;
    case "Mastercard":
      echo "You have selected Mastercard";
      break;
    case "American Express":
      echo "You have selected American Express";
      break;
    default:
      echo "Please select a credit card";
  }
    


?>