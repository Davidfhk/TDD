<?php

namespace Kata;

class FizzBuzz
{

	function Number($number){

	if ($this->MultipleOfThree($number)) {

		return 'fizz';

		}
		return $number;
	}

	function MultipleOfThree($number){
		return $number % 3 == 0;
	}

}