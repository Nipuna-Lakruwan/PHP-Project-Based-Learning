<?php

    // include() Function = Copies the content of file (php/html/text) and
    //                      includes it in your php file.
    //                      Section of our website become reusable.
    //                      Changes only need to be made in one file.

    include("header.html");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  This is the Home Page<br>
  Stuff about your home page can go here. <br>
</body>
</html>

<?php
  include("footer.html");
?>