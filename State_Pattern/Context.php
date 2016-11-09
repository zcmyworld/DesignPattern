<?php

class Context
{
    private $state = null;

    public function setState($state)
    {
        $this->state = $state;
    }
    
    public function doAction()
    {
        $this->state->doAction(); 
    }
}