<?php
require_once "./AbstractTimer.php";
class Timer extends AbstractTimer
{
    public function getTime()
    {
        return time();
    }
}