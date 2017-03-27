<?php


$testArray = ['g','r','c','t','s','a'];
$testArray2 = ['g','h','k','l', 'b','d'];

function sortArray ($array){
	$alphabet = range('a','z');
	// print_r ($alphabet);
		$sortedArray = [];

	foreach ($alphabet as $key => $value) {
		foreach ($array as $number => $character) {
			if ($character == $value) {
				$sortedArray[]  = $character;
			}
		}
	}
return $sortedArray;
}



print_r(sortArray($testArray));
print_r(sortArray($testArray2));

// foreach char in $testArray key and value, must be equal to that in $alphabet
// if x > 1 to y::before => echo \
