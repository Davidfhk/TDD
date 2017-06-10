<?php

namespace Kata\Tests;

use Kata\FizzBuzz;

class FizzBuzzTest extends \PHPUnit_Framework_TestCase
{

	  /** 
     * @test
     *
     */
    public function returnNumber()
    {
        $kata = new FizzBuzz();
       	$result = $kata->number(1);
      	$this->assertEquals(1, $result);
    }

}