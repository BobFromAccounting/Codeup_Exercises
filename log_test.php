<?php
    require_once 'Log.php';

    $log = new Log('cli');
    
    $log->logInfo("Gobbledegook");
    $log->logError("Worse gobbledegook");
    $log->logMessage('WARNING', "You might have gobbledegook!");
?>