<?php

require_once "./Memento.php";

require_once "./Caretaker.php";

class Originator
{
    private $state = null;

    public function setState($state)
    {
        $this->state = $state;
    }

    public function getState()
    {
        return $this->state;
    }

    public function createMemento()
    {
        return new Memento($this->state);
    }
    
    public function restoreMemento($memento)
    {
        $this->state = $memento->getState(); 
    }
}