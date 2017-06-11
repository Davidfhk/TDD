<?php

namespace Kata\Tests;

use Kata\FizzBuzz;

class FizzBuzzTest extends \PHPUnit_Framework_TestCase
{
  const FIZZ_NUMBER = 4;
  const BUZZ_NUMBER = 6;
  const FIZZBUZZ_NUMBER = 12;

	  /** 
     * @test
     *
     */
    public function returnNumber()
    {
        $kata = new FizzBuzz();
       	$result = $kata->Number(1);
      	$this->assertEquals(1, $result);
    }

    /**
     * @test
     *
     */
    public function returnFizz()
    {
        $kata = new FizzBuzz();
        $result = $kata->Number(self::FIZZ_NUMBER);
        $this->assertEquals('fizz', $result);
    }

    /**
     * @test
     *
     */
    public function returnBuzz()
    {
        $kata = new FizzBuzz();
        $result = $kata->Number(self::BUZZ_NUMBER);
        $this->assertEquals('buzz', $result);
    }

    /**
     * @test
     *
     */
    public function returnFizzBuzz()
    {
        $kata = new FizzBuzz();
        $result = $kata->Number(self::FIZZBUZZ_NUMBER);
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