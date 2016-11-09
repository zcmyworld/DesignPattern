<?php
abstract class AbstractLogger
{
    protected $nextLogger = null;

    protected $logLevel = null;

    protected abstract function write();

    public function setNextLogger($nextLogger)
    {
        $this->nextLogger = $nextLogger;
    }

    public function logMessage($logLevel)
    {
        if ($this->logLevel == $logLevel) {
            $this->write();
            return;
        }

        $this->nextLogger->logMessage($logLevel);
    }

}
