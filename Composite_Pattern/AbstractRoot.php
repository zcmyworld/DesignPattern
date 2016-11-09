<?php
abstract class AbstractRoot
{
    protected $leafContainer = array();
    
    private $rootName = null;
    
    
    function __construct($rootName)
    {
        $this->rootName = $rootName;
    }

    public function getRootName()
    {
        return $this->rootName;
    }

    abstract public function add($item);
    
    
    abstract public function getList();
    
    
}