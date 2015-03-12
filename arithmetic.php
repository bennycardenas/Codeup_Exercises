<?php 

// $a = 4;
// $b = 7;


function add($a, $b) {
    if(is_numeric($a) && is_numeric($b)){
    	echo $a + $b. PHP_EOL;
    } else {
    	echo "Uh, oh.. try using a number";
    }   
}

function subtract($a, $b) {
    // Add code here
	if(is_numeric($a) && is_numeric($b)){
    	echo $a - $b. PHP_EOL;
    } else {
    	echo "Uh, oh.. try using a number";
    }  
}

function multiply($a, $b) {
    // Add code here
	if(is_numeric($a) && is_numeric($b)){
    	echo $a * $b. PHP_EOL;
    } else {
    	// echo "Uh, oh.. one of '$a' or '$b' isn't a number";
    	errors($a, $b);
    } 
}

function divide($a, $b) {
    // Add code here
	if ($b == 0){
		echo "Uh, oh.. \$b is zero" . PHP_EOL;
	} else {
		echo $a / $b. PHP_EOL;
	}
}

function modulus($a, $b){
	// Modulus
	if(is_numeric($a) && is_numeric($b)){
    	echo $a % $b . PHP_EOL;
    } else {
    	echo "Uh, oh.. try using a number";
    }	
}

function errors($a, $b){
	echo "Uh, oh.. try using a number";
	}



// }

// FOR SECOND SET OF EXERCISES
// divide(5, 0);
// modulus(10, 5);
// subtract(30, 20);
// add(25, 25);

multiply(20, 'z');





// FOR FIRST SET OF EXERCISES
// divide(6, 6);
// subtract($a,$b);
// multiply($a,$b);
// add(100, 2000);
// modulus(23, 79);




