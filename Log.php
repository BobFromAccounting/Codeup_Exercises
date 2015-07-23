<?php

class Log
{
    public $filename;
    public function $logMessage($logLevel, $message)
    {
        $today = date("Y-m-d");
        $logSpecificTime =  date("Y-m-d H:i:s");
        $filename = "log/log-{$today}.log";
        $stringToWrite =  "{$logSpecificTime} [{$logLevel}] {$message}";
        $handle = fopen($filename, 'a');
        fwrite($handle, PHP_EOL . $stringToWrite);
        fclose($handle);
    }

    public function logInfo ($message)
    {
        return $this->logMessage('INFO', $message);
    }

    public function logError ($message)
    {
        return $this->logMessage('ERROR', $message);
    }
}





?>