<?php

namespace Kata;

class FizzBuzz
{

	function Number($number){

	if ($this->MultipleOfThree($number)) {

		return 'fizz';

	}

	if ($number % 5 == 0){

		return 'buzz';

	}

	return $number;
	}

	function MultipleOfThree($number){
		return $number % 3 == 0;
	}

}