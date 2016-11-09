<?php

class Tools
{
    private $toolsName = null;
    
    private $powerOn = false;

    function __construct($key)
    {
        $this->toolsName = $key;
    }

    public function isPowerOn()
    {
        return $this->powerOn;
    }

    public function setPowerOn()
    {
        $this->powerOn = true;
    }

    public function getToolsName()
    {
        return $this->toolsName;
    }
}

