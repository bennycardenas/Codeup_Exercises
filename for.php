<?php 

do {

	fwrite(STDOUT, "Enter a starting number: ");
	$start = trim(fgets(STDIN));
	fwrite(STDOUT, "Enter an ending number: ");
	$end = trim(fgets(STDIN));
	fwrite(STDOUT, "Enter a number to increment by: ");
	$inc = trim(fgets(STDIN));

	if (!is_numeric($start) || !is_numeric($end)){
		fwrite(STDOUT, "Please enter numbers! \n");

		} else {
			for ($i = $start; $i <= $end; $i += $inc){
			echo "$i\n";
		}

	}

} while (!is_numeric($start) || !is_numeric($end));



