<?php 


//Create a do-while loop that will count by 2's starting
// with 0 and ending at 100. Follow each number with a newline.

// $start = 0;
// do {
// 	echo $start . PHP_EOL;
// 	$start += 2;
// } while ($start <= 100);


// Alter your loop to count backwards by 5's from 100 to -10.

// $start = 100;
// do {
// 	echo $start . PHP_EOL;
// 	$start -= 5;
// } while ($start >= -10);

// Create a do-while loop that starts at 2, and displays the
//  result $a * $a on each line while $a is less than 1,000,000.
//   Output should equal:
$start = 2;
do {
	echo $start . PHP_EOL;
	$start *= $start;
} while ($start < 1000000);

