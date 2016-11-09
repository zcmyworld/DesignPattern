<?php

class Memento
{
    private $state = null;
    
    function __construct($state)
    {
        $this->state = $state;
    }

    public function getState()
    {
        return $this->state;
    }
}