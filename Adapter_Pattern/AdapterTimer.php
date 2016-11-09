<?php
require_once "./AbstractTimer.php";

class AdapterTimer extends AbstractTimer
{
    private $contcreteTimer = null;
    
    public function __construct($concreteTimer)
    {
        $this->contcreteTimer = $concreteTimer;
    }
    
    public function getTime()
    {
        return date("Y-m-d", $this->contcreteTimer->getTime());
    }
}

