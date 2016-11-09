<?php
require_once "./ConcreteIterator.php";
class Container
{
    private $container = array();

    private $concreteIterator = null;
    
    public function setContainer($item)
    {
        array_push($this->container, $item);
    }
    
    public function getContainer()
    {
        return $this->container;
    }

    public function iterator()
    {
        if ($this->concreteIterator) {
            return $this->concreteIterator;
        }
        $this->concreteIterator = new ConcreteIterator($this->container);
        return $this->concreteIterator;
    }
    
}