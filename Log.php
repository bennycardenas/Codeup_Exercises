<?php

class Log

{
    public $filename;
    public $handle;
    
    public function __construct()
    {
        $timeZone = date_default_timezone_set("America/Chicago");
        $date = date('Y-m-d');
        $time = date('h:i:s a ');
        $this->filename = "log-{$date}-{$time}.txt";
        $this->handle = fopen($this->filename, 'a'); 
    }

    public function logMessage($logType, $message)
    {
        fwrite($this->handle, "$logType $message" . PHP_EOL);   
    }

    public function info($message)
    {
        $this->logMessage('Info:', $message );
    }

    public function error($message)
    {
        $this->logMessage('Error:', $message );
    }

    public function __destruct()
    {
        fclose($this->handle);
    }

}



?>