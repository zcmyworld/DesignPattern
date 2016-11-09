<?php

class Caretaker
{
    private $memento = null;
    
    public function setMemento($memento)
    {
        $this->memento = $memento;
    }

    public function getMemento()
    {
        return $this->memento;
    }
}
