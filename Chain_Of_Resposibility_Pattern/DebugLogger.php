<?php
require_once './AbstractLogger.php';

class DebugLogger extends AbstractLogger
{
    protected $logLevel = 2;

    public function write()
    {
        echo "简单的调试信息，输出到控制台\n";
    }
}