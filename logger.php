<?php

// $newCities = ['Changhua County, Taiwan', 'Hamina, Finland', 'St Ghislain, Belgium', 'Dublin, Ireland'];

// $filename = 'txt/cities.txt';
// $handle = fopen($filename, 'a');
// foreach ($newCities as $city) {
//     fwrite($handle, $city . PHP_EOL);
// }

// echo 'File was written'. PHP_EOL;

// $contents = trim(fread($handle, filesize($filename)));
// $contentArray = explode("\n", $contents);
// var_dump($contents);

// fclose($handle);

//-----------------------------------------------------------------

function logMessage($logType, $message)
{
//     // todo - complete this function
		$timeZone = date_default_timezone_set("America/Chicago");
		$date = date('Y-m-d');
		$time = date('h:i:s a ');
		
		$filename = "log-{$date}.txt";
		$handle = fopen($filename, 'a');
		
		fwrite($handle, "$date $time [$logType] $message" . PHP_EOL);

		// echo 'File was written'. PHP_EOL;

}

function logError($message) {
	logMessage('Error', $message);
} 	

function logInfo($message){
	logMessage('Info' , $message);
}


logInfo("This is an info message.");
logError("Incorrect password.");






// echo $date;
// need to look up hours minutes and seconds

