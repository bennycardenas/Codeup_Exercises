

<?php 

// 99 bottles of beer on the wall, 99 bottles of beer.
// Take one down and pass it around, 98 bottles of beer on the wall.

// 98 bottles of beer on the wall, 98 bottles of beer.
// Take one down and pass it around, 97 bottles of beer on the wall.

// 97 bottles of beer on the wall, 97 bottles of beer.
// Take one down and pass it around, 96 bottles of beer on the wall.

// ...

// 1 bottle of beer on the wall, 1 bottle of beer.
// Take one down and pass it around, no more bottles of beer on the wall.

// No more bottles of beer on the wall, no more bottles of beer.
// Go to the store and buy some more, 99 bottles of beer on the wall.



for($i = 5; $i >= 0; $i--){

	if($i == 0){
		echo "No more bottles of beer on the wall, no more bottles of beer.\n";
		echo "Go to the store and buy some more, 99 bottles of beer on the wall.\n\n";
	} else if ($i == 1) {
		echo "$i bottle of beer on the wall, $i bottle of beer. \n";
		echo "Take one down and pass it around, no more bottles of beer on the wall.\n\n";
	} else {
		echo "$i bottles of beer on the wall, $i bottles of beer.\n";
		echo "Take one down and pass it around, " . ($i-1) . " bottles of beer on the wall.\n\n";
		
		// if ($i == 2){
		// 	echo "Take one down and pass it around, $i bottle of beer on the wall.\n\n";
		// 	}

	}
}




