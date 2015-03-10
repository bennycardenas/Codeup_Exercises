<?php 

$a = 6;
$b = 11;
$c = '11';

// if($a < $b) {
// 	echo "$a is less than $b\n";
// }

// if ($b>$a) {
// 	echo "$b is greater than $a\n";
// }

// CHANGED ABOVE 2 STATEMENTS TO if/else STATEMENT
if($a < $b){
	echo "$a is less than $b\n";
} else {
	echo "$b is greater than $a\n";
}

// if($b >= $c) {
// 	echo "$b is greater than or equal to $c\n";
// }

// if ($b <= $c) {
// 	echo "$b is less than or equal to $c\n";
// }

// CHANGED ABOVE 2 STATEMENTS TO if/else STATEMENT
if($b >= $c) {
	echo "$b is greater than or equal to $c\n";
} else {
	echo "$b is less than or equal to $c\n";
}


// 

// if ($b === $c){
// 	echo "$b is identical to $c\n";
// } elseif($b == $c){
// 	echo "$b is equal to $c\n";
// } elseif ($b !== $c) {
// 	echo "$b is not identical to $c\n";
// } elseif ($b != $c) {
// 	echo "$b is not equal to $c\n";
// }



// CHANGED ABOVE 4 STATEMENTS TO FOLLOWING elseif STATEMENT




if($b == $c){
	echo "$b is equal to $c\n";
} elseif ($b === $c){
	echo "$b is identical to $c\n";
} elseif ($b != $c) {
	echo "$b is not equal to $c\n";
} else ($b !== $c) {
	echo "$b is not identical to $c\n";
}



