<?php
require_once './AbstractLogger.php';

class ErrorLogger extends AbstractLogger
{
    protected $logLevel = 3;

    public function write()
    {
        echo "致命信息，保存到数据库\n";
    }
}