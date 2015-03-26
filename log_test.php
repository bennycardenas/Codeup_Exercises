<?php

require_once 'Log.php';


$newLogEntry = new Log();


$newLogEntry->info('Did this log entry get sent after all?');
$newLogEntry->error('Oopsy this is an error!');

?>