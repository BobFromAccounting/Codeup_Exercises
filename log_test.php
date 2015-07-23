<?php
    require_once 'Log.php';

    $today = date("Y-m-d");

    $log = new Log();

    $log->filename = "log/log-{$today}.log";
    
    $log->logInfo("Gobbledegook");
    $log->logError("Worse gobbledegook");
    $log->logMessage('WARNING', "You might have gobbledegook!");
?>