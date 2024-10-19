<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="post">
  <label>User Name:</label><br>
  <input type="text" name="user_name"><br>
  <label>Password:</label><br>
  <input type="password" name="password"><br>
  <input type="submit" value="Log in">
  </form>
</body>
</html>
<?php

      // $_GET, $_POST = special variables used to collect data from an HTML form
      //                 data is sent to the file in the action attribute of <form>
      //                 <form action="index.php" method="get">

      // $_GET = associative array of variables passed to the current script via the URL parameters
      //         data is visible to everyone in the URL
      //         useful for sending non-sensitive data
      //         can be bookmarked
      //         can be cached
      //         never use $_GET for passwords or other sensitive data
      //         can be used to send up to 2048 characters
      //         can be used to send ASCII characters only
      //         can be used to send data in plain text
      //         can be used to send data in the URL
      //         can be used to send data in the header
      //         can be used to send data in the cache
      //         can be used to send data in the browser history
      //         can be used to send data in the cookies
      //         can be used to send data in the web server logs
      //         can be used to send data in the browser
      //         can be used to send data in the status bar
      //         can be used to send data in the bookmarks
      //         can be used to send data in the referrer
      //         can be used to send data in the location object
      //         can be used to send data in the form action attribute
      //         can be used to send data in the form method attribute
      //         can be used to send data in the form enctype attribute
      //         can be used to send data in the form target attribute
      //         can be used to send data in the form autocomplete attribute
      //         can be used to send data in the form novalidate attribute
      //         can be used to send data in the form accept-charset attribute
      //         can be used to send data in the form name attribute
      //         can be used to send data in the form accept attribute
      //         can be used to send data in the form action attribute
      //         can be used to send data in the form method attribute
      //         can be used to send data in the form enctype attribute
      //         can be used to send data in the form target attribute
      //         can be used to send data in the form autocomplete attribute
      //         can be used to send data in the form novalidate attribute
      //         can be used to send data in the form accept-charset attribute
      //         can be used to send data in the form name attribute
      //         can be used to send data in the form accept attribute
      //         can be used to send data in the form action attribute
      //         can be used to send data in the form method attribute
      //         can be used to send data in the form enctype attribute
      //         can be used to send data in the form target attribute
      //         can be used to send data in the form autocomplete attribute
      //         can be used to send data in the form novalidate attribute
      //         can be used to send data in the form accept-charset attribute
      //         can be used to send data in the form name attribute
      //         can be used to send data in the form accept attribute

      // $_POST = associative array of variables passed to the current script via the HTTP POST method
      //          data is not visible to everyone in the URL
      //          useful for sending sensitive data
      //          cannot be bookmarked
      //          cannot be cached
      //          never use $_POST for passwords or other sensitive data
      //          can be used to send up to 8MB of data
      //          can be used to send binary data
      //          can be used to send data in the body
      //          can be used to send data in the header
      //          can be used to send data in the cache
      //          can be used to send data in the browser history
      //          can be used to send data in the cookies
      //          can be used to send data in the web server logs
      //          can be used to send data in the browser
      //          can be used to send data in the status bar
      //          can be used to send data in the bookmarks
      //          can be used to send data in the referrer
      //          can be used to send data in the location object
      //          can be used to send data in the form action attribute
      //          can be used to send data in the form method attribute
      //          can be used to send data in the form enctype attribute
      //          can be used to send data in the form target attribute
      //          can be used to send data in the form autocomplete attribute
      //          can be used to send data in the form novalidate attribute
      //          can be used to send data in the form accept-charset attribute
      //          can be used to send data in the form name attribute
      //          can be used to send data in the form accept attribute
      //          can be used to send data in the form action attribute
      //          can be used to send data in the form method attribute
      //          can be used to send data in the form enctype attribute
      //          can be used to send data in the form target attribute
      //          can be used to send data in the form autocomplete attribute
      //          can be used to send data in the form novalidate attribute
      //          can be used to send data in the form accept-charset attribute
      //          can be used to send data in the form name attribute
      //          can be used to send data in the form accept attribute
      //          can be used to send data in the form action attribute
      //          can be used to send data in the form method attribute
      //          can be used to send data in the form enctype attribute
      //          can be used to send data in the form target attribute
      //          can be used to send data in the form autocomplete attribute
      //           can be used to send data in the form novalidate attribute
      //           can be used to send data in the form accept-charset attribute
      //           can be used to send data in the form name attribute

    //GET
    // http://localhost:3000/$_GET%20and%20$_POST/index.php?user_name=Nipuna&password=Nipuna
    echo "{$_GET['user_name']} <br>";
    echo "{$_GET['password']} <br>";

    //POST
    // http://localhost:3000/$_GET%20and%20$_POST/index.php
    echo "{$_POST['user_name']} <br>";
    echo "{$_POST['password']} <br>";
?>