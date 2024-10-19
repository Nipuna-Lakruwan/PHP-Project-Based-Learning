<?php

  // Switch Statements = Alternative to IF Statements when you have a lot of conditions
  //                     and you want to avoid a lot of ELSE IF Statements

  // $grade = "Pizza";

  // switch ($grade) {
  //   case "A":
  //     echo "You got an A";
  //     break;
  //   case "B":
  //     echo "You got a B";
  //     break;
  //   case "C":
  //     echo "You got a C";
  //     break;
  //   case "D":
  //     echo "You got a D";
  //     break;
  //   case "F":
  //     echo "You got an F";
  //     break;
  //   default:
  //     echo "{$grade} Invalid Grade";
  // }

  $date = date("l");

    switch($date){
      case "Monday":
        echo "I hate Mondays";
        break;
      case "Tuesday":
        echo "It is Taco Tuesday";
        break;
      case "Wednesday":
        echo "The Lecture week is half over";
        break;
      case "Thursday":
        echo "It's almost the weekend";
        break;
      case "Friday":
        echo "The weekend is here";
        break;
      case "Saturday":
        echo "Time to party";
        break;
      case "Sunday":
        echo "Time to relax";
        break;
      default:
        echo "{$date} is not a valid day";
    }

  

?>