<?php

class OperationContext
{
    private $operaion = null;
    private $numA = null;
    private $numB = null;
    
    function __construct($operation)
    {
        $this->operaion = $operation;
    }
    
    public function setNumA($numA)
    {
        $this->numA = $numA;
    }
    
    public function setNumB($numB)
    {
        $this->numB = $numB;
    }
    
    
    public function doOperation() {
        $this->operaion->setNumA($this->numA);
        $this->operaion->setNumB($this->numB);
        $this->operaion->doOperation();
    }
}