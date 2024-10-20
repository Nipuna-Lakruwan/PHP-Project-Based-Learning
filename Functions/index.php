<?php

  // Functions = Write some code once, reuse when you need it
                //  type () after function name to invoke it
                //  ex. add() subtract() multiply() divide()

  // function happy_birthday($first_name, $age){
  //   echo "Happy Birthday to {$first_name}! <br>";
  //   echo "Happy Birthday to you! <br>";
  //   echo "Happy Birthday dear {$first_name}! <br>";
  //   echo "Happy Birthday to you! <br>";
  //   echo "You are now {$age} years old! <br><br>";

  //   return;
  // }

  // happy_birthday("Nipuna", 22);
  // happy_birthday("John", 25);
  // happy_birthday("Jane", 30);


  // function is_even($number){
  //   $result = $number % 2;
  //   echo $result == 0 ? "The number {$number} is even" : "The number {$number} is odd";
  // }

  // is_even(5);

  function hypotenuse($a, $b){
    $c = sqrt($a ** 2 + $b ** 2);
    return $c;
  }

  echo hypotenuse(4, 5);

?>