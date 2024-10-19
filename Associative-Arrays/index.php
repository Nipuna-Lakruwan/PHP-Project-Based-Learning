<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="#" method="post">
    <label>Enter a Country:</label>
    <input type="text" name="country"><br>
    <input type="submit" value="Submit">
  </form>
</body>
</html>

<?php

    // Associative Arrays = An array made of key=>value pairs

    $capitals = array("USA"=>"Washinton D.C", 
                      "Japan"=>"Kyoto", 
                      "South Korea"=>"Seoul", 
                      "Sri Lanka"=>"Colombo");

    // echo $capitals["USA"]; // Access the value by key

    // $capitals["Sri Lanka"] = "Kandy"; // Change the value of an item in the array
    // $capitals["China"] = "Beijing"; // Add an item to the array
    // array_pop($capitals); // Remove the last item from the array
    // array_shift($capitals); // Remove the first item from the array
    // $keys = array_keys($capitals); // Get the keys of the array
    //$values = array_values($capitals); // Get the values of the array
    // array_flip($capitals); // Flip the keys and values of the array
    // array_reverse($capitals); // Reverse the order of the array
    //echo count($capitals); // Count the number of items in the array

    // For each loop = to loop through each item in an array
    // foreach($capitals as $key => $value){
    //   echo "The capital of {$key} is {$value} <br>";
    // }

    $capital = $capitals[$_POST["country"]];

    echo "The capital of {$_POST["country"]} is {$capital} <br>";

?>