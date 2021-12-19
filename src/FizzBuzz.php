<?php

namespace App;

Class FizzBuzz{


    


public function getfizzBuzz($number) {

    $fizz="";
    $buzz="";

    if (($number % 3 == 0) or  (strpos($number, '3')) !==false) {
        $fizz = "Fizz";
    }

    if (($number % 5 == 0) or  (strpos($number, '5')) !==false) {
        $fizz = "Buzz";
    }

    $fizzBuzz = $fizz . $buzz;

    if ($fizzBuzz ==="") {
        return $number;
    }

   return $fizzBuzz;

}

}

?>