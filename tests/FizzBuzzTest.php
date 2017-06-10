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

    /**
     * @test
     *
     */
    public function returnFizz()
    {
        $kata = new FizzBuzz();
        $result = $kata->number(3);
        $this->assertEquals('fizz', $result);
    }

    /**
     * @test
     *
     */
    public function returnBuzz()
    {
        $kata = new FizzBuzz();
        $result = $kata->number(5);
        $this->assertEquals('buzz', $result);
    }

    /**
     * @test
     *
     */
    public function returnFizzBuzz()
    {
        $kata = new FizzBuzz();
        $result = $kata->number(15);
        $this->assertEquals('fizzbuzz', $result);
    }

    /**
     * @test
     *
     */
    public function returnListNumbers()
    {
        $kata = new FizzBuzz();
        $result = $kata->ShowNumbers();
        
    }

}