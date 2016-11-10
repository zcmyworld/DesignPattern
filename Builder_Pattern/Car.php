<?php

class Car
{
    private $engine = null;
    private $wheel = null;

    function __construct($engine, $wheel)
    {
        $this->engine = $engine;
        $this->wheel = $wheel;
    }

    public function getName()
    {
        var_dump($this->engine->getName());
        var_dump($this->wheel->getName());
        var_dump("Car loaded ..");
    }
}