<?php 

$books = array(
    'The Hobbit' => array(
        'published' => 1937,
        'author' => 'J. R. R. Tolkien',
        'pages' => 310
    ),
    'Game of Thrones' => array(
        'published' => 1996,
        'author' => 'George R. R. Martin',
        'pages' => 835
    ),
    'The Catcher in the Rye' => array(
        'published' => 1951,
        'author' => 'J. D. Salinger',
        'pages' => 220
    ),
    'A Tale of Two Cities' => array(
        'published' => 1859,
        'author' => 'Charles Dickens',
        'pages' => 544
    )
);

// echo "\n-----------------Books-------------------\n\n";

// foreach ($books as $key => $value) {
// 	echo "$key" . PHP_EOL;
// 	// echo $value['published']. PHP_EOL . PHP_EOL;

// 	foreach ($value as $key => $value) {
// 		echo "$key: $value". PHP_EOL;
// 		// echo $value2['published'];
// 		// if ()
// 	}
// 	echo "\n-------------------\n\n";
// }


echo "\n--------------Books After 1958--------------\n\n";


foreach ($books as $key => $value) {
		if($value['published']>1950){
		echo "$key" . PHP_EOL;

			foreach ($value as $key2 => $value2) {
				echo "$key2: $value2". PHP_EOL;
			}
		
		echo "\n-------------------\n\n";
	}
}
	




