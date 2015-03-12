<?php 

// $a = 4;
// $b = 7;


function add($a, $b) {
    if(is_numeric($a) && is_numeric($b)){
    	// echo $a + $b. PHP_EOL;
    	return $a + $b. PHP_EOL;
    } else {
   	 	// echo "Uh, oh.. try using a number";
   	 	errors($a, $b);
    }   
}

function subtract($a, $b) {
    // Add code here
	if(is_numeric($a) && is_numeric($b)){
    	// echo $a - $b. PHP_EOL;
    	return $a - $b. PHP_EOL;
    } else {
    	// echo "Uh, oh.. try using a number";
    	errors ($a, $b);
    }  
}

function multiply($a, $b) {
    // Add code here
	if(is_numeric($a) && is_numeric($b)){
    	// echo $a * $b. PHP_EOL;
    	return $a * $b. PHP_EOL;
    } else {
    	// echo "Uh, oh.. one of '$a' or '$b' isn't a number";
    	errors($a, $b);
    } 
}

function divide($a, $b) {
    // Add code here
	if ($b == 0){
		// echo "Uh, oh.. \$b is zero" . PHP_EOL;
		errorsDivide($a, $b);
	} else {
		// echo $a / $b. PHP_EOL;
		echo $a / $b. PHP_EOL;
	}
}

function modulus($a, $b){
	// Modulus
	if(is_numeric($a) && is_numeric($b)){
    	// echo $a % $b . PHP_EOL;
    	return $a % $b . PHP_EOL;
    } else {
    	errors($a, $b);
    }	
}

function errors($a, $b){
	echo "Uh, oh.. try using a number";
	}

function errorsDivide($a, $b){
	echo "Oops, you can't divide by '0'";
}


// FOR SECOND SET OF EXERCISES
// divide(5, 0);
// modulus(10, 5);
// subtract(30, 20);
// add(25, 25);

//VERIFIED FUNCTIONS WORKING WITH error function
//AND ECHOING RETURN
// echo multiply(20, 3);
// echo divide(10, 5);
// echo modulus(20, 7);
// echo subtract (10,7);
// echo add (10,7);


// FOR FIRST SET OF EXERCISES - INITIAL
// divide(6, 6);
// subtract($a,$b);
// multiply($a,$b);
// add(100, 2000);
// modulus(23, 79);




