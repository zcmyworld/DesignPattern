<?php
abstract class AbstractPlayer
{
    protected $playerName = null;
    
    function __construct($playerName)
    {
        $this->playerName = $playerName;
    }
    
    abstract public function kill();
    
    abstract public function upgrade();
    
    abstract public function login($now);
}

