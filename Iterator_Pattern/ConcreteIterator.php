<?php
require_once "./IIterator.php";

class ConcreteIterator implements IIterator
{
    private $container = array();

    private $index = 0;


    public function __construct($container)
    {
        $this->container = $container;
    }

    public function hasNext()
    {
        if (count($this->container) <= ($this->index)) {
            return false;
        }
        return true;
    }


    public function next()
    {
        return $this->container[$this->index ++];
    }
}