<?php

$null = null;
$blankString = '';
$array = array(1, 2, 3);

// Create a function that checks if a variable is set or empty, and display "$variable_name is SET|EMPTY"

function setOrEmpty($variable, $variable_name) {
	if(isset($variable)){
		return "$variable_name is SET" .PHP_EOL;
	}
	if (empty($variable)){
		return "$variable_name is EMPTY" . PHP_EOL;
	}
}

echo setOrEmpty($blankString, '$blankString');


// TEST: If var $nothing is set, display '$nothing is SET'
if(isset($null) ){
	echo "$null is set" .PHP_EOL;
}

// TEST: If var $nothing is empty, display '$nothing is EMPTY'
if(empty($null)) {
	echo "$null is EMPTY" .PHP_EOL;
}

// TEST: If var $something is set, display '$something is SET'
if(isset($blankString)){
	echo '$blankString is SET' .PHP_EOL;
}

// Serialize the array $array, and output the results
echo serialize($array).PHP_EOL.PHP_EOL;

// Unserialize the array $array, and output the results
print_r(unserialize(serialize($array)));



