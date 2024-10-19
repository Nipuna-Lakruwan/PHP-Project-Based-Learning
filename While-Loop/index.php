<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="#" method="post">
    <input type="submit" name="stop" value="stop">
  </form>
</body>
</html>

<?php

    // While Loop

    // $counter = 0;

    // while ($counter <= 10) {
    //   $counter++;
    //   echo "The number is: {$counter} <br>";
      
    // }

    $seconds = 0;
    $running = true;

    while($running) {

      if(isset($_POST['stop'])) {
        $running = false;
      }
      else {
        // wait for 1 second
        $seconds++;
        echo $seconds . "<br>";
      }
    }

?>