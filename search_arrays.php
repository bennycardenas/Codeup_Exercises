<?php 

// first names
$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function mySearch($query, $array){
	$found = false;

	foreach($array as $value) {
		if ($query == $value){
			$found = true;
		} else {
			return false;
		}
	}
	return $found;
}


function compareArrays($names, $compare){
	$count = 0;

	foreach ($names as $element) {
		$result = array_search($element, $compare)
		
		if (is_numeric($result)){
			count++;
		}
	}
	return $count;	
}




