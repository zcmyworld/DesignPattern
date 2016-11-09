<?php

class Car
{
    private $wheel = null;
    private $engine = null;

    public function setWheel($wheel) 
    {
        var_dump("set a wheel");
        $this->wheel = $wheel;
    }

    public function setEngine($engine) 
    {
        var_dump("set a engine");
        $this->engine = $engine;
    }
    
}