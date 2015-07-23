<?php
class Log
{
    public $filename;

    public function logMessage ($logLevel, $message)
    {
        $logSpecificTime =  date("Y-m-d H:i:s");
        $stringToWrite =  "{$logSpecificTime} [{$logLevel}] {$message}";
        $handle = fopen($this->filename, 'a');
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