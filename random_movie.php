<?php

$inputFile  = 'movies.txt';
$outputFile = 'sorted_movies.txt';

/**
 * Read in a file, return contents as an array
 **/



function readLines($inputFile)
{
	//fread
	$filename = $outputFile;
	$handle = fopen($filename, 'w');

	fclose($handle);
	return
}

/**
 * Write contents of an array to a file
 **/
function writeLines($outputFile, $movies)
{
	//fwrite
		$filename = $outputFile;
		$handle = fopen($filename, 'w');
		
		fwrite($handle, "" . PHP_EOL); // $movieList is what turned movie array back into a list
}

/**
 * Pick a random movie from an array
 **/
function randomMovie($movies)
{
	random
}

$movies = readLines($inputFile); // file that will be read and stored as an array
$randomMovie = randomMovie($movies); // movies is gonna be an array

echo "Let's watch " . $randomMovie . "!\n";
echo "But " . $randomMovie . " really sucks!\n";

sort($movies);

writeLines($outputFile, $movies);