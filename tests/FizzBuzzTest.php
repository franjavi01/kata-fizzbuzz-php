<?php

namespace Tests;

use App\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase {
    
    public function test_fizz_if_divisible_by_3() {
        // given 
        $number = 3;
        $fizzBuzz = new FizzBuzz;
        // when
        $result = $fizzBuzz-> getfizzBuzz($number);
        // then
        $this->assertEquals('Fizz', $result);
    }

}

?>