<?php
require_once "./IOperation.php";

class DelOperation implements IOperation
{
    private $numA = null;
    private $numB = null;

    public function setNumA($numA)
    {
        $this->numA = $numA;
    }

    public function setNumB($numB)
    {
        $this->numB = $numB;
    }
    
    public function doOperation()
    {
        echo "计算结果：\n";
        echo $this->numA - $this->numB;
        echo "\n";
    }
}
