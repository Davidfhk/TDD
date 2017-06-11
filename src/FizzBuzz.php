<?php

namespace Kata;

class FizzBuzz
{
	const FIZZ_NUMBER = 4;
	const BUZZ_NUMBER = 6;
	const FIZZBUZZ_NUMBER = 12;

	function Number($number){


		if ($this->IsFizzBuzz($number)) {
			return 'fizzbuzz';
		}
		if ($this->IsFizz($number)) {
			return 'fizz';
		}
		if ($this->IsBuzz
			($number)) {
			return 'buzz';
		}

	return $number;

	}

	function IsFizz($number){
		return $number % self::FIZZ_NUMBER == 0;
	}

	function IsBuzz($number){
		return $number % self::BUZZ_NUMBER == 0;
	}

	function IsFizzBuzz ($number){
		return $number % self::FIZZBUZZ_NUMBER == 0;
	}

	function ShowNumbers(){
	$list = [];
		for ($i=1; $i<=100 ; $i++) { 
			$list[$i] = $this->Number($i);
		}
	var_dump($list);
	}

}