<?php
require_once './AbstractLogger.php';

class InfoLogger extends AbstractLogger
{
    protected $logLevel = 1;
    
    public function write()
    {
        echo "运行日志，输出到控制台\n";
    }
}