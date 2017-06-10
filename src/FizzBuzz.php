<?php

namespace Kata;

class FizzBuzz
{

	function Number($number){


		if ($this->MultipleOfThree($number) && $this->MultipleOfFive($number)) {
			return 'fizzbuzz';
		}
		if ($this->MultipleOfThree($number)) {
			return 'fizz';
		}
		if ($this->MultipleOfFive($number)) {
			return 'buzz';
		}

	return $number;

	}

	function MultipleOfThree($number){
		return $number % 3 == 0;
	}

	function MultipleOfFive($number){
		return $number % 5 == 0;
	}

	function ShowNumbers(){
		$list = [];
		for ($i=1; $i<=100 ; $i++) { 
			$list[$i] = $this->Number($i);
		}
	var_dump($list);
	}

}