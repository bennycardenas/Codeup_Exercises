<?php 
// ordered by sales units from High to Low
// Column header should appear as:
// Office |  Date          |  Report Name
// Total Sales | Number of Employees | Units per Employee
// Units  | Full Name      | Employee Number
// 5	   Bob Bobbersom    2

function parseSalesReport($filename)
{
	// $reports = array();
	$handle = fopen($filename, 'r');
	$contentsString = fread($handle, filesize($filename));

	$arrayOfLines = explode("\n", $contentsString);
	// var_dump($arrayOfLines);

		// TO SAVE FIRST THREE LINES OF TXT FILE TO VARIABLES
		// $reportName = array_shift($arrayOfLines);
		// $reportDate = array_shift($arrayOfLines);
		// $officeName = array_shift($arrayOfLines);

	$topArray = array_slice($arrayOfLines, 0, 3);
	ksort($topArray);
	$topString = join(" | ", $topArray);

	//EXPLODE FROM [6] FORWARD AT THE COMMAS
	$bottomArray = array_slice($arrayOfLines, 6);
	// var_dump($bottomArray);

	foreach ($bottomArray as $item) {
		$newBottomArray[] = explode(", ", $item);
		// var_dump($bottomArray);
	}

	// foreach ($newBottomArray as $item) {

	// }


	fclose($handle);
    return $newBottomArray;
}


parseSalesReport('Sales_Report.txt');
print_r(parseSalesReport('Sales_Report.txt'));



